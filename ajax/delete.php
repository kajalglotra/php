<?php
include('config.php');
$id=($_POST['id']);
echo $id;
die();
if($_POST['id'])
{
$id=($_POST['id']);
$delete = "DELETE FROM `poll` WHERE id='$id'";
mysqli_query($db, $delete);
}
?>