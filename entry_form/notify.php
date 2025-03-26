<?php
$raw = file_get_contents("php://input");
file_put_contents("notify_raw.log", $raw . "\n", FILE_APPEND);

$data = json_decode($raw, true);
$order = $data['order'] ?? null;

if (!$order || !isset($order['orderId'], $order['status'])) {
    http_response_code(400);
    exit("Invalid payload");
}

$orderId = $order['orderId'];
$status = $order['status'];

$payments = file_exists("payments.json") ? json_decode(file_get_contents("payments.json"), true) : [];

foreach ($payments as &$entry) {
    if ($entry['orderId'] === $orderId) {
        $entry['status'] = $status;
        $entry['updated_at'] = date("Y-m-d H:i:s");
        break;
    }
}

file_put_contents("payments.json", json_encode($payments, JSON_PRETTY_PRINT));

http_response_code(200);
echo "OK";
