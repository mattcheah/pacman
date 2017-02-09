<?php

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare('SELECT `password` FROM users WHERE username = ?');
$stmt->execute([$username]);
$dbPassword = $stmt->fetch();

if ($password == $dbPassword) {
    
    header('200 OK');
    exit("Logging In");
    
} else {
    header('403 Forbidden');
    exit("Your password does not match!");
}