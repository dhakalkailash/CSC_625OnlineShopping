<?php

session_start();

$con = mysqli_connect('localhost', 'root','', 'online_shopping','3307');


$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$s = "select * from user where UserName = '$user' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1 && $user == "admin"){   
    $_SESSION['userName'] = $user; 
    
    header('location:admin.php');          
    
    }elseif($num == 1 && $user != "admin"){
        $_SESSION['userName']= $user;
        header('location:../home.php');
    }
    else{
        header('location:index.php');

   
}
?>