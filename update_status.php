<?php
session_start();
    include('includes/connection.php');
    if(isset($_POST['update_task'])){
        $query="update tasks set status='$_POST[status]' where tid=$_GET[id]";
        $query_run= mysqli_query($conn,$query);
        if($query_run){
            echo"<script type=text/javascript>
            alert('Task updated successfully!!');
            window.location.href='user_dashboard.php';
            </script>";
        }
        else{
            echo"<script type=text/javascript>
            alert('Error!!Please try again');
            window.location.href='user_dashboard.php';
            </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update your task</title>
    <script src="includes/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
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
        <div class="col-md-4 m-auto"><br>
            <h3>Update the task</h3>
            <?php
                $query="select *from tasks where tid= $_GET[id]";
                $query_run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value=""required>
                        </div>
                        <div class="form-group">
                           <select name="status" class="form-control">
                           <option>-Select-</option>
                           <option>In-Progress</option>
                           <option>Complete</option>
                           </select>
                        </div>
                        <input type="submit" class="btn btn-success" name="update_task" value="Update" >
                    </form>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>