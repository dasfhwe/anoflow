<?php
// Example: Activate subscription based on a code
$username = $_GET['username'];
$code = $_GET['code'];

// Dummy activation (replace with real database or subscription check)
if ($code && $username) {
    echo json_encode(['success' => true, 'duration' => 30]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid subscription key']);
}
?>
