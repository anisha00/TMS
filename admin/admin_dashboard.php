<?php
session_start();
    include('../includes/connection.php');
    if(isset($_POST['create_task'])){
        $query = "insert into tasks values(null , $_POST[id] , '$_POST[description]' , '$_POST[start_date]' , '$_POST[end_date]' , 'Not Started')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo"<script type='text/javascript'>
        alert('Task created successfully.......');
        window.location.href='admin_dashboard.php';
        </script>";

        }

        else{

            echo"<script type='text/javascript'>
            alert('Error!!Please try again');
            window.location.href='admin_dashboard.php';
            </script>";



        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../includes/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_bar").load("create_task.php");
            });
        });



        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_bar").load("manage_task.php");
            });
        });
    </script>



</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4"   style="display : inline-block">
                <h3>Task Management System </h3>

            </div>

            <div class="col-md-6" style="display : inline-block ; text-align:right;">

            <b>Your Email : </b> <?php echo $_SESSION['email'];?>
            <span style="margin-left: 25px"><b>Your Name : </b> <?php echo $_SESSION['name'];?></span>
            

            </div>

         </div>
    </div>


    <div class="row">
    <div class="col-md-2" id="left_bar">
        <table class="table">
            <tr>
                <td style="text-align: center">
                    <a href="admin_dashboard.php" type="button" id="buttonthis">Dashboard</a>
                </td>
            </tr>


            <tr>
                <td style="text-align: center">
                    <a type="button"  class="link" id="create_task">Create task</a>
                </td>
            </tr>

            <tr>
                <td style="text-align: center">
                    <a type="button"  class="link"  id="manage_task">Manage task</a>
                </td>
            </tr>
              
            <tr>
                <td style="text-align: center">
                    <a href="../logout.php" type="button" id="buttonthis">Logout</a>
                </td>
            </tr>
        </table>
    </div>



 <div class="col-md-10" id="right_bar">


<h3>Hi Admin </h3>

  <ul style="Line-height:3em; font-size: 1.2em;List-style-type:none; ">

  <li>1. "This is Admin Side" </li>
  <li>2. Task will be allocated by Admin. </li>
  <li>3. Admin can delete and create tasks. </li>
  <li>4. Make sure to complete the assigned tasks. </li>



</ul>

</div>
</div>

</body>
</html>