<?php
 session_start();
 include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="includes/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_bar").load("task.php");
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

            <b>Your Email : </b> <?php echo $_SESSION['email']; ?>
            <span style="margin-left: 25px"><b>Name : </b>  <?php echo $_SESSION['name']; ?> </span>
            

            </div>

         </div>
    </div>


    <div class="row">
    <div class="col-md-2" id="left_bar">
        <table class="table">
            <tr>
                <td style="text-align: center">
                    <a href="user_dashboard.php" type="button" id="buttonthis">Dashboard</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    <a class="link" type="button" id="manage_task" >Update task</a>
                </td>
            </tr>
            
            <tr>
                <td style="text-align: center">
                    <a href="logout.php" type="button" id="buttonthis">Logout</a>
                </td>
            </tr>
        </table>
    </div>
    


    <div class="col-md-10" id="right_bar">


    <h3>Warning </h3>

    <ul style="Line-height:3em; font-size: 1.2em;List-style-type:none; ">

    <li>1. User can only view their tasks </li>
    <li>2. User can only update on their tasks </li>
    <li>3. user are not admins </li>
    <li>4. Logout for ending your session </li>



    </ul>


    </div>
    </div>

</body>
</html>