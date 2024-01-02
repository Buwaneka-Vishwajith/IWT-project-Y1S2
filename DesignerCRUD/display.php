<?php 

include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./display.css">
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
                <li class="Hlist"><a href="">Projects</a></li>
                <li class="Hlist"><a href="">Contact us</a></li>
            </ul>
        </nav>
        <!--cord start-->

        <div class="dis">
            <button class="add"><a href="designer.php"> Add Designer Details</a>
            </button> <br>
          <table class="table">
                 <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Skills</th>
                            <th>Specialisation</th>
                            <th>Action</th>
                    
                        </tr>
                  </thead>
                  <tbody>

                  <?php

                  //read all row from database table
                  $sql = "SELECT * FROM design_team_details";
                  $result = mysqli_query($con,$sql);

                  if($result){
                   while ($row= mysqli_fetch_assoc($result)){
                    
                    $designerId = $row['Designer_id'];
                    $name1 = $row['Name'];
                    $email2 = $row['Email'];
                    $contact_number1 = $row['Contact_number'];
                    $skills = $row['Skill'];
                    $Specialisation1 = $row['Specialisation'];
                              echo ' <tr>
                              <td> '.$designerId.' </td>
                              <td> '.$name1.' </td>
                              <td> '.$email2.' </td>
                              <td> '.$contact_number1.' </td>
                              <td> '.$skills.' </td>
                              <td> '.$Specialisation1.' </td>
                              <td>
                              <div class="button12">
                                <div class= "btn1">
                                   <a href="update.php?updateid='.$designerId.'"> Update </button></a>
                                </div>
                                <div class = "btn2">
                                 <a href="delete.php?deleteid='.$designerId.'"> Delete </button></a>
                                </div>
                               
                               
                              </div>
                              
                            </td>
                              <tr>';
                   }   
                  }

                  ?>

                

                  </tbody>
            </table>
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
                    <li class="Flist2"><a href="../Blog/Blog.php"> Blog</a></li><br>
                    <li class="Flist2"><a href="../Advertiser support/Advertiser support.html">Projects</a></li><br>
                    <li class="Flist2"><a href="../Contact Us Page/contact.php">Contact us</a></li>       
                </ul>
            </div>  
            </div>

            <br>

            <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>

</body>
</html>