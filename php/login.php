<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$lemail=$_POST['email'];
$lpassword=$_POST['password'];
$lsignup=$_POST['signup'];



$query="insert into members_login(email,password,signup) values('$lemail','$lpassword','$lsignup')";
$result=mysqli_query($link, $query);

// echo"Hello";

// // print "<h2>" . $commonctafirstname . "</h2>";
// // print "<h2>" . $commonctaemail . "</h2>";
// // print "<h2>" . $commonctapassword . "</h2>";


header('Location:../templates/index2.html');

mysqli_close($link);


?>