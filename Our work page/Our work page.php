<?php
include 'Connect.php';
if(isset($_POST['submit'])){
  $usrname=$_POST['usrname'];
  $comment=$_POST['comment'];

  $sql="insert into `Commenter` (Name, Comment) values('$usrname', '$comment')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Comment Submitted";
  }else{
    die(mysqli_error($con));
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./Our work page.css">
</head>
<body>

    <!-- Hero section-->
    <div class="hero">
        <div class="logo">
            <img src="./logos/logo.png" alt="logo" width="200px" height="65px">
            </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href=""> Blog</a></li>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Contact Us Page/contact.php">Contact us</a></li>
            </ul>
        </nav>
        <!--cord start-->
        <br><br>
        <div class="slide">
            <center>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                      <div class="numbertext">1 / 3</div>
                      <img src="./logos/slide1.jpg" height="300px" width="300px">
                      <br><br><br>
                      <div class="text">Digital Advertising</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 3</div>
                      <img src="./logos/slide2.jpg" height="300px" width="300px">
                      <br><br><br>
                      <div class="text">SEO</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 3</div>
                      <img src="./logos/slide3.jpg" height="300px" width="300px">
                      <br><br><br>
                      <div class="text">Online Advertising</div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
            </center>
        </div>
        <br><center>
        <h1>New Ad's</h1>
        </center>
        <br><br><br><br>
        <div class="new">
            <div class="ads">
                <rectangle>
                    <h2><center>Social Medi Posts</center></h2>
                    <br>
                    <center>
                    <img src="./logos/ads c.jpg" height="150px" width="280px">
                    <img src="./logos/ads c1.jpg" height="150px" width="280px">
                    </center>
                    <br><br>
                    <center>
                    <img src="./logos/ads c2.jpg" height="150px" width="280px">
                    <img src="./logos/ads c3.png" height="150px" width="280px">
                    </center>
                </rectangle>
                
            </div>
            <div class="ads">
                <rectangle>
                    <h2><center>YouTube Ads</center></h2>
                    <br>
                    <center>
                    <img src="./logos/youtube ads.jpg" height="350px" width="600px">
                    </center>
                </rectangle>
            </div>
        </div>
        <br><br>
        <center><h1>Drop Your Comment</h1></center>
        <br><br>
        <div class="comment">
            <center>
                <div class="rectangle">
                    <br>
                    <form method="POST">
                        <label for="text">Name: </label>
                        <input type="text" name="usrname" id="text">
                        <input type="submit" name="submit">
                    
                      <br><br>
                      <label for="comment">Comment Here: </label>
                      <textarea rows="4" cols="50" name="comment">
                      </textarea>
                    </form>
                </div>
                <br><br>
                <h1>Social Media Partners</h1>
            </center>
        </div>
        <br>
        <div class="row1">
            <div class="column1">
              <img src="./logos/social4.jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column1">
              <img src="./logos/social2.png" alt="Forest" style="width:100%">
            </div>
            <div class="column1">
              <img src="./logos/social3.jpg" alt="Mountains" style="width:100%">
            </div>
          </div>
        <center>
            <h1>Our Best Creators</h1><br>
        </center>
        <center>
            <img src="./logos/av1.jpg" alt="Avatar" class="avatar">
            <img src="./logos/av2.jpg" alt="Avatar" class="avatar">
            <img src="./logos/av3.png" alt="Avatar" class="avatar">
            <img src="./logos/av4.png" alt="Avatar" class="avatar">
            <img src="./logos/av5.png" alt="Avatar" class="avatar">
            <img src="./logos/av6.png" alt="Avatar" class="avatar">
            <img src="./logos/av7.png" alt="Avatar" class="avatar">
            <img src="./logos/av8.jpg" alt="Avatar" class="avatar">
            <img src="./logos/av9.png" alt="Avatar" class="avatar">
            <img src="./logos/av10.png" alt="Avatar" class="avatar">
            <img src="./logos/av11.png" alt="Avatar" class="avatar">
        </center>
        <br>

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
                    <li class="Flist2"><a href="../Contact Us Page/contact.php">Contact us</a></li>       
                </ul>
            </div>  
            </div>

            <br>

            <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>
<script src="./Our work page.js"></script>
</body>
</html>