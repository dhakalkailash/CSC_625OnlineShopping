<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root','', 'online_shopping','3307');


$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$s = "select * from users where UserName = '$user'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
   
    echo '<script> alert ("User Name is Already Selected, Try Another !!")</script>';

}else{
    $reg = "insert into users(firstName,lastName,userName,phone,password) values('$first', '$last', '$user', '$phone', '$pass')";
    mysqli_query($con,$reg);
    echo"Regestration is Successful";
}
?>