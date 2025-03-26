<?php
$sessionId = $_GET['sessionId'] ?? '';

$payments = file_exists("payments.json") ? json_decode(file_get_contents("payments.json"), true) : [];

if (!isset($payments[$sessionId])) {
    echo "<h2>Nie znaleziono płatności</h2>";
    exit;
}

$entry = $payments[$sessionId];
$status = $entry['status'];

echo "<h2>Status płatności: $status</h2>";

if ($status === "COMPLETED") {
    echo "<p>Dziękujemy za płatność!</p>";
} elseif ($status === "CANCELED") {
    echo "<p>Płatność została anulowana.</p>";
} else {
    echo "<p>Płatność jest w toku lub nie została zakończona.</p>";
}
