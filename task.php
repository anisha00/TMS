<?php
session_start();
include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>TMS task</title>
    <script src="includes/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <center><h3>Tasks</h3></center>
    <table class="table">
        <tr>
            <th>S.No</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $query="select * from tasks where uid= $_SESSION[uid]";
            $query_run=mysqli_query($conn,$query);
            $sno=1;
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $row['tid'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['start_date'];?></td>
                    <td><?php echo $row['end_date'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><a href="update_status.php?id=<?php echo $row['tid'];?>">Update</a></td>
             </tr>
             <?php
             $sno= $sno+1;
        }
        ?>
    </table>
</body>
</html>