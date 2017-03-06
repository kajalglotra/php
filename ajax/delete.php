<?php
include('config.php');
$error='';
$id=($_POST['id']);
if($_POST['id'])
{
$delete = "DELETE FROM `poll` WHERE id='$id'";
$query=mysqli_query($db, $delete) or die(mysqli_error());
echo $query;
}

?>
