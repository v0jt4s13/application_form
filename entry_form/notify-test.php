<?php

$payments = file_exists("form_response_data/payments.json") ? json_decode(file_get_contents("form_response_data/payments.json"), true) : [];

foreach ($payments as &$entry) {
    if ($entry['orderId'] === "jhgjhg23432jg42j3h4g32jh4") {
        $entry['status'] = "OK";
        $entry['updated_at'] = date("Y-m-d H:i:s");
        break;
    }
}

file_put_contents("form_response_data/payments.json", json_encode($payments, JSON_PRETTY_PRINT));

http_response_code(200);
echo "OK";
