<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require('fpdf185/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo.png', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Times', 'B', 20);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 10, 'Medical Report', 0, 0, 'C');
        $this->Cell(30);
        $this->SetFont('Times', '', 11);
        $this->Cell(50, 5, 'kids.disease.app@gmail.com', 0, 1, 'C');
        $this->Cell(150);
        $this->Cell(30, 5, '+201122334455', 0, 1, 'C');
        $this->Cell(150);
        $this->Cell(30, 5, date("Y/m/d h:i"), 0, 1, 'C');
        $this->line(10, 30, 200, 30);
        // Line break
        $this->Ln(20);
    }

}
$data =
    [
        'ID' => $_COOKIE['user_id'],

    ];
$url = 'http://127.0.0.1/kidsfront/api/check.php';
$context = stream_context_create(
    array(
        // use key 'http' even if you send the request to https
        'http' => array(
            //'header' and 'content' is optional
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    )
);
$result = file_get_contents($url, true, $context);
$array = json_decode($result, true);


if (isset($_POST["name"])) {
    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(30, 10, 'Name: ' . $_POST["name"], 0, 1, '');
    $pdf->Cell(30, 10, 'Age: ' . $_POST["age"], 0, 1, '');
    $pdf->Cell(30, 10, 'Parent Phone: +2' . $_POST["phone"], 0, 1, '');
    $pdf->Cell(30, 10, 'Email: ' . $_POST["email"], 0, 1, '');
    $pdf->Cell(30, 10, 'Address: ' . $_POST["address"], 0, 1, '');
    $pdf->Cell(30, 10, 'Disease: ' . $_POST["disease"], 0, 1, '');
    $pdf->Cell(30, 10, 'Date of Disease: ' . $_POST["DateOfDisease"], 0, 1, '');
    $pdf->Cell(30, 10, 'Medicine: ' . $_POST["medicine"], 0, 1, '');
    $pdf->Cell(30, 10, 'Notes: ' . $_POST["notes"], 0, 1, '');
    $pdf->SetFont('Times', 'B', 18);
    $pdf->Cell(70);
    $pdf->Cell(30, 20, "Reading For Glasses", 0, 1, '');

    // Table

    //1'st Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Tempreture', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['Temperature'], 1, 1, 'C');
    

    //2'nd Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Fall Detection', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['FallDetector'], 1, 1, 'C');

    //3'rd Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Heart Rate', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['HeartRate'], 1, 1, 'C');

    //4'th Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Muscle Activity', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['MuscleActivity'], 1, 1, 'C');

    //5'th Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Respiration Rate', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['RespirationRate'], 1, 1, 'C');

    //6'th Cell
    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(50, 10, 'Stress Rate', 1, 0, 'C');
    $pdf->SetFont('Times', '', 16);
    $pdf->Cell(135, 10, $array['sensordata']['StressRate'], 1, 1, 'C');

    //Profile Picture
    //echo $_FILES["photo"]["tmp_name"];
    rename($_FILES["photo"]["tmp_name"], "1.jpg"); //1.jpg is child
    $pdf->Image("1.jpg", 110, 40, 80);
    
    //Secound Picture
    $pdf->AddPage();
    rename($_FILES["photo2"]["tmp_name"], "2.jpg");
    $pdf->Image("2.jpg", 10, 60, 180);
    $pdf->Output('D', $_POST["name"] . ".pdf");
    //$pdf->Output('F', $_POST["name"] . ".pdf");
}
?>