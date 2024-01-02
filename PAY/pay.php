

<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="../login/login.css"/>
        <link rel="stylesheet" href="./popup.css"/>
    </head>
    <body>
        <div class="fully">
            <!-- <div class="hola">
            <img src="../login/logos/logo.png" alt="logo" width="270px" height="100px">
            </div> -->
            <div class="Login">
            <h1>Payment</h1>

            <div id="error"></div>
            <form id="form" onsubmit="return validate()" >


                <div class="ingrp">
                <input type="text" id="card" class="plc" name="card_number" placeholder="Card number"   onkeyup="validatename()"><br>
                <span id="card"></span>
                </div>

                <div class="ingrp">
                <input type="password" id="cvv" class="plc" name="cvv" placeholder="cvv"   onkeyup="validatecvv()"><br>
                <span id="pass"></span>
                </div>

                <div class="ingrp">
                <input type="text" id="address1" class="plc" name="address" placeholder="address line 1" >
                <span id="pass"></span>
                </div>

                <div class="ingrp">
                <input type="text" id="address2" class="plc" name="address" placeholder="address line 2" ><br>
                <span id="pass"></span>
                </div>

                <div class="ingrp">
                <input type="date" id="date" class="plc" name="date" placeholder="date"  ><br>
                <span id="pass"></span>
                </div>

        

                <br>


                <button id="b1" name="submit" type="submit" onclick="return validateForm();">Request OTP</button>
 
                <div id="otp-popup" class="popup">
                <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Enter OTP</h2>
            <input type="text" id="otp-input" placeholder="Enter OTP">
            <button id="submit-otp" onclick="submitOTP()">Confirm Payment</button>
        </div>
    </div>

        <br><br>
                
        <br>
        </form>

        </div>
        </div>

        

        <script src="./pay.js"></script>
    </body>

</html>