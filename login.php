<?php
// Example: Validate user login
$username = $_GET['username'];
$password = $_GET['password'];

// Dummy check (replace with real database check)
if ($username == "testuser" && $password == "password") {
    echo json_encode(['success' => true, 'remaining_time' => 99]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
}
?>
