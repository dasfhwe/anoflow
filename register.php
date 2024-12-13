<?php
header('Content-Type: application/json');

// Пример: файл для сохранения пользователей
$file = 'users.json';

// Чтение данных
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$username = $_GET['username'] ?? null;
$password = $_GET['password'] ?? null;

if ($username && $password) {
    if (isset($users[$username])) {
        echo json_encode([
            "success" => false,
            "message" => "Username already exists"
        ]);
    } else {
        $users[$username] = $password;
        file_put_contents($file, json_encode($users));
        echo json_encode([
            "success" => true,
            "message" => "Registration successful"
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Missing parameters"
    ]);
}
?>
