<?php
session_start();
include('../includes/connection.php');
if (isset($_POST['edit_task'])) {
    $query = "update tasks set uid='{$_POST['user_id']}', description = '{$_POST['description']}' , start_date= '{$_POST['start_date']}' , end_date= '{$_POST['end_date']}' where tid={$_GET['id']}";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo "<script type='text/javascript'>
        alert('Task updated successfully!!');
        window.location.href='admin_dashboard.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Error!! Please try again');
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
    <title>Update your task</title>
    <script src="includes/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display: inline-block">
                <h3>Task Management System</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto" style="display: inline-block"><br>
            <h3>Edit the task</h3>
            <?php
                $query1 = "select * from tasks where tid = {$_GET['id']}";
                $query_run1 = mysqli_query($conn, $query1);
                if ($row1 = mysqli_fetch_assoc($query_run1)) {
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Select User:</label>
                    <select class="form-control" name="user_id">
                        <option value="-1">-Select-</option>
                        <?php
                        $queryUsers = "select uid, name from users";
                        $query_run_users = mysqli_query($conn, $queryUsers);
                        while ($rowUsers = mysqli_fetch_assoc($query_run_users)) {
                            $selected = ($rowUsers['uid'] == $row1['user_id']) ? 'selected' : '';
                            echo "<option value='{$rowUsers['uid']}' $selected>{$rowUsers['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="80" name="description" required><?php echo $row1['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row1['start_date']; ?>">
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row1['end_date']; ?>">
                </div>
                <input type="submit" class="btn btn-warning" name="edit_task" value="Update">
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html