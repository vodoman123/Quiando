<?php

//STEP 1 Connect To Database

$connect = mysql_connect("gymteractcom.ipagemysql.com","gymteractcom","Gymmember@123");
if (!$connect)
{
die("MySQL could not connect!");
}

$DB = mysql_select_db('test');

if(!$DB)
{
die("My SQL could not select Database!");
}

//STEP 2 Declare Variables

$Name = $_POST['name'];
$Email = $_POST['email'];
$Email1 = "@";
$Email_Check = strpos($Email,$Email1);
$Password = $_POST['password'];
$Re_Password = $_POST['re-password'];

//STEP 3 Check To See If All Information Is Correct

if($Name == "")
{
die("Opps! You don't enter a Name!");
}

if($Password == "" || $Re_Password == "")
{
die("Opps! You didn't enter one of your passwords!");
}

if($Password != $Re_Password)
{
die("Ouch! Your passwords don't match! Try again.");
}

if($Email_Check === false)
{
die("Opps! That's not an email!");
}

//check if user already exists

$query = mysql_query("SELECT * FROM users WHERE email='$Email'");

if(mysql_num_rows($query) != 0)
{
header ("Location: register1.html");
}
else
{
//STEP 4 Insert Information Into MySQL Database

if(!mysql_query("INSERT INTO users (email, name, password)
VALUES ('$Email', '$Name', '$Password')"))
{
die("We could not register you due to a mysql error (Contact the website owner if this continues to happen.)");
}


// If The User Makes It Here Then That Means He Logged In Successfully

else{
header ("Location: main.html");
exit();
}
}

?>

