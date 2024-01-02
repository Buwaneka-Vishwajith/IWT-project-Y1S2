<?php 
include 'connect.php';

if (isset($_POST['Submit'])){
    $email2 = $_POST ['Email'];
    $yname = $_POST ['Name'];
    $cname = $_POST ['Company_Name'];
    $contact_num = $_POST ['Telephone'];
    $message = $_POST ['Comment'];
    

    $sql = " Insert into contact_us (Email,Name,Company_Name,Telephone,Comment)
     values('$email2','$yname', '$cname', '$contact_num', '$message')"; 

     //if($con->query($sql) === TRUE){
         //die("Data Inserted Successfully !");
     //}else{
         //echo "Error";
     //}
     
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
       header ('location:contact.php');
    }else{
        die(mysqli_error($con));
    }
}
?>



"<script>

 let body_div = document.querySelector('body');

async function bgchange(){

    for (let i = 0; i < 3;) {
        
        if(i == 0){
            body_div.style.backgroundImage = "url(./logos/js1.jpg)";
            
        }
        
        else if(i == 1){
            body_div.style.backgroundImage = "url(./logos/js2.jpg)";

        }
        else if(i == 2){
            body_div.style.backgroundImage = "url(./logos/js3.jpg)";
        }
        await new Promise(r => setTimeout(() => r(), 5000));
        i++;
        
        
    }
    bgchange();
}

bgchange();
</script>"


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./contact.css">
    <script src="./contact.js" defer></script>
</head>
<body>

    <!-- Hero section-->
    <div class="hero">
        <div class="logo">
            <img src="./logos/logo.png" alt="logo" width="200px" height="65px">
            </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="../Home/home.html">Home</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href=""> Blog</a></li>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
            </ul>
        </nav>

        <!--cord start-->
        
        <center>
            <section class="contact">
                <div class="main">
                    <div class="about-text">
                        <h2> We are here to help you</h2>
                        <p>Welcome to Xmedia's Contact Us page. We're excited to connect with you and discuss how our online advertising expertise can help elevate your digital presence and achieve your marketing objectives.</p>
                       
                        <div class="main_body">
                            <ol> 
                                <h3>Why Contact Us?</h3>
                                <p>We at Xmedia are aware that successful relationships need efficient communication. Our staff is here to help you every step of the way, whether you're looking for information about our services, have inquiries, or are prepared to start a digital marketing journey with us.</p>
    
                                <h3>How to Reach Us?</h3>
                                <p>Fill out our user-friendly SEND US A MESSAGE below to send us your inquiries, requests for proposals, or collaboration ideas. Please provide your contact information so we can respond to you as soon as possible. </p>
    
                            </ol>
                        </div>
     
                    </div>
    
    
                    <div class="contact-img2">
                        <img src="./logos/contactUsPage2.jpg" alt="contactUsPage2" width="250px" height="150px" >
                        <br><br><br><br><br>
                        <img src="./logos/contactUsPage.jpg" alt="contactUsPage" width="250px" height="150px">
                    </div>
    
                </div>
    
            </section>
        </center>



        <div class="contactUs">
            <h1>SEND US A MESSAGE</h1>
            <form method="post" >

               <div class="form-group">
                   <!--<lable> Email </lable>-->
                   <input type="email" placeholder="Enter Email" name= "Email" autocomplete="off" >
                </div>

             
                <div class="form-group">
                   <!--<lable> Your Name </lable>-->
                   <input type="text" placeholder="Enter Name" name= "Name" autocomplete="off" >
                </div>

                <div class="form-group">
                   
                   <input type="text" placeholder="Enter Company Name" name= "Company_Name" autocomplete="off" >
                </div>

                <div class="form-group">
                   <!--<lable> Telephone </lable>-->
                   <input type="text" placeholder="Enter Telephone" name= "Telephone" autocomplete="off" >
                </div>

                <div class="form-group">
                   
                   <textarea placeholder="Your Message" name= "Comment"></textarea>
                </div>
            
                <button type="Submit" name="Submit">Submit</button>
            </form>
        </div> 

        <!--cord close-->
    </div>

    
    

   

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
                    <li class="Flist2"><a href=""> Blog</a></li><br>
                    <li class="Flist2"><a href="../Our work page/Our work page.php">Projects</a></li><br>
                    <li class="Flist2"><a href="../Home/home.html">Home </a></li>       
                </ul>
            </div>  
            </div>

            <br>

            <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>

    

</body>
</html>