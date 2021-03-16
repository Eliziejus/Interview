<?php

session_start();
session_destroy();

header("location:loginRegistration/login.php");



?>