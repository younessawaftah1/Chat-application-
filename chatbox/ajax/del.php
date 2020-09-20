<?php
    session_start();
    include('../connection.php');
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($con,"delete from msg where id='$id'");
    }
?>