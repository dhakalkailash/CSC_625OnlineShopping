<?php

session_start();

$con = mysqli_connect('localhost', 'root','', 'online_shopping','3307');


$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$s = "select * from users where UserName = '$user' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
    $_SESSION['userName'] = $name;
   header('location:../index.php');

}else{
    header('location:login.php');
   
}
?>