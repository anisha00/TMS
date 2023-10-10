<?php
    include('includes/connection.php');
    if(isset($_POST['userRegister'])){
        $query="insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phoneNo]')";
        $query_run=mysqli_query($conn,$query);
        if($query_run){
            echo"<script type=text/javascript>
            alert('User registered successful!!');
            window.location.href='index.php';
            </script>";
        }
        else{
            echo"<script type=text/javascript>
            alert('Error!!Please try again');
            window.location.href='register.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
        <div class="col-md-3 m-auto" id="register-login-page">
        <center><h3>REGISTER YOUR ACCOUNT</h3> </center>
        <form action="" method="POST">
            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required/>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required/>
            </div>
            <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required/>
            </div>
            <div class="form-group">
            <input type="text" name="phoneNo" class="form-control" placeholder="Enter your Phone No." required/>
            </div>
            <div class="form-group"><center>
            <input type="submit" name="userRegister" class="btn btn-success" value="LOGIN" /></center>
            </div>
        </form>
        <center>
        <a href="index.php" class="btn btn-warning">HOME</a>
        </center>
        </div>
    </div> 
</body>
</html>