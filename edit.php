<?php
     include("config.php");
     include('session.php');
     $id=$_REQUEST['id'];
     $sql ="SELECT * FROM admin_account where id=$id";
     $result = mysqli_query($db,$sql);
     if(isset($_POST['update'])){
        $name=$_POST['username'];
      $password=$_POST['password'];
      $active=$_POST['active'];
      $id1=$_POST['id'];
 
      $sql ="UPDATE admin_account set username='$name' ,password='$password' ,active='$active'  where id=$id1";
       $result = mysqli_query($db,$sql);
       header("location:userview.php");
     }
?>
    <html>

    <head>
      <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
        <form action="#" method="post">
        <h1><center><u>Edit your info</u></center></h1>
            <table class="table table-bordered">
                <?php
	             $row = mysqli_fetch_array($result);
                ?>  
                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <tr>
                        <td>Name:</td>
                        <td> <input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td> <input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td> <input type="text" name="active" value="<?php echo $row['active']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit" name="update">
                        </td>
                    </tr>
            </table>



        </form>
        </div>
        </div>

        </div>
    </body>

    </html>