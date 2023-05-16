<?php

header("Content-Type:application/json");

require_once "vendor/autoload.php"; // From https://firebase-php.readthedocs.io/en/stable/ in Vendor File and connect with autoload

include("App\models\Firebase.php");

include("App\models\AccountAuth.php");

if (isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["r_pass"]) && isset($_POST["name"])) {
        if ($_POST["pass"] === $_POST["r_pass"]) {
        $auth = new MyService();
        $ID = $auth->signup($_POST["email"], $_POST["pass"], $_POST["name"]);
        $data = array();
        if ($ID != "Already registerd") {
            $db = new Database();
            $db->setData($ID, $_POST["name"], $_POST["email"], $_POST["pass"]);
            $data["state"] = "true";
            header('Location: '.'../reg.php');
        } else {
            http_response_code(400);
            $data["state"] = "false";
            echo '<script>alert("Password Or Email Is wrong !")</script>';
        }
    echo json_encode($data);
}
}
