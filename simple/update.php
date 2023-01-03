<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connected";
}else{
    echo "not connected";
}

mysqli_select_db($con, 'netflix');

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phn =$_POST['phn'];
$plan = $_POST['plan'];
$credit = $_POST['credit'];

$query = "UPDATE subscriber SET pass='$pwd',first_name='$fname',`last_name`='$lname',`phone`='$phn',`plan`='$plan',`card_no`='$credit' WHERE email='$email'";

mysqli_query($con,$query);
header('location:index.html');

?>