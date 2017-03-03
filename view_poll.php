 <?php
     include("config.php");
     include('session.php');
     $sql = "SELECT * FROM poll";
      $result = mysqli_query($db,$sql);
      if( isset($_REQUEST['action'] ) && ($_REQUEST['action'] =='delete')){
        $id=$_REQUEST['id'];
        $sql ="DELETE from  poll  where id=$id";
         mysqli_query($db,$sql);
         header("location:view_poll.php");
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    </head>

    <body>
        <div class="container">
            <h1>
                <center><u>Poll Section</u></center>
            </h1>
            <div style="float:right;">
                <a href="view_poll.php"><img src="poll.jpg" width="30px" height="30px"></a>
                <a href="poll.php"><img src="ques.png" width="30px" height="30px"></a>
                <a href="adduser.php"><img src="add.png" width="30px" height="30px"></a>
                <a href="logout.php"><img src="log.jpeg" width="30px" height="30px"></a>
            </div>

            <table class="table table-bordered">
                <tr class="danger">
                    <th>Question</th>
                    <th>Status</th>
                    <th>Created Time</th>
                    <th>Edited Time</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                $num_rec_per_page=5;
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                 $start_from = ($page-1) * $num_rec_per_page; 
                 $sql = "SELECT * FROM poll LIMIT $start_from, $num_rec_per_page"; 
                  $rs_result = mysqli_query ($db,$sql); //run the query
                    while ($row = mysqli_fetch_assoc($rs_result)) { 
                  ?>
                    <tr class="info">
                        <td>
                            <?php echo $row['ques']; ?>
                        </td>
                        <td>
                            <?php echo $row['status']; ?>
                        </td>
                        <td>
                            <?php echo $row['time1'];  ?>
                        </td>
                        <td>
                            <?php echo $row['time2'];  ?>
                        </td>
                        <td>
                            <a href="edit_poll.php?id=<?php echo $row['id'];?>"><img src="b_edit.png" alt="" /></a>
                        </td>
                        <td>
                            <a href="?action=delete&id=<?php echo $row['id'];?>"><img src="b_drop.png" alt="" /></a>
                        </td>
                    </tr>
                    <?php }?>
            </table>
            <?php 
            $sql = "SELECT * FROM poll"; 
            $rs_result = mysqli_query($db,$sql); 
            $total_records = mysqli_num_rows($rs_result);  
            $total_pages = ceil($total_records / $num_rec_per_page); 
            echo "<a href='view_poll.php?page=1'><button'  class='btn-info'><<</button></a> ";  
            for ($i=1; $i<=$total_pages; $i++){
                if(isset($_GET['page']) && $_GET['page']==$i){
              echo "<button'  class=' btn-default'>".$i."</button> ";   
                }
               
                else{
            echo "<a href='view_poll.php?page=".$i."'><button'>".$i."</button></a> "; 
            }}
            echo "<a href='view_poll.php?page=$total_pages'><button'  class=' btn-info'>>></button></a> ";
            ?>
        </div>
    </body>

    </html>
