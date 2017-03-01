<?php
   include("config.php");
  include('session.php');
  if(isset($_POST['add'])){
 
  $name=$_POST['username'];
  $password=$_POST['password'];
  $sql="INSERT INTO admin_account
  (username,password) VALUES ('$name','$password')";
  $result = mysqli_query($db,$sql);
  header("location:userview.php");
}
?>
<html>

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
     <div class="container">
     <center> <h1> Add Another User</h1></center>
      <form action="#" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td> <input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input type="text" name="password" value=" "></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" class="btn-info" value="submit" name="add">
                </td>
            </tr>
        </table>



    </form>




    </div>
   
</body>

</html>
