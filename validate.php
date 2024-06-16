<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'loginandregistrationform');
//$db = mysqli_connect('localhost', 'itech58', '', 'itech58');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($db,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:app.php');
}
else
{
    header('location:index.php');
}
?>