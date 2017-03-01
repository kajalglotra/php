<?php
     include("config.php");
     include('session.php');
     $sql = "SELECT * FROM admin_account";
      $result = mysqli_query($db,$sql);
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
        <div style="float:right;"><a href="adduser.php">add </a> <a href ="logout.php">sign out</a></div>
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
	        <tr class="info">
		        <td width="100px"><?php echo $row['username']; ?></td>
		        <td width="100px"><?php echo $row['password']; ?></td>
		        <td width="100px"><?php echo $row['id']; ?></td>
	            <td><a href=edit.php?id=<?php echo $row['id'];?>><img src="b_edit.png" alt="" /></a></td>
                <td><a href=delete.php?id=<?php echo $row['id'];?>><img src="b_drop.png" alt="" /></a></td>
            </tr>
	        <?php }?>
      </table>
     
    </div>
</body>
</html>