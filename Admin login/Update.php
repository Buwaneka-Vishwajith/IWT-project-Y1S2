<?php
include 'Connect.php';
$id=$_GET['updateid'];

$sql="Select * from `management` where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Admin_id'];
$password=$row['Password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $password=$_POST['password'];

  $sql="update `management` set id=$id , Admin_id='$name' , Password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Updated successfully";
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
    <title>Reset Password</title>
    <link rel="stylesheet" href="./Add _ Update _ Display.css">
</head>
<body>

<h3>Password Reset</h3>

<div>
  <form method="post">
    Admin ID
    <input type="text" name="name" autocomplete="off" value=<?php echo $name;?>>

    New Password
    <input type="text" name="password" autocomplete="off" value=<?php echo $password;?>>

    <input type="submit" value="Update" name="submit">
  </form>
</div>

</body>
</html>