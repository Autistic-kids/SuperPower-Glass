<?php

header("Content-Type:application/json");

require_once "vendor/autoload.php";   // From https://firebase-php.readthedocs.io/en/stable/ in Vendor File and connect with autoload

include("App\models\Firebase.php");

include("App\models\AccountAuth.php");


if (isset($_POST["ID"])) {
    $db = new Database(); //check fire store
    $data = $db->getdata($_POST["ID"]);
    echo json_encode($data);
} elseif (isset($_POST["email"]) && isset($_POST["pass"])) { //check authntication page
    $auth = new MyService();
    $ID = $auth->logIn($_POST["email"], $_POST["pass"]); //function login page in account auth
    if ($ID == "No Email") {
        $data["Satate"] = "False";
        http_response_code(403);
    } else {
        $db = new Database();
        $data = $db->getdata($ID);
        $data["ID"] = $ID;
        setcookie("user_id", $ID, time() + (86400), "/"); // 86400 secound = 1 day
        header('Location: '.'../index.php');
    }
    echo json_encode($data);
    
} else {
    print("noooo");
}