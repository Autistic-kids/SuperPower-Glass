<?php

header("Content-Type:application/json");

require_once "vendor/autoload.php"; // From https://firebase-php.readthedocs.io/en/stable/ in Vendor File and connect with autoload

include("App\models\Firebase.php");

include("App\models\AccountAuth.php");


if (isset($_POST["ID"])) {
    $db = new Database();
    $data = $db->getdata($_POST["ID"]);
    echo json_encode($data);
     
} else {
    print("noooo");
}