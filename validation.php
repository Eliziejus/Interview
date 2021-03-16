<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', );

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$pass = $_POST['password'];

$table = " select * from usertable where email = '$email' && password = '$pass'";
$result = mysqli_query($con, $table);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['email'] = $email; 
    header("location: surveys/survey.php");
    
} else {
    header("location: loginRegistration/login.php");
    
}
