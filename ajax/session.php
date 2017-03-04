<?php
   
   session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
   else{
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db,"select username from admin_account where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];
   }
   
   
?>