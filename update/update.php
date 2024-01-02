<?php

include 'connect.php';

$ClientId=$_GET['updateid'];
// $number = $_GET['updatecontact'];

    // $sql = "select *
    //        from client ";


if(isset($_POST['submit'])){
    echo "hello";
        $ClientId = $_POST['Client_id'];
        // $password = $_POST['Password'];
        $number = $_POST['Contact_number'];
        $Fname = $_POST['First_Name'];
        $Lname = $_POST['Last_Name'];
        $nic = $_POST['nic'];
        echo "hello";

    $sql = "UPDATE client 
            SET Client_id='$ClientId', Contact_number='$number' ,First_Name='$Fname' ,Last_Name='$Lname' ,nic='$nic'
            WHERE Client_id='$ClientId'";



  $result=mysqli_query($con,$sql);

  if($result){
    echo "Updated successfully";
    //header('location:display.php');
  }else{
    die(mysqli_error($con));
  }

}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="./login.css" />
</head>

<body>






    <div class="fully">
        <!-- <div class="hola">
            <img src="../login/logos/logo.png" alt="logo" width="270px" height="100px">
            </div> -->
        <div class="Login">
            <h1>Update Info - <?php
            echo $_GET['updateid'] ?></h1>

            <div id="error"></div>
            <form id="form" onsubmit="return validate()" action="admindb.php" method="post">


                <div class="ingrp">
                    <input type="text" id="username" class="plc" name="Client_id" placeholder="Username"  value="<?php echo $_GET['updateid'] ?>" required onkeyup="validatename()"><br>
                    <span id="user"></span>
                </div>

                <!-- <div class="ingrp">
                    <input type="password" id="password" class="plc" name="Password" placeholder="Password" required onkeyup="validatepassword()"><br>
                    <span id="pass"></span>
                </div> -->

                <br>

                <div class="ingrp">
                    <input type="text" id="contact" class="plc" name="Contact_number" placeholder="Contact Number"  required onkeyup="validatecontact()"><br>
                    <span id="cont"></span>

                    <div class="ingrp">
                        <input type="text" class="plc" name="First_Name" placeholder="First Name" required onkeyup="validateFname()"><br>
                        <span id="fn"></span>
                    </div>

                    <div class="ingrp">
                        <input type="text" class="plc" name="Last_Name" placeholder="Last Name" required onkeyup="validateLname()"><br>
                        <span id="ln"></span>
                    </div>

                    <div class="ingrp">
                        <input type="text" id="nic_" class="plc" name="nic" placeholder="nic" required onkeyup="validateNIC()"><br>
                        <span id="nic"></span>
                    </div>
                    <br><br>

                    <div class="log1">
                        <button name="submit" type="submit" onclick="return validateForm()">Update</button>
                        <span id="sub"></span>

                        <!-- <a href="#" class="Forget-password"">Forgot Password?</a>&nbsp;<br><br> -->
                    </div><br>

                    <!-- <a href="/sign-up">Don't have an account?</a> -->
                    <!-- <hr> -->

                    <!-- <div class="already">
                <h4>Already have an account?</h4>
                </div>
                <div class="log1">
                 <button type="submit">Login</button>
                 <br>
                    <div id="ck"> -->
                    <!-- <input type="checkbox" name="remember me" id="remember-me"> Remember me -->
                    <!-- <label for="remember-me">Remember me</label>-->

                    <!-- <label for="rememberMe">Remember Me:</label> -->
                    <!-- <input type="checkbox" id="rememberMe" name="remember_me"> -->
                    <!-- </div> -->


                    <!-- </div> -->

                    <!-- <div id="logos">
                    <div id="text1">
                <h4 id="fb"> login with </h4>
                    </div>
                <div class="login-form">
                    
                    <a href="https://www.facebook.com/login/">
                        <img src="./images/facebook.png" alt="fb" width="40px" height="40px">
                </div>
                <div class="login-form">
                    
                    <a href="https://www.twitter.com/login/">
                        <img src="./images/twiter.png" alt="fb" width="40px" height="40px">
                </div>

                <div class="login-form">
                    
                    <a href="https://www.google.com/login/">
                        <img src="./images/325-3252977_7-interesting-facts-about-google-chrome-google-chrome.png" alt="fb" width="40px" height="40px">
                </div>

                
            </div> -->
                    <!-- <br> -->
            </form>

        </div>
    </div>
    <script src="../login/login.js"></script>
     
</body>

</html>