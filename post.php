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
$age =$_POST['age'];
$phn =$_POST['phn'];
$country = $_POST['country'];
$plan = $_POST['plan'];
$credit = $_POST['credit'];

$query = " insert into subscriber (email,pass,first_name, last_name, age, phone,country,plan,card_no)
values ('$email','$pwd','$fname', '$lname', '$age', '$phn','$country','$plan','$credit')";

mysqli_query($con,$query);
header('location:signin.html');

?>