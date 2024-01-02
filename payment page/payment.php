<?php
include 'connect.php';

//crud_create
if(isset($_POST['submit'])){
    
    $name=($_POST['Customer_name']);
    $cNumber=($_POST['Contact_number']);
    $sID=($_POST['Services_id']);
    $pID=($_POST['Package_id']);
    $tAmount=($_POST['Total_amount']);
    $iDate=($_POST['I_Date']);

    $sql = "INSERT INTO `invoice` ( Customer_name, Contact_number, Services_id, Package_id, Total_amount, I_Date)
    VALUES ('$name', '$cNumber', '$sID', '$pID', '$tAmount', '$iDate')";
    $result=mysqli_query($con,$sql);
    
    //check the condition
    if($result){
        //echo"Data Insert Successfully";
        header('location:paymentdashbord.php');
    }
    else{
        die(mysqli_error($con));
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./payment.css">
</head>
<body>

    <!-- Nav bar-->
    <div class="top">
        <div class="logo">
            <img src="./logos/logo.png" alt="logo" width="200px" height="65px">
            </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li><br>
                <li class="Hlist"><a href="../Advertiser support/Advertiser support.html"> Support</a></li><br>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Contact Us Page/contact.php">Contact us</a></li>
            </ul>
        </nav>
        <br>
        <!--Payment Cord-->
        <center>
            <div class="pform">
                <h1>INVOICE</h1>
                <br>
                <form action = "payment.php" method = "post">
                
                    <div class="formg">
                        <label for="fname">Customer Name:</label>
                        <input type="text" id="fname" name="Customer_name"placeholder="Customer Name"required autocomplete ="off">
                    </div>
                    <div class="formg">
                        <label for="phoneNumber">Contact number:</label>
                        <input type="text" id="phoneNumber" name="Contact_number" placeholder="Contact Number" required autocomplete ="off">
	                </div>
                    <div class="formg">
                        <label for="serviceID">Service Id:</label>
                        <input type="text" id="serviceID" name="Services_id" placeholder="Enter Service ID" required autocomplete="off">
                    </div>
                     <div class="formg">
                        <label for="packageID">Package ID:</label>
                        <input type="text" id="packageID" name="Package_id" placeholder="Enter your Package ID" required autocomplete="off">
                    </div>
                    <div class="formg">
                        <label for="cvv">Total Amount:</label>
                        <input type="text" id="cvv" name="Total_amount" placeholder="Rs.xxxxx" required autocomplete ="off">
                    </div>
                    <div class="formg">
                        <label for="expiryDate">Invoice date:</label>
                        <input type="text" id="expiryDate" name="I_Date" placeholder="MM/YYYY" required autocomplete ="off">
                    </div>
                    <button type="submit"name="submit">submit</button>
                    
                </form>
            </div>   
        </center>
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    
    
    <!--Footer-->

    <footer class="footer">
            <div id="upper">
                <img src="./logos/logo.png" alt="logo" width="150px" height="40px">
            </div>

            <br>
            <br>
            <hr>

            <div class="list">
                <div class="row">
                
                <ul>
                    <li class="Flist2">
                        <img src="./logos/email.png" alt="email" width="30px" height="30px">
                        <p class="icon">abcd@gmail.com</p>
                    </li><br>
                    <li class="Flist2">
                        <img src="./logos/pin.png" alt="email" width="30px" height="30px">
                        <p class="icon">1234 Elm Street, Springfield, USA</p>
                    </li><br>
                    <li class="Flist2">
                        <img src="./logos/phonew.png" alt="email" width="30px" height="30px">
                        <p class="icon">555-555-5555</p>
                    </li>
      
                </ul>

                <div class="Fend"></div>
                <ul>
                    <li class="Flist2"><a href="../Service page/service.html">Services</a></li><br>
                    <li class="Flist2"><a href="../About Us/about.html">About</a></li><br>
                    <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li><br>
                    <li class="Hlist"><a href="../Advertiser support/Advertiser support.html"> Support</a></li><br>
                    <li class="Flist2"><a href="../Our work page/Our work page.php">Projects</a></li><br>
                    <li class="Flist2"><a href="../About Us/about.html">Contact us</a></li>       
                </ul>
            </div>  
            </div>

            <br>

            <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>

</body>
</html>