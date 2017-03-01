<?php
     include("config.php");
     include('session.php');
     $sql = "SELECT * FROM admin_account";
      $result = mysqli_query($db,$sql);
      if(isset($_REQUEST['action'] ) && $_REQUEST['action'] =='delete'){
        $id=$_REQUEST['id'];
        $sql ="DELETE from  admin_account  where id=$id";
         mysqli_query($db,$sql);
      }
      
   ?>
<html>
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
	     a{
	         color:black;
              font-size: 15;
           }	
       </style>
    </head>
 <body>
    <div class="container">
        <h1><center>Admin Panel</center></h1>
         <div style="float:right;"><a href="adduser.php"><img src="add.png" width="30px" height="30px"></a> <a href ="logout.php"><img src="log.jpeg" width="30px" height="30px"></a></div>
	   <table class="table table-bordered">
	      <tr class="danger">
	         <th width="100px">Name</th>
		     <th width="100px">Password</th>
		     <th width="100px">Id</th>
		     <th>Edit</th>
             <th>Delete</th>
	       </tr>
	       <?php
	          while($row = mysqli_fetch_array($result))
                 { 
                  $id=$row['id'];
	        ?>
	        <form action="deleteuser.php" method="POST">
		       <tr class="info">
		       <?php  $password=md5($row['password']); ?>
		         <td width="100px"><?php echo $row['username']; ?></td>
		         <td width="100px"><?php echo $password; ?></td>
		         <td width="100px"><?php echo $row['id']; ?></td>
	             <td><a href=edit.php?id=<?php echo $id;?>><img src="b_edit.png" alt="" /></a></td>
                 <td><a href="?action=delete&id=<?php echo $id;?>"><img src="b_drop.png" alt="" /></a></td>
               </tr>
	           <?php }?>
	        </form>
      </table>
    </div>
</body>
</html>
