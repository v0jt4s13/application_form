<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    exit('Nieautoryzowany dostęp');
}

require("../global.php");

header('Content-Type: application/json'); // Ustawienie poprawnego nagłówka JSON

// $dataFolder = 'form_response_data'; przeniesione do global.php
$dataFile = $dataFolder . "/zgloszenia.json";

// Upewnij się, że folder istnieje
if (!file_exists($dataFolder)) {
    mkdir($dataFolder, 0777, true);
}
// Generowanie unikalnego identyfikatora sesji
$sessionId = bin2hex(random_bytes(16));
$date = date('Y-m-d H:i:s');
$ip = isset($_SERVER['HTTP_CLIENT_IP']) 
    ? $_SERVER['HTTP_CLIENT_IP'] 
    : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
      ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
      : $_SERVER['REMOTE_ADDR']);

// Odbiór danych z formularza
$newEntry = [
    'formula' => $_POST['formula'] ?? '',
    'category' => $_POST['category'] ?? '',
    'weight' => $_POST['weight'] ?? '',
    'name' => $_POST['name'] ?? '',
    'surname' => $_POST['surname'] ?? '',
    'age' => $_POST['age'] ?? '',
    'club' => $_POST['club'] ?? '',
    'email' => $_POST['email'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'sessionId' => $sessionId,
    'sysdate' => $date,
    'user_ip' => $ip
];

// Odczyt istniejących danych
$existingData = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// Dodanie nowego zgłoszenia
$existingData[] = $newEntry;

// Zapis danych do pliku JSON
if (file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT))) {
    // Zwrócenie odpowiedzi JSON
    echo json_encode([
        "success" => true,
        "sessionId" => $sessionId
    ]);
} else {
    echo json_encode([
        "success" => false,
        "error" => "Błąd zapisu danych!"
    ]);
}
?>
