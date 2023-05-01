<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'e-city');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password1'];
$s = "select * from usertable where userid = '$name' && password = '$pass '";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1){
    header('location:dashboard.php');
}
else{
    header('location:login.php');
}

?>