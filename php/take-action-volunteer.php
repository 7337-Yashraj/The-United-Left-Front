<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$vfirstname=$_POST['first_name'];
$vlastname=$_POST['last_name'];
$vemail=$_POST['email'];
$contact=$_POST['contact'];
$vaddress1=$_POST['address_1'];
$vaddress2=$_POST['address_2'];
$vcity=$_POST['city'];
$vstate=$_POST['state'];
$vpincode=$_POST['pincode'];



$query="insert into take_action_volunteer(first_name,last_name,email,contact,address_1,address_2,city,state,pincode) values('$vfirstname','$vlastname','$vemail','$vcontact','$vaddress1','$vaddress2', '$vcity', '$vstate', '$vpincode')";
$result=mysqli_query($link, $query);




header('Location:../templates/index2.html');

mysqli_close($link);


?>