<?php
     include("config.php");
     include('session.php');
     $id=$_REQUEST['id'];
     $sql ="SELECT * FROM admin_account where id=$id";
     $result = mysqli_query($db,$sql);
?>
    <html>

    <head>
    </head>

    <body>
        <form action="update.php" method="post">
            <table class="table table-bordered">
                <?php
	             $row = mysqli_fetch_array($result);
                ?>
                    <tr>
                        <td>Name:</td>
                        <td> <input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td> <input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                    </tr>
                     <tr>
                        <td> <input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit">
                        </td>
                    </tr>
            </table>



        </form>
        </div>
        </div>

        </div>
    </body>

    </html>