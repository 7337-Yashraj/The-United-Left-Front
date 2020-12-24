<?php
$link=mysqli_connect("localhost","root", "", "the-united-left-front");

if(!$link)
{
    die('Failed to connect to server;'.mysqli_connect_error());
}

$lav=$_POST['lavda'];
$las=$_POST['lasun'];


$query="insert into dummy(lavda,lasun) values('$lav','$las')";
$result=mysqli_query($link, $query);

echo"Hello";

mysqli_close($link);


?>