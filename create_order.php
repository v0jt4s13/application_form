<?php
header("Content-Type: application/json");

$posId = 'Twój_POS_ID';
$oauthClientId = 'Twój_Client_ID';
$oauthClientSecret = 'Twój_Client_Secret';
$notifyUrl = 'https://twoja_domena.pl/notify.php';
$continueUrl = 'https://twoja_domena.pl/sukces.php';

// Pobranie danych JSON z żądania
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!isset($data["name"], $data["amount"], $data["email"])) {
    echo json_encode(["success" => false, "error" => "Brak wymaganych danych"]);
    exit;
}

// Funkcja do uzyskania tokenu dostępu
function getAccessToken($clientId, $clientSecret) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://secure.payu.com/pl/standard/user/oauth/authorize');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
    curl_setopt($ch, CURLOPT_USERPWD, $clientId . ':' . $clientSecret);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    $result = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($result, true);
    return $response['access_token'] ?? null;
}

// Uzyskanie tokenu
$accessToken = getAccessToken($oauthClientId, $oauthClientSecret);

if (!$accessToken) {
    echo json_encode(["success" => false, "error" => "Błąd autoryzacji PayU"]);
    exit;
}

// Przygotowanie zamówienia
$order = [
    'notifyUrl' => $notifyUrl,
    'continueUrl' => $continueUrl,
    'customerIp' => $_SERVER['REMOTE_ADDR'],
    'merchantPosId' => $posId,
    'description' => 'Opłata za zgłoszenie zawodnika',
    'currencyCode' => 'PLN',
    'totalAmount' => $data["amount"],
    'products' => [
        [
            'name' => 'Zgłoszenie zawodnika',
            'unitPrice' => $data["amount"],
            'quantity' => 1,
        ]
    ],
    'buyer' => [
        'email' => $data["email"],
        'firstName' => explode(" ", $data["name"])[0],
        'lastName' => explode(" ", $data["name"], 2)[1] ?? ''
    ]
];

// Wysłanie zamówienia do PayU
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.payu.com/api/v2_1/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($order));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
]);
$result = curl_exec($ch);
curl_close($ch);
$response = json_decode($result, true);

if (isset($response['status']['statusCode']) && $response['status']['statusCode'] === 'SUCCESS') {
    echo json_encode(["success" => true, "sessionId" => $response['orderId']]);
} else {
    echo json_encode(["success" => false, "error" => $response['status']['statusDesc'] ?? "Nieznany błąd"]);
}
?>
