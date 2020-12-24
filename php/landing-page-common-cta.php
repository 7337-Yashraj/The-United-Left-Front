<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$commonctafirstname=$_POST['first_name'];
$commonctaemail=$_POST['email'];
$commonctapassword=$_POST['pincode'];



$query="insert into common_cta_f(first_name,email,pincode) values('$commonctafirstname','$commonctaemail','$commonctapassword')";
$result=mysqli_query($link, $query);




header('Location:../templates/index2.html');

mysqli_close($link);


?>