<?php
     include("config.php");
     include('session.php');
     $id=$_REQUEST['id'];
     $sql ="SELECT * FROM poll where id=$id";
     $result = mysqli_query($db,$sql);
     if(isset($_POST['update'])){
       $anotherDate = date("Y-m-d H:i:s");
       $ques=$_POST['ques'];
       $option1=$_POST['option1'];
       $option2=$_POST['option2'];
       $option3=$_POST['option3'];
       $option4=$_POST['option4'];
       $option5=$_POST['option5'];
       $status =$_POST['status'] ;
       $time1  =$_POST['time1'];
      $sql ="UPDATE poll set ques='$ques' ,option1='$option1' , option2='$option2', option3='$option3', option4='$option4', option5='$option5' , status='$status' ,time1='$time1' , time2='$anotherDate'  where id=$id";
      echo $sql;
       $result = mysqli_query($db,$sql);
       header("location:view_poll.php");
     }
?>
    <html>

    <head>
      <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
        <form action="#" method="post">
        <h1><center><u>Edit your Question</u></center></h1>
            <table class="table table-bordered">
                <?php
	             $row = mysqli_fetch_array($result);
                ?>  
                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <tr>
                        <td>Question:</td>
                        <td> <input type="text" name="ques" value="<?php echo $row['ques']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Option:</td>
                        <td> <input type="text" name="option1" value="<?php echo $row['option1']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Option:</td>
                        <td> <input type="text" name="option2" value="<?php echo $row['option2']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Option:</td>
                        <td> <input type="text" name="option3" value="<?php echo $row['option3']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Option:</td>
                        <td> <input type="text" name="option4" value="<?php echo $row['option4']; ?>"></td>
                    </tr>
                    <tr>
                        <td>option:</td>
                        <td> <input type="text" name="option5" value="<?php echo $row['option5']; ?>"></td>
                    </tr>
                     <tr>
                        <td>Status:</td>
                        <td><select name="value">
                             <option value="1">Activate</option>
                                <option value="0">Deactivate</option></td>
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