<?php

include_once('config/dbconn.php');

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $insertSql = "INSERT INTO leads (name, email, message) VALUES ('$name', '$email', '$message')";
    $conn->exec($insertSql);
    header("Location: http://localhost:8000/index.php?success=true");
} catch(\Throwable $e) {
    echo "Problem". $e->getMessage();
}