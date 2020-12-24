<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$dfirstname=$_POST['first_name'];
$dlastname=$_POST['last_name'];
$demail=$_POST['email'];
$dpassword=$_POST['contact'];
$daddress1=$_POST['address_1'];
$daddress2=$_POST['address_2'];
$dcity=$_POST['city'];
$dstate=$_POST['state'];
$dpincode=$_POST['pincode'];



$query="insert into donate_your_details(first_name,last_name,email,contact,address_1,address_2,city,state,pincode) values('$dfirstname','$dlastname','$demail','$dcontact','$daddress1','$daddress2', '$dcity', '$dstate', '$dpincode')";
$result=mysqli_query($link, $query);




header('Location:../templates/donate-payment-details.html');

mysqli_close($link);


?>