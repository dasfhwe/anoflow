<?php
header('Content-Type: application/json');

// Пример базы данных кодов
$codes = [
    "ABC123" => 30,
    "DEF456" => 60,
    "GHI789" => 90
];

$code = $_GET['code'] ?? null;
$username = $_GET['username'] ?? null;

if ($code && $username) {
    if (isset($codes[$code])) {
        $duration = $codes[$code];
        echo json_encode([
            "success" => true,
            "message" => "Code redeemed successfully",
            "duration" => "$duration days"
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Invalid code"
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Missing parameters"
    ]);
}
?>
