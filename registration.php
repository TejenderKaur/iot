<?php
session_start();
//header('location:login.php');
$con=mysqli_connect('localhost','root','mppa1234');
mysqli_select_db($con, 'userregistration');


$email=$_POST['email'];
$address=$_POST['address'];
$area=$_POST['area'];
$phonenumber=$_POST['phonenumber'];
$aadhaar=$_POST['aadhaar'];

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable1 where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"username already taken";
}else
{
    $reg="insert into usertable1(email,address,area,phonenumber,aadhaar,name,password)values('$email','$address','$area','$phonenumber','$aadhaar','$name','$pass')";
        mysqli_query($con, $reg);
    echo"Registration Successful";
}



?>