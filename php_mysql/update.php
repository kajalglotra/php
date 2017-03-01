<?php
  include("config.php");
  include('session.php');
$name=$_POST['username'];
$password=$_POST['password'];
$id=$_POST['id'];
echo $id;

$result = "update admin_account set username='$name' ,password='$password'  where id=$id";
echo $result;
die();

if($result)
{
		header("location:userview.php");
}
//$row=mysql_fetch_array($result);
//print_r($row);
?>