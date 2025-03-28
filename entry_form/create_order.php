<?php
// Włącz błędy
ini_set('display_errors', 0);      // nie pokazuj błędów użytkownikowi
ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);            // loguj wszystko (do pliku, nie do outputu)
error_reporting(0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php_errors.log');

file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php działa\n", FILE_APPEND);
if (!function_exists('curl_init')) {
    file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php Brak curl_init()\n", FILE_APPEND);
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Brak rozszerzenia cURL w PHP"]);
    exit;
}

require __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;
require("../global.php");

ob_clean();
header('Content-Type: application/json');

// Ładowanie .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Konfiguracja
$pos_id = $_ENV['PAYU_POS_ID'];
$client_id = $_ENV['PAYU_CLIENT_ID'];
$client_secret = $_ENV['PAYU_CLIENT_SECRET'];
$payu_url = $_ENV['PAYU_URL'];

// Parsuj dane z POST JSON
$input = json_decode(file_get_contents("php://input"), true);
file_put_contents(__DIR__ . "/debug_post.log", "\n[Input] " . json_encode($input) . "\n", FILE_APPEND);
file_put_contents(__DIR__ . "/debug_post.log", "\n[Konfiguracja] client_id=$client_id, client_secret=$client_secret, pos_id=$pos_id\n", FILE_APPEND);

$name = $input['name'] ?? '';
$surname = $input['surname'] ?? '';
$email = $input['email'] ?? '';
$amount = $input['amount'] ?? 0;
$sessionId = $input['sessionId'] ?? uniqid("sess_", true); // fallback awaryjny


if ($name === "" || $surname === "" || $email === "") {
    echo json_encode(["status" => "error", "message" => "Brak podstawowych danych użytkownika (imie, nazwisko, email)"]);
    exit;
}
if ($amount != $ammount_to_pay) {
    echo json_encode(["status" => "error", "message" => "Kwota z formularza nie zgadza sie z kwotą ustaloną."]);
    exit;
}

// Token
function getAccessToken($client_id, $client_secret, $payu_url) {
    $credentials = base64_encode("$client_id:$client_secret");

    $ch = curl_init("$payu_url/pl/standard/user/oauth/authorize");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic $credentials",
        "Content-Type: application/x-www-form-urlencoded"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);
    curl_close($ch);

    file_put_contents(__DIR__ . "/debug_post.log", "\n[PayU Token Raw] $result\n", FILE_APPEND);

    $response = json_decode($result, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        file_put_contents(__DIR__ . "/debug_post.log", "\n[JSON Decode Error] " . json_last_error_msg() . "\n", FILE_APPEND);
        return null;
    }

    return $response['access_token'] ?? null;
}

// Zamówienie
function createOrder($access_token, $payu_url, $pos_id, $amount, $email, $name, $surname) {
    
    $order = [
        "notifyUrl" => $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/entry_form/notify.php",
        "customerIp" => $_SERVER['REMOTE_ADDR'],
        "merchantPosId" => $pos_id,
        "description" => "Mistrzostwa amatorskiego MMA Bojano, 10.05.2025",
        "currencyCode" => "PLN",
        "totalAmount" => strval($amount),
        "extOrderId" => $sessionId,
        "buyer" => [
            "email" => "$email",
            "firstName" => "$name",
            "lastName" => "$surname",
            "language" => "pl"
        ],
        "products" => [
            [
                "name" => "Wpisowe na zawody - 10.05.2025",
                "unitPrice" => strval($amount),
                "quantity" => "1"
            ]
        ]
    ];

    $ch = curl_init("$payu_url/api/v2_1/orders");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $access_token",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($order));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php getAccessToken($client_id, $client_secret, $payu_url)", FILE_APPEND);

try {
    // Logika
    $access_token = getAccessToken($client_id, $client_secret, $payu_url);
} catch (Exception $e) {
    file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php exception access_token=$e", FILE_APPEND);
}

if (!$access_token) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Brak tokena dostępowego"]);
    exit;
}
file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php access_token=$access_token", FILE_APPEND);

$order_response = createOrder($access_token, $payu_url, $pos_id, $amount, $email, $name, $surname);

file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php order_response=" . json_encode($order_response, JSON_PRETTY_PRINT), FILE_APPEND);


if (!empty($order_response['redirectUri'])) {
    file_put_contents(__DIR__ . "/debug_post.log", "\nJSON output: " . json_encode([
        "status" => "success",
        "redirect" => $order_response['redirectUri']
    ]) . "\n", FILE_APPEND);

    echo json_encode([
        "status" => "success",
        "redirect" => $order_response['redirectUri']
    ]);
    exit;
} else {
    file_put_contents(__DIR__ . "/debug_post.log", "\ncreate_order.php 6666", FILE_APPEND);

    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Błąd tworzenia zamówienia",
        "details" => $order_response
    ]);
    exit;
}
