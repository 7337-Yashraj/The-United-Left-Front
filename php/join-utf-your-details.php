<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$jfirstname=$_POST['first_name'];
$jlastname=$_POST['last_name'];
$jemail=$_POST['email'];
$jpassword=$_POST['password'];
$jaddress1=$_POST['address_1'];
$jaddress2=$_POST['address_2'];
$jcity=$_POST['city'];
$jstate=$_POST['state'];
$jpincode=$_POST['pincode'];



$query="insert into join_utf_your_details(first_name,last_name,email,password,address_1,address_2,city,state,pincode) values('$jfirstname','$jlastname','$jemail','$jpassword','$jaddress1','$jaddress2', '$jcity', '$jstate', '$jpincode')";
$result=mysqli_query($link, $query);




header('Location:../templates/join-utf-payment-details.html');

mysqli_close($link);


?>