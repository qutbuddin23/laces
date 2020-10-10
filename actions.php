<?php

include_once('config/dbconn.php');
include_once('config/helpers.php');

try {

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $email = $message = "";
  
  if(isset($_POST["name"]) && ! is_null($_POST['name'])) {
    $name = sanitize($_POST["name"]);
  }

  if(isset($_POST["email"]) && ! is_null($_POST['email'])) {
    $email = sanitize($_POST["email"]);
  }

  if(isset($_POST["message"]) && ! is_null($_POST['message'])) {
    $email = sanitize($_POST["message"]);
  }

  if($name == "" || $email == "" || $message == "") {
    header("Location: http://localhost:8000/index.php?success=false");
  }
    $insertSql = "INSERT INTO leads (name, email, message) VALUES ('$name', '$email', '$message')";
    $conn->exec($insertSql);
    header("Location: http://localhost:8000/index.php?success=true");
}

} catch(\Throwable $e) {
    echo "Problem". $e->getMessage();
}
        
    