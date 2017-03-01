<?php
  <?php
  include("config.php");
  include('session.php');
$id=$_POST['id'];
echo $id;
die();

$userid=$_POST['userid'];
//print_r($userid);die;
foreach($userid as $multiplechek)
{//echo $id;die;
 mysql_query("delete from hemant  where id=$multiplechek");
}


		header("location:userview.php");


?>