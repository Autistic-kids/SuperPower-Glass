<?php

use Kreait\Firebase\Contract\Auth;  //FROM SDK PLATFORM
use Kreait\Firebase\Factory;        //FROM SDK PLATFORM

class MyService
{
    private Auth $auth;
    private $storage;
    private $factory;
    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount("Keys\{{API - KAY}}");
        $this->auth = $factory->createAuth();
        $this->storage = $factory->createStorage();
        // $this->storage = new StorageClient([
        //     "keyFilePath" => "Keys\{{API - KAY}}",
        //     'projectId' => "kids-87f4a"
        // ]);
    }
    public function logIn($email, $password): string
    {
        try {
            $result = $this->auth->signInWithEmailAndPassword($email, $password)->firebaseUserId();
            return $result;
        } catch (Exception $e) {
            return "No Email";
        }

    }
    public function signup($email, $password, $name)
    {
        $userProperties = [
            'email' => $email,
            'emailVerified' => false,
            'password' => $password,
            'displayName' => $name,
            'disabled' => false,
        ];
        try {
            $result = $this->auth->createUser($userProperties);
            return $result->uid;
        } catch (Exception $e) {
            return "Already registerd";
        }

    }
    public function changePassword($ID, $newPassword)
    {
        try {
            $this->auth->changeUserPassword($ID, $newPassword);
        } catch (Exception $e) {

        }

    }
    public function changeEmail($ID, $newEmail)
    {
        try {
            $this->auth->changeUserEmail($ID, $newEmail);
        } catch (Exception $e) {

        }

    }
    public function uploadImage($image,$ID): bool
    {
        try {
            $photo_name = $ID. ".jpg";
            // $fileName = 'uploads/'.$photo_name;
            $bucket = $this->storage->getBucket("kids-87f4a.appspot.com");
            rename($image['tmp_name'], "C:\\xampp\\tmp\\" . $photo_name);
            $object = $bucket->upload(fopen("C:\\xampp\\tmp\\" . $photo_name, 'r'));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function downloadImage($ID): bool
    {
        try {
            $photo_name = $ID. ".jpg";
            $bucket = $this->storage->getBucket("kids-87f4a.appspot.com");
            $objects = $bucket->object(
                $photo_name,
            );
            file_put_contents("profile.jpg", $objects->downloadAsStream()->getContents());
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}