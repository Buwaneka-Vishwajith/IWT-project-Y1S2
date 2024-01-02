
<?php

    include 'connect.php';

    if (isset($_POST['submit'])){
        $ClientId = $_POST['Client_id'];
        $password =$_POST['Password'];
        $number = $_POST['Contact_Number'];
        $Fname = $_POST['First_Name'];
        $Lname = $_POST['Last_Name'];
        $nic = $_POST['nic'];
    

    $sql= "insert into client (Client_id,Password,Contact_Number,First_Name,Last_Name,nic)
           values('$ClientId', '$password' ,' $number', '$Fname','$Lname','$nic')";

    $result = mysqli_query($con,$sql);
       
    if($result){
        header("Location: log.php");
    }else{
        die(mysqli_error($con));
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
            <h1>REGISTER</h1>

            <div id="error"></div>
            <form id="form"  onsubmit="return validate()" action="login.php" method="post">


                <div class="ingrp">
                <input type="text" id="username" class="plc" name="Client_id" placeholder="Username"   onkeyup="validatename()"><br>
                <span id="user"></span>
                </div>

                <div class="ingrp">
                <input type="password" id="password" class="plc" name="Password" placeholder="Password"   onkeyup="validatepassword()"><br>
                <span id="pass"></span>
                </div>  

                    <br>

                <div class="ingrp">
                <input type="text" id="contact" class="plc" name="Contact_Number" placeholder="Contact Number"   onkeyup="validatecontact()"><br>
                <span id="cont"></span>

                <div class="ingrp">
                <input type="text" class="plc" name="First_Name" placeholder="First Name"   onkeyup="validateFname()"><br>
                <span id="fn"></span>
                </div>

                <div class="ingrp">
                <input type="text" class="plc" name="Last_Name" placeholder="Last Name"   onkeyup="validateLname()"><br>
                <span id="ln"></span>
                </div>

                <div class="ingrp">
                <input type="text" id="nic_" class="plc" name="nic" placeholder="nic"   onkeyup="validateNIC()"><br>
                <span id="nic"></span>
                </div>
                <br><br>

                <div class="log1">
                <button id="b1" name="submit" type="submit" onclick="return validateForm()" >Sign up</button> 
                <span id="sub"></span>

                <!-- <a href="#" class="Forget-password"">Forgot Password?</a>&nbsp;<br><br> -->
                </div><br>

                <!-- <a href="/sign-up">Don't have an account?</a> -->
                <hr>
                
                <div class="already">
                <h4>Already have an account?</h4>
                </div>
                <div class="log1">
                    <a href="log.php"><button id="b2" type="submit">Login</button></a>
                 <br>
                    <div id="ck">
                      <!-- <input type="checkbox" name="remember me" id="remember-me"> Remember me --> 
                        <!-- <label for="remember-me">Remember me</label>-->

                        <!-- <label for="rememberMe">Remember Me:</label> -->
                        <!-- <input type="checkbox" id="rememberMe" name="remember_me"> -->
                    </div>
             
             
                </div>
                
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
            <br>
            </form>

        </div>
        </div>
        <script src="./login.js"></script>
    </body>
</html>