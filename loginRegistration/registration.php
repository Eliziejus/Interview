<?php
session_start();


$con = mysqli_connect('localhost', 'root', '', );

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$pass = $_POST['password'];


$table = " select * from usertable where email = '$email'";
$result = mysqli_query($con, $table);
$num = mysqli_num_rows($result);
$message = "Email is already taken";
if($num==1){

    echo "<h1>$message</h1>";
}else{
    $reg=" insert into usertable(email , password) values ('$email' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration successfull";
    header('location:login.php');
}
?>