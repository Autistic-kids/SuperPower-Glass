<?php

header("Content-Type:application/json");

require_once "vendor/autoload.php"; // From https://firebase-php.readthedocs.io/en/stable/ in Vendor File and connect with autoload

include("App\models\Firebase.php");

include("App\models\AccountAuth.php");

if (isset($_FILES["Pimage"]) && isset($_COOKIE['user_id'])) {
    $auth = new MyService();
    $res = $auth->uploadImage($_FILES["Pimage"], $_COOKIE['user_id']);
    $data = array();
    if ($res) {
        $data["state"] = "true";
        http_response_code(200);
        $auth = new MyService();
        $res = $auth->downloadImage($_COOKIE['user_id']);
        $data = array();
        if ($res) {
            $data["state"] = "true";
            http_response_code(200);
            header('Location: '.'../profile.php');
        } else {
            http_response_code(400);
            $data["state"] = "false222";
        }
        echo json_encode($data);
        header('Location: '.'../profile.php');

    } else {
        http_response_code(400);
        $data["state"] = "false";
    }
    echo json_encode($data);
} elseif (isset($_COOKIE['user_id'])) {
    $auth = new MyService();
    $res = $auth->downloadImage($_COOKIE['user_id']);
    $data = array();
    if ($res) {
        $data["state"] = "true";
        http_response_code(200);
        header('Location: '.'../profile.php');
    } else {
        http_response_code(400);
        $data["state"] = "false222";
        header('Location: '.'../profile.php');
    }
    echo json_encode($data);
}else{

}