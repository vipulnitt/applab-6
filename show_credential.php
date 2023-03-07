<?php
// Show details based on provided credentials
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = fopen('abc.txt', 'r');
    $stored_username = trim(fgets($file));
    $stored_password = trim(fgets($file));
    fclose($file);
    if ($username === $stored_username && $password === $stored_password) {
        echo 'Details: <insert details here>';
    } else {
        echo 'Invalid credentials';
    }
}

?>

