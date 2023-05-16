<?php
 
use Google\Cloud\Firestore\FirestoreClient;     //FROM SDK PLATFORM
use Google\Cloud\Firestore\DocumentReference;   //FROM SDK PLATFORM
use Google\Cloud\Firestore\CollectionReference; //FROM SDK PLATFORM
class Database
{
    private FirestoreClient $firestore;

    public function __construct()
    {
        $this->firestore = new FirestoreClient([
            "keyFilePath" => "Keys\{{API-KEY}}",
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
            "VideoID"=> "0",
            'sensordata'=> [
                "Temperature"=> "37", // ARRAY
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
                ['path' => 'full name', 'value' => $name],
                ['path' => 'email', 'value' => $emai],
                ['path' => 'password', 'value' => $pass],
                ['path' => 'phone', 'value' => $phone],
            ]);
            $service = new MyService();
            $service->changeEmail($ID,$emai);   //change email and password in firestore and authentication page
            $service->changePassword($ID,$pass);
            return true;
        }
        catch(Exception $e){
            return false;
        }   
    }
    public function setVideo($ID,$VID) : bool //To update data from web to cloud to hardware By Using ID
    {
        try{
            $this->firestore->collection("users data")->document($ID)->update([
                ['path' => 'VideoID', 'value' => $VID],
            ]);
            return true;
        }
        catch(Exception $e){
            return false;
        }   
    }
}