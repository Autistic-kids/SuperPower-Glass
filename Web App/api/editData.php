
<?php

header("Content-Type:application/json");

require_once "vendor/autoload.php"; // From https://firebase-php.readthedocs.io/en/stable/ in Vendor File and connect with autoload

require("App\models\Firebase.php");

require("App\models\AccountAuth.php");

if (isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["ID"])) {
    $db = new Database();
    $res = $db->changeData($_POST["ID"], $_POST["name"], $_POST["email"], $_POST["pass"], $_POST["phone"]);
    $data = array();
    if ($res) {
        $data["state"] = "true";
        http_response_code(200);
    } else {
        http_response_code(400);
        $data["state"] = "false";
    }
    echo json_encode($data);
} else {
    $db = new Database();
    $res = $db->setVideo($_COOKIE['user_id'], $_COOKIE['VID']);
    $data = array();
    if ($res) {
        $data["state"] = "true";
        http_response_code(200);
        $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }
        header('Location: '.$previous);
        
    } else {
        http_response_code(400);
        $data["state"] = "false";
    }
    echo json_encode($data);
}
?>
