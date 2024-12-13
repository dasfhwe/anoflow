<?php
header('Content-Type: application/json');

// Пример базы данных пользователей
$users = [
    "user1" => "password1",
    "user2" => "password2"
];

$username = $_GET['username'] ?? null;
$password = $_GET['password'] ?? null;

if ($username && $password) {
    if (isset($users[$username]) && $users[$username] === $password) {
        echo json_encode([
            "success" => true,
            "message" => "Login successful",
            "remaining_time" => "99 days"
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Invalid username or password"
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Missing parameters"
    ]);
}
?>
