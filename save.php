<?php
header('Content-Type: application/json'); // Ustawienie poprawnego nagłówka JSON

$dataFolder = 'form_response_data';
$dataFile = $dataFolder . '/zgloszenia.json';

// Upewnij się, że folder istnieje
if (!file_exists($dataFolder)) {
    mkdir($dataFolder, 0777, true);
}
// Generowanie unikalnego identyfikatora sesji
$sessionId = bin2hex(random_bytes(16));
// Odbiór danych z formularza
$newEntry = [
    'formula' => $_POST['formula'] ?? '',
    'category' => $_POST['category'] ?? '',
    'weight' => $_POST['weight'] ?? '',
    'name' => $_POST['name'] ?? '',
    'age' => $_POST['age'] ?? '',
    'sessionId' => $sessionId
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
