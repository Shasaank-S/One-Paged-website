<?php

//session_start();
header('location:loginandregister.php');
session_start();
$db = mysqli_connect('localhost', 'root', '', 'loginandregistrationform');
//$db = mysqli_connect('localhost', 'itech58', '', 'itech58');

$name=$_POST['user'];
$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email'";
$result=mysqli_query($db,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register_table(name,email_id,password) values('$name','$email','$password')";
    mysqli_query($db,$reg);
}
?>