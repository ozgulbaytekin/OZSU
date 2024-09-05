<?php
require_once($_SERVER['DOCUMENT_ROOT']."/ozsu/LoginRegister/DatabaseConnector.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $company_position = $_POST["company_position"];


    $registerUser = new Users();
    $registerUser->name = $name;
    $registerUser->email = $email;
    $registerUser->password = $password;
    $registerUser->company_position = $company_position;
    $insertId = $registerUser->AddUser();
    if ($insertId > 0) {
        header("Location: /ozsu/LoginRegister/login.php");
        exit();
    }
}