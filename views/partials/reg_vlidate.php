<?php

if (empty($_POST['fname'])){
    die("First Name is required");
}

if (empty($_POST['lname'])){
    die("Last Name is required");
}

if (empty($_POST['fatherName'])){
    die("Father's Name is required");
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die("Email is required");
}

if (strlen($_POST['password']) < 8){
    die("The password must contain 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST['password'])){
    die("It must contain at least one letter");
}

if (!preg_match("/[0-9]/",$_POST['password'])){
    die("It must contain at least one number");
}

if (empty($_POST['phoneno'])){
    die("Phone Number is required");
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/database.php";
$sql = "INSERT INTO registre(FirstName, LastName, FatherName, Email, Password, PhoneNumber) VALUES(?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)){
    die("SQL ERROR: " . $mysqli->error);
}
$stmt->bind_param("ssssss", $_POST['fname'], $_POST['lname'], $_POST['fatherName'], $_POST['email'], $password_hash, $_POST['phoneno']);
if ($stmt->execute($sql)){
    header("Location: login.php");
    exit;
}
else{
    if ($mysqli->errno === 1062){
        die("Emial already taken");
    }
    else{
        die($mysqli->error . " " . $mysqli->errno);
    }
}

