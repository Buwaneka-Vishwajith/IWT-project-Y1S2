
<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $username=$_POST['Client_id'];
    $password=$_POST['Password'];

    // $sql = "insert into login (username,password)
    // values('$username','$password')";

    $sql = "select Client_id from client where Client_id='$username' and Password='$password'";

    $result=mysqli_query($con,$sql);

    $count = mysqli_num_rows($result);
    if($count >0){
        header("Location: ../Home/home.html"); //change this url 
      // echo "<font color='red'>user found</font>";

    }
    else{
        // echo "<font color='red'>user not found</font>";
        // header('location:log.php');
        echo "<script>
              window.onload = function(){ 
              alert('user  not found. Try again!'); 
              }
              </script> ";
      // die(mysqli_errno($con));
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="./login.css"/>
    </head>
    <body>
        <div class="fully">
            <!-- <div class="hola">
            <img src="../login/logos/logo.png" alt="logo" width="270px" height="100px">
            </div> -->
            <div class="Login">
            <h1>Login</h1>

            <div id="error"></div>
            <form id="form" onsubmit="return validate()" method="post">


                <div class="ingrp">
                <input type="text" id="username" class="plc" name="Client_id" placeholder="Username" required  onkeyup="validatename()"><br>
                <span id="user"></span>
                </div>

                <div class="ingrp">
                <input type="password" id="password" class="plc" name="Password" placeholder="Password" required  onkeyup="validatepassword()"><br>
                <span id="pass"></span>
                </div>

                    <br>

                <!-- <div class="ingrp">
                <input type="text" id="contact" class="plc" name="Contact_Number" placeholder="Contact Number" required  onkeyup="validatecontact()"><br>
                <span id="cont"></span>

                <div class="ingrp">
                <input type="text" class="plc" name="First_Name" placeholder="First Name" required  onkeyup="validateFname()"><br>
                <span id="fn"></span>
                </div>

                <div class="ingrp">
                <input type="text" class="plc" name="Last_Name" placeholder="Last Name" required  onkeyup="validateLname()"><br>
                <span id="ln"></span>
                </div>

                <div class="ingrp">
                <input type="text" id="nic_" class="plc" name="nic" placeholder="nic" required  onkeyup="validateNIC()"><br>
                <span id="nic"></span>
                </div>
                <br><br>

                <div class="log1">
                <button name="submit" type="submit" onclick="return validateForm()" >Sign up</button> 
                <span id="sub"></span> -->



                <!-- <a href="#" class="Forget-password"">Forgot Password?</a>&nbsp;<br><br> -->
                <!-- </div><br> -->

                <!-- <a href="/sign-up">Don't have an account?</a> -->
              
                
                <div class="log1">
                 <button id="b1" type="submit" name="submit">Login</button>
                 <br><br>
                 <div class="log2">
                <a href="../Admin login/Admin login.php"><button id="b2" type="submit" >Employee Login</button></a> 
                 <br>
             
                </div>
                
            <br>
            </form>

        </div>
        </div>
        <script src="./log.js"></script>
    </body>
</html>