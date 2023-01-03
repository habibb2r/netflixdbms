<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'netflix');

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$phn =$_POST['phn'];


$query = "DELETE FROM subscriber WHERE subscriber.phone = ".$_POST['phn'];


mysqli_query($con,$query);
header('location:index.html');

?>