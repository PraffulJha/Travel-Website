<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'e-city');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password1'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;
move_uploaded_file($tempname,$folder);
if(strlen($pass) <=8)
{
    echo "password should more than 8 characters";
}
$s = "select * from usertable where userid = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1){
    echo "username already taken";
}
else{
    $reg = "insert into usertable(userid, email, password,picsourse) values ('$name' , '$email', '$pass','$folder')";
    mysqli_query($con, $reg);
    echo "registration sucessfully";
    header('location: dashboard.php');
}

?>