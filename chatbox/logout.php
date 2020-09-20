<?php
include('connection.php');
session_start();
 $user = $_SESSION['user'];
 mysqli_query($con,"update user set status='Offline' where user='$user'");
 //unset($_SESSION['user']); 
//unset($_SESSION['user1']);
session_destroy();
header('location: ../index.php');
