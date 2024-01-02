<?php
include 'Connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $password=$_POST['password'];

  $sql="insert into `management` (Admin_id, Password) values('$name', '$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Data inserted successfully";
    header('location:Display.php');
  }else{
    die(mysqli_error($con));
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
    <link rel="stylesheet" href="./Add _ Update _ Display.css">
</head>
<body>

<h2><center>Add Admin</center></h2>

<div>
  <form method="POST">
    First Name
    <input type="text" name="name" placeholder="Your Admin ID.." autocoplete="off">

    Last Name
    <input type="text" name="password">

    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>