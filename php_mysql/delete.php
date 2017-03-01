<?php

  include("config.php");
  include('session.php');
  $id=$_REQUEST['id'];
  $sql ="DELETE from  admin_account  where id=$id";
  $result = mysqli_query($db,$sql);
  if($result)
  {
  header("location:userview.php");
  }
  


?>