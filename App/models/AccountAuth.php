<?php

use Kreait\Firebase\Contract\Auth;
use Kreait\Firebase\Factory;

class MyService
{
    private Auth $auth;
    private $factory;
    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount("Keys\kids-87f4a-12403373cddc.json");
        $this->auth = $factory->createAuth();
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
    public function signup($email, $password,$name)
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
            $this->auth->changeUserPassword($ID,$newPassword);
        } catch (Exception $e) {

        }

    }
}