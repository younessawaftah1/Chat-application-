<?php
    session_start();
    include('../connection.php');
    if(isset($_GET['user'])){
        $user=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['user'])));
        $pass=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['pass']))); 
        $encrypt = md5($pass);
        $query="select * from user where user='$user' && pass='$encrypt'";
        $check = mysqli_num_rows(mysqli_query($con,$query));
        if($check=='1'){
            $user1 = mysqli_fetch_array(mysqli_query($con,$query));
            $_SESSION['id'] = $user1['id'];
            $_SESSION['name'] = $user1['name'];
            $_SESSION['user'] = $user1['user'];
            mysqli_query($con,"update user set status='Availible' where user='$user'");
            echo "<script>window.open('index.php','_self');</script>";	
        }else{
            echo "<script>alert('User Does not Exsits....')</script>";
        }
    }
?>