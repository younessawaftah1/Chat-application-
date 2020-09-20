<?php
    session_start();
    include('../connection.php');
    $id = $_SESSION['id'];
    if(isset($_GET['name'])){
        $user=mysqli_real_escape_string($con,$_GET['name']);
        $run = mysqli_query($con,"update user set name='$user' where id='$id'");
        if($run){
            $_SESSION['name'] = $user; 
            echo "<script>alert('Data Updated')</script>";
            echo "<script>window.open('account.php','_self')</script>";
            
        }
        }
?>