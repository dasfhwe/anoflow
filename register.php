<?php
// Example: Register a new user
$username = $_GET['username'];
$password = $_GET['password'];

// Dummy registration (replace with real database operation)
if ($username && $password) {
    echo json_encode(['success' => true, 'message' => 'User registered successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid registration']);
}
?>
