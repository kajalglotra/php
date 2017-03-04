<?php
   include("config.php");
  include('session.php');
  if(isset($_POST['add_ques']) && (!empty($_POST["ques"])) && (!empty($_POST["option1"])) && (!empty($_POST["option2"]))){
  $ques=$_POST['ques'];
  $option1=$_POST['option1'];
  $option2=$_POST['option2'];
  $option3=$_POST['option3'];
  $option4=$_POST['option4'];
  $option5=$_POST['option5'];
  $status=$_POST['status'];
  $sDate = date("Y-m-d H:i:s");
  $sql="INSERT INTO poll
  (ques,option1,option2,option3,option4,option5,status,time1) VALUES ('$ques','$option1','$option2','$option3','$option4','$option5','$status','$sDate')";
  $result = mysqli_query($db,$sql);
  header("location:userview.php");
}
?>
    <html>

    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            var count=3;
            $(document).ready(function() {
                $(".add").click(function() {
                    if(count<=5){
                    $(".inner").append("<tr id='abc'><td>Option:</td><td> <input type='text' name='option"+count+"' value=''></td><td></td></tr>");
                    count=count+1;
                  }
                });
                $("#remove").click(function() {
                    $("#abc").remove();
                });
                 $("#register").click(function() {
                  var ques = $("#ques").val();
                  var option1 = $("#option1").val();
                  var option2 = $("#option2").val();
                if (ques== '' || option1== '' || option2 ==  '') {
                  alert("Please fill all fields...!!!!!!");
                 } 
               });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <center>
                <h1> <u>Add Your Question</u></h1>
            </center>
            <form action="#" method="POST">
                <table class="table table-striped inner">
                    <tr>
                        <td>Question:</td>
                        <td> <input type="text" name="ques" id="ques" value=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Option:</td>
                        <td> <input type="text" name="option1" id="option1" value=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>option:</td>
                        <td> <input type="text" name="option2" id="option2" value=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td> <input type="text" name="status" id="status" value=""></td>
                        <td></td>
                    </tr>

                </table>
                <table class="table">
                    <tr>
                        <td><a class="add">add another</a></td>
                        <td><a id='remove'>remove</a></td>
                        <td><a href="view_poll.php">View Poll</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn-info" value="Save" name="add_ques" id="register"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

    </html>