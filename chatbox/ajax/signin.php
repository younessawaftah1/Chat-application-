
 <?php
if(isset($_GET['name'])){
    include('../connection.php');
    $name = $_GET['name'];
   
    $user1=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['user'])));
    $user2=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['user1'])));
    $pass1=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^0-9a-zA-Z]#i','',$_GET['pass'])));
    $pass2=mysqli_real_escape_string($con,strip_tags(preg_replace('#[^0-9a-zA-Z]#i','',$_GET['pass1'])));
    if($name=="" || $user1=="" || $user2=="" || $pass1=="" || $pass2==""){
        echo "<script>alert('Please fill all the feilds...');</script>";
    }
    
    else if($user1 != $user2){
        echo "<script>alert('Username does not match...');</script>";	
    }
    else if($pass1 != $pass2){
        echo "<script>alert('Password does not match...');</script>";	
    }
    else if(mysqli_num_rows(mysqli_query($con,"select * from user where user='$user1'"))==1){
            echo "<script>alert('Username already exists...');</script>";	
    }
    else{
        $encrypt = md5($pass2);
        $query="insert into user (name,user,pass,rpass) values('$name','$user2','$encrypt','$pass2')";
        $run=mysqli_query($con,$query);	
            echo "<script>alert('You have signed successfully...');</script>";	
            echo "<script>window.open('login.php','_self');</script>";	
    }
}	
?>
			
			
