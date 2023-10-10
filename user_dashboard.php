<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4"   style="display : inline-block">
                <h3>Task Management System </h3>

            </div>

            <div class="col-md-6" style="display : inline-block ; text-align:right;">

            <b>Your Email : </b> test@gmail.com
            <span style="margin-left: 25px"><b>Your Name : </b> anvesha </span>
            

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
                    <a href="manage_task.php" type="button">Update task</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    <a href="apply_leave.php" type="button">Apply for Leave</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    <a href="leave_check.php" type="button">Leave status</a>
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


    <h3>warning </h3>

    <ul style="Line-height:3em; font-size: 1.2em;List-style-type:none; ">

    <li>1. This is this </li>
    <li>2. This is this </li>
    <li>3. This is this </li>
    <li>4. This is this </li>



    </ul>


    </div>
    </div>

</body>
</html>