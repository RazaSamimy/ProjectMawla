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
 

session_start();
$_SESSION['time_of_incident']= $_POST[time_of_incident];
$_SESSION['date_of_incident']= $_POST[date_of_incident];
$_SESSION['weather']= $_POST[weather];
$_SESSION['medium']= $_POST[medium];
$_SESSION['address']= $_POST[address];
$_SESSION['landmark']= $_POST[landmark];
$_SESSION['describtion_of_area']= $_POST[describtion_of_area];
$_SESSION['suspect']= $_POST[suspect];
$_SESSION['sus_race']= $_POST[sus_race];
$_SESSION['sus_gender']= $_POST[sus_gender];
$_SESSION['relation_to']= $_POST[relation_to];
$_SESSION['sus_language']= $_POST[sus_language];
$_SESSION['sus_number']= $_POST[sus_number];
$_SESSION['before_incident']= $_POST[before_incident];
$_SESSION['during_incident']= $_POST[during_incident];
$_SESSION['end_incident']= $_POST[end_incident];
$_SESSION['sus_approach']= $_POST[sus_approach];
$_SESSION['sus_approach_num']= $_POST[sus_approach_num];
$_SESSION['sus_degrade']= $_POST[sus_degrade];
$_SESSION['first_name']= $_POST[first_name];
$_SESSION['middle_name']= $_POST[middle_name];
$_SESSION['last_name']= $_POST[last_name];
$_SESSION['race']= $_POST[race];
$_SESSION['gender']= $_POST[gender];
$_SESSION['race_other']= $_POST[race_other];
$_SESSION['age']= $_POST[age];
$_SESSION['ethnicity']= $_POST[ethnicity];
$_SESSION['cultural']= $_POST[cultural];
$_SESSION['able_bodied']= $_POST[able_bodied];
$_SESSION['citzenship']= $_POST[citzenship];
$_SESSION['religion']= $_POST[religion];
$_SESSION['city']= $_POST[city];
$_SESSION['native_language']= $_POST[native_language];
$_SESSION['fear']= $_POST[fear];
$_SESSION['rank_safety']= $_POST[rank_safety];
$_SESSION['rank_wronged']= $_POST[rank_wronged];
$_SESSION['phone_contact']= $_POST[phone_contact];
$_SESSION['phone_contact_number']= $_POST[phone_contact_number];
$_SESSION['electronic_comm']= $_POST[electronic_comm];
$_SESSION['rank_threat']= $_POST[rank_threat];
$_SESSION['followed']= $_POST[followed];
$_SESSION['rank_distress']= $_POST[rank_distress];
$_SESSION['rank_safety_community']= $_POST[rank_safety_community];


if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Mawla</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    </head>
    
<body>  
    <nav role="navigation" id="top">
    <div class="nav-wrapper container" id ="navContainer" style="width=100%">
        <a id="logo-container" href="index.html" class="brand-logo center" > <img src="img/mawlasheildwithwhite.png" class="navLogo" /> </a>
      <ul class="left hide-on-med-and-down" id="navListLeft" >
        <li class="navButton"><a href="#" class=" navLink">About Us</a></li>
        <li class="navButton"><a href="infohub.html" class=" navLink">Info Hub</a></li>
        <li class="navButton"><a href="#" class=" navLink">Contact</a></li>
        </ul>
          <ul class="right hide-on-med-and-down" id="navListRight">
        <li class="navButton"><a href="#" class=" navLink">Resources</a></li>
        <li class="navButton"><a href="#" class=" navLink">News</a></li>
        <li class="navButton"><a href="#" class=" navLink">Disclaimers</a></li>  
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">About Us</a></li>
        <li><a href="infohub.html">Info Hub</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Disclaimers</a></li>  
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <br>
     <br>
     <br>
    
    
    
    <div style="width:90%;content-align:center;margin:auto;" >
    <div class="section">
        <div class="row" style="text-align:center;content-align:center;" >
            
               <h1>Your Form has been submitted!</h1>
            
            <a href="mawlareport.php">Link to your information in pdf form</a>
                </div>
            </div>


        </div>


<img src="img/data%20bars.png" id="bars" style="position: absolute; 
bottom: 0; width:100%; height:30%; pointer-events: none;">


<!--  Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

</body>

</html>