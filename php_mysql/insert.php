<?php
  include("config.php");
  include('session.php');
  $name=$_POST['username'];
  $password=$_POST['password'];
  $sql="INSERT INTO admin_account
  (username,password) VALUES ('$name','$password')";
  $result = mysqli_query($db,$sql);
  if($result)
     {
		header("location:userview.php");
     }
?>