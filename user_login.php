<?php
session_start();
include('includes/connection.php'); 
if(isset($_POST['userLogin'])){
    $email=$_POST['email'];
    $password = $_POST['password'];
    
    $check="select email,password,name,uid from users where email='$email'";
    $query_check=mysqli_query($conn,$check);
    if(mysqli_num_rows($query_check)) 
    {   $row=mysqli_fetch_assoc($query_check);
    
        $verify=password_verify($password,$row['password']);
        if($verify==1){
            $_SESSION['email'] = $row['email'];
             $_SESSION['name'] = $row['name'];
             $_SESSION['uid'] = $row['uid'];
            echo"<script type=text/javascript>
            window.location.href='user_dashboard.php';
            </script>";
        }

    }
    else{
        echo"<script type=text/javascript>
            alert('Error email did not match!!Please try again');
            window.location.href='user_login.php';
            </script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <script src="includes/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="user-login-page">
        <center><h3>USER LOGIN</h3> </center>
        <form action="" method="POST">
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required/>
            </div>
            <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required/>
            </div>
            <div class="form-group"><center>
            <input type="submit" name="userLogin" class="btn btn-success" value="LOGIN" /></center>
            </div>
        </form>
        <center>
        <a href="index.php" class="btn btn-warning">HOME</a>
        </center>
        </div>
    </div> 
</body>
</html>