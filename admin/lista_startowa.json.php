<?php
// file_put_contents("debug_post.log", print_r($_POST, true));

header('Content-Type: application/json');
// header('Content-Type: text/html; charset=UTF-8');

$dataFile = '../entry_form/form_response_data/zgloszenia.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!file_exists($dataFile) || filesize($dataFile) == 0) {
        echo json_encode(["success" => false, "message" => "Brak zgłoszeń"]);
        exit;
    }

    $data = json_decode(file_get_contents($dataFile), true);
    // file_put_contents("debug_data.log", print_r($data, true));
    if (!$data) {
        http_response_code(200); // lub 500 jeśli to błąd
        echo json_encode(["success" => false, "message" => "Brak zgłoszeń"]);
        exit;
    }

    $formulaFilters = $_POST['formula'] ?? [];
    $categoryFilter = $_POST['category'] ?? '';
    $ageMin = $_POST['ageMin'] ?? '';
    $ageMax = $_POST['ageMax'] ?? '';
    $weightMin = $_POST['weightMin'] ?? '';
    $weightMax = $_POST['weightMax'] ?? '';

    // echo json_encode(["success" => true, "message" => "ageMin=$ageMin; ageMax=$ageMax; weightMin=$weightMin; weightMax=$weightMax"]);
    // exit;

    if (!is_array($formulaFilters)) {
        $formulaFilters = [$formulaFilters];
    }
    // 🔐 Usuń puste wartości
    $formulaFilters = array_filter($formulaFilters);
    
    function filterData($entry) {
        global $formulaFilters, $categoryFilter, $ageMin, $ageMax, $weightMin, $weightMax;
    
        // ✅ FORMUŁA
        if (!empty($formulaFilters) && !in_array($entry['formula'], $formulaFilters)) {
            return false;
        }
    
        // ✅ KATEGORIA
        if ($categoryFilter && $entry['category'] !== $categoryFilter) {
            return false;
        }
    
        // ✅ WIEK
        if ($ageMin || $ageMax) {
            $age = (int) $entry['age'];
            if ($ageMin && $age < (int) $ageMin) return false;
            if ($ageMax && $age > (int) $ageMax) return false;
        }
    
        // ✅ WAGA
        if ($weightMin || $weightMax) {
            $weight = (float) str_replace(',', '.', preg_replace('/[^0-9,]/', '', $entry['weight']));
            if ($weightMin && $weight < (float) $weightMin) return false;
            if ($weightMax && $weight > (float) $weightMax) return false;
        }
    
        return true;
    }
    
    $filteredData = array_values(array_filter($data, 'filterData'));

    echo json_encode(["success" => true, "data" => $filteredData]);
    exit;
}
// file_put_contents("debug_filtered.log", print_r($filteredData, true));
// file_put_contents("debug_headers.log", print_r(getallheaders(), true));

echo json_encode(["success" => false, "message" => "Niepoprawne żądanie"]);
exit;
