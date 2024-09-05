<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/LoginRegister/DatabaseConnector.php");
$person1 = new Users();
echo $person1->AddUser();
echo $person1->GetUsers();
?>
