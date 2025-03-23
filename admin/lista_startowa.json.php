<?php
header('Content-Type: application/json');
// header('Content-Type: text/html; charset=UTF-8');

$dataFile = '../form_response_data/zgloszenia.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!file_exists($dataFile) || filesize($dataFile) == 0) {
        echo json_encode(["success" => false, "message" => "Brak zgłoszeń"]);
        exit;
    }

    $data = json_decode(file_get_contents($dataFile), true);
    if (!$data) {
        echo json_encode(["success" => false, "message" => "Błąd odczytu danych"]);
        exit;
    }

    $formulaFilters = $_POST['formula'] ?? [];
    $categoryFilter = $_POST['category'] ?? '';
    $ageMin = $_POST['ageMin'] ?? '';
    $ageMax = $_POST['ageMax'] ?? '';
    $weightMin = $_POST['weightMin'] ?? '';
    $weightMax = $_POST['weightMax'] ?? '';

    if (!is_array($formulaFilters)) {
        $formulaFilters = [$formulaFilters];
    }

    function filterData($entry) {
        global $formulaFilters, $categoryFilter, $ageMin, $ageMax, $weightMin, $weightMax;

        if (!empty($formulaFilters) && !in_array($entry['formula'], $formulaFilters)) {
            return false;
        }
        if ($categoryFilter && $entry['category'] !== $categoryFilter) {
            return false;
        }
        if ($ageMin || $ageMax) {
            $age = (int) $entry['age'];
            if ($ageMin && $age < (int) $ageMin) {
                return false;
            }
            if ($ageMax && $age > (int) $ageMax) {
                return false;
            }
        }
        if ($weightMin || $weightMax) {
            $weight = (float) str_replace(',', '.', preg_replace('/[^0-9,]/', '', $entry['weight']));
            if ($weightMin && $weight < (float) $weightMin) {
                return false;
            }
            if ($weightMax && $weight > (float) $weightMax) {
                return false;
            }
        }
        return true;
    }

    $filteredData = array_values(array_filter($data, 'filterData'));

    echo json_encode(["success" => true, "data" => $filteredData]);
    exit;
}

echo json_encode(["success" => false, "message" => "Niepoprawne żądanie"]);
exit;




// header('Content-Type: application/json');

// $dataFile = '../form_response_data/zgloszenia.json';

// // Sprawdzenie, czy plik istnieje i zawiera dane
// if (!file_exists($dataFile) || filesize($dataFile) == 0) {
//     echo "<h2>Brak zgłoszeń</h2>";
//     exit;
// }

// // Odczyt danych z pliku
// $data = json_decode(file_get_contents($dataFile), true);

// if (!$data) {
//     echo "<h2>Błąd odczytu danych zgłoszeń</h2>";
//     exit;
// }

// echo json_decode(file_get_contents($dataFile), true);

