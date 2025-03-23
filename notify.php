<?php
header("Content-Type: application/json");

$secondKey = 'Twój_Second_Key';
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Weryfikacja sygnatury
$signature = $_SERVER['HTTP_OPENPAYU_SIGNATURE'] ?? '';
$expectedSignature = hash_hmac('sha256', $input, $secondKey);
if ($signature !== 'sender=PayU;signature=' . $expectedSignature . ';algorithm=HMAC') {
    http_response_code(401);
    exit(json_encode(["success" => false, "error" => "Nieprawidłowa sygnatura"]));
}

// Pobranie statusu zamówienia
$orderId = $data['order']['orderId'] ?? '';
$orderStatus = $data['order']['status'] ?? '';

if ($orderId && $orderStatus) {
    // Tutaj aktualizacja bazy danych, np. oznaczenie zamówienia jako opłacone
    http_response_code(200);
    echo json_encode(["success" => true, "message" => "Zamówienie zaktualizowane"]);
} else {
    http_response_code(400);
    echo json_encode(["success" => false, "error" => "Niepoprawne dane"]);
}
?>
