<?php

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\CollectionReference;
class Database
{
    private FirestoreClient $firestore;

    public function __construct()
    {
        $this->firestore = new FirestoreClient([
            "keyFilePath" => "Keys\kids-87f4a-12403373cddc.json",
            "projectId" => "kids-87f4a"
        ]);
    }
    public function getdata($ID): array
    {
        return $this->firestore->collection("users data")->document($ID)->snapshot()->data();
    }
    public function setData($ID,$name,$emai,$pass)
    {
        $this->firestore->collection("users data")->document($ID)->create([
            'full name' => $name,
            'phone' => '',
            'email' => $emai,
            'password' =>$pass,
            'sensordata'=> [
                "Temperature"=> "37",
                "MuscleActivity"=> "Good",
                "RespirationRate"=> "Normal",
                "StressRate"=> "Happy",
                "HeartRate"=> "BD TD",
                "FallDetector"=> "Normal",
            ]
            ]);
    }
    
    public function changeData($ID,$name,$emai,$pass,$phone) : bool
    {
        try{
            $this->firestore->collection("users data")->document($ID)->update([
                ['path' => 'full name', 'value' => 'asdasd'],
                ['path' => 'email', 'value' => $emai],
                ['path' => 'password', 'value' => $pass],
                ['path' => 'phone', 'value' => $phone],
            ]);
            $service = new MyService();
            $service->changePassword($ID,$pass);
            return true;
        }
        catch(Exception $e){
            return false;
        }   
    }
}