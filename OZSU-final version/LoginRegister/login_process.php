<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/ozsu/LoginRegister/DatabaseConnector.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $getUsers = new Users();
    $getUsers->email = $email;
    $getUsers->password = $password;

    $tmpUsers = $getUsers->GetUsers();
    $dataUser = $tmpUsers[0];

    if (count($tmpUsers) > 0) {
        $_SESSION["CalisanId"] = $dataUser["EmployeeId"];
        $_SESSION["user_name"] = $dataUser["name"];
        $_SESSION["user_email"] = $dataUser["email"];
        $_SESSION["company_position"] = $dataUser["company_position"];
        header("Location: /ozsu/LoginRegister/login.php");
        exit();
    } else {
        echo "Geçersiz e-posta veya şifre.";
    }
}