<?


    include('../includes/connection.php');
    if(isset($_POST['create_task'])){

        $query = "insert into tasks values(null , $_POST[id] , '$_POST[description]' , '$_POST[start_date]' , '$_POST[end_date]' , 'Not Started')";

        $query_run = mysqli_query($conn , $query);
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
    <title>Task </title>
</head>
<body>

<h1>Create a new Task here</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label>Select User :</label>
                    <select class="form-control" name="id">
                        <option>-Select-</option>

  <?php
                 include('../includes/connection.php');
                    $query = "select uid , name from users";
                            $query_run= mysqli_query($conn , $query);
                            if(mysqli_num_rows($query_run)){


                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>

                                    <option value="<?php echo $row['uid'];  ?>">
                                    
                                   <?php echo $row['name'];?></option>

                                    <?php
                                }
                            }

                            ?>




                    </select>
                </div>

                <div class="form-group">
                    <label>  Description : </label>
                    <textarea class="from-control"  rows="3" cols="50" name="description" placeholder="Mention the task" ></textarea>

                </div>

                <div class="form-group">
                    <label>  Start Date : </label>
                    <input type="date" class="form-control"name="start_date">

                </div>



                <div class="form-group">
                    <label>  End Date : </label>
                    <input type="date" class="form-control"name="end_date">

                </div>


                <input type="submit" class="btn btn-warning" name="create_task"value="Create">

            </form>
        </div>
                        


    </div>
    
</body>
</html>