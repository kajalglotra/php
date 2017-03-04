<?php
     include("config.php");
     include('session.php');
     $sql = "SELECT * FROM admin_account";
      $result = mysqli_query($db,$sql);
      if(isset($_REQUEST['action'] ) &&  $_REQUEST['action'] =='delete'){
        $id=$_REQUEST['id'];
        $sql ="DELETE from  admin_account  where id=$id";
         mysqli_query($db,$sql);
         header("location:userview.php");
      }
      
   ?>
    <html>

    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            a {
                color: black;
                font-size: 15;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>
                <center>Admin Panel</center>
            </h1>
            <div style="float:right;">
                <a href="view_poll.php"><img src="poll.jpg" width="30px" height="30px"></a>
                <a href="poll.php"><img src="ques.png" width="30px" height="30px"></a>
                <a href="adduser.php"><img src="add.png" width="30px" height="30px"></a>
                <a href="logout.php"><img src="log.jpeg" width="30px" height="30px"></a>
            </div>
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Name</th>
                    <th>Password</th>
                    <th>Id</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
	          while($row = mysqli_fetch_array($result))
                 { 
                  $id=$row['id'];
	        ?>
                        <tr class="info">
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            <td>
                                <?php echo $row['password']; ?>
                            </td>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['active']; ?>
                            </td>
                            <td><a href=edit.php?id=<?php echo $id;?>><img src="b_edit.png" alt="" /></a></td>
                            <td>
                                <a href="?action=delete&id=<?php echo $id;?>"><img src="b_drop.png" alt="" /></a>
                            </td>
                        </tr>
                        <?php }?>
                
            </table>
        </div>
    </body>

    </html>