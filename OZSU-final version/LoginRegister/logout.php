<?php
session_start();


session_unset();
session_destroy();

header("Location: /ozsu/LoginRegister/login.php");
exit();
