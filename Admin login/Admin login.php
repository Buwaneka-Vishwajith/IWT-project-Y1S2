<?php
include 'Connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $password=$_POST['password'];

  $sql="insert into `management` (Admin_id, Password) values('$name', '$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:Display.php');
    //echo "Login successfully";
  }else{
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./Admin login.css">
</head>
<body>

    <!-- Hero section-->
    <div class="hero">
        <center>
            <br>
            <div class="Login">
                <h1>ADMIN LOGIN</h1>
    
                <form method="post">
    
    
                    
                    <input type="text" class="plc" name="name" placeholder="Admin ID"><br>
                    
                    <input type="password" class="plc" name="password" placeholder="Password">
                    <br><br>
    
                    <div class="log1">
                    <button type="submit" name="submit">Login</button> 
                    <br><br>
                </form>
            </div>
        </center>
    </div>
    
</body>
</html>