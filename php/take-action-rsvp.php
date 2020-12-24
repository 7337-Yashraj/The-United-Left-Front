<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$tafirstname=$_POST['first_name'];
$taemail=$_POST['email'];
$tapincode=$_POST['pincode'];
$tacontact=$_POST['contact'];



$query="insert into take_action_rsvp(first_name,email,pincode,contact) values('$tafirstname','$taemail','$tapincode','$tacontact')";
$result=mysqli_query($link, $query);


header('Location:../templates/index2.html');

mysqli_close($link);


?>