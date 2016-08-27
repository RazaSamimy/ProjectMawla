<?php
$servername = "127.5.112.2:3306";
$username = "adminfZyjfUE";
$password = "wmSQkdrkQc26";
$dbname = "myapp";

/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 

$sql="INSERT INTO mawlaReport (time_of_incident,
date_of_incident,
weather,
medium,
address,
landmark,
describtion_of_area,
suspect,
sus_race,
sus_gender,
relation_to,
sus_language,
sus_number,
before_incident,
during_incident,
end_incident,
sus_approach,
sus_approach_num,
sus_degrade,
first_name,
middle_name,
last_name,
race,
gender,
race_other,
age,
ethnicity,
cultural,
able_bodied,
citzenship,
religion,
city,
native_language,
fear,
rank_safety,
rank_wronged,
phone_contact,
phone_contact_number,
electronic_comm,
rank_threat,
followed,
rank_distress,
rank_safety_community
)

VALUES ('$_POST[time_of_incident]',
'$_POST[date_of_incident]',
'$_POST[weather]',
'$_POST[medium]',
'$_POST[address]',
'$_POST[landmark]',
'$_POST[describtion_of_area]',
'$_POST[suspect]',
'$_POST[sus_race]',
'$_POST[sus_gender]',
'$_POST[relation_to]',
'$_POST[sus_language]',
'$_POST[sus_number]',
'$_POST[before_incident]',
'$_POST[during_incident]',
'$_POST[end_incident]',
'$_POST[sus_approach]',
'$_POST[sus_approach_num]',
'$_POST[sus_degrade]',
'$_POST[first_name]',
'$_POST[middle_name]',
'$_POST[last_name]',
'$_POST[race]',
'$_POST[gender]',
'$_POST[race_other]',
'$_POST[age]',
'$_POST[ethnicity]',
'$_POST[cultural]',
'$_POST[able_bodied]',
'$_POST[citzenship]',
'$_POST[religion]',
'$_POST[city]',
'$_POST[native_language]',
'$_POST[fear]',
'$_POST[rank_safety]',
'$_POST[rank_wronged]',
'$_POST[phone_contact]',
'$_POST[phone_contact_number]',
'$_POST[electronic_comm]',
'$_POST[rank_threat]',
'$_POST[followed]',
'$_POST[rank_distress]',
'$_POST[rank_safety_community]'
)";
 
$fname = $_POST[first_name];

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

/***********FPDF***********/
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$fname);
$pdf->Output();


?>