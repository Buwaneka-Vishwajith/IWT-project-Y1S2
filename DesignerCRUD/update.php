<?php 
include 'connect.php';
$designerId=$_GET['updateid'];


if (isset($_POST['submit'])){
    $designerId = $_POST ['Designer_id'];
    $name1 = $_POST ['Name'];
    $email2 = $_POST ['Email'];
    $contact_number1 = $_POST ['Contact_number'];
    $skills = $_POST ['Skill'];
    $Specialisation1 = $_POST ['Specialisation'];


    $sql = " update design_team_details 
    set Designer_id= '$designerId', Name='$name1', Email='$email2', Contact_number= '$contact_number1' , Skill='$skills', Specialisation='$Specialisation1' 
    where Designer_id =  '$designerId'";

    $result = mysqli_query($con,$sql);

    if($result){
        echo "Updated successfully";
        //header ('location:display.php');
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
    <link rel="stylesheet" href="./designer.css">
</head>
<body>

    <!-- Hero section-->
    <div class="hero">
        <div class="logo">
            <img src="./logos/logo.png" alt="logo" width="200px" height="65px">
            </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="">Services</a></li>
                <li class="Hlist"><a href="">About</a></li>
                <li class="Hlist"><a href=""> Blog</a></li>
                <li class="Hlist"><a href="">Projects</a></li>
                <li class="Hlist"><a href="">Contact us</a></li>
            </ul>
        </nav>
        <!--cord start-->

        <!--designer page-->


        <div class="wrapper flex_align_justify">
         <div class = "container ">
         <h1>Design Team Details</h1>
            <form method = "post">
            <div class="form-group">
                    <lable> Designer ID :</lable>
                    <input type= "text" class = "form-control" placeholder = "Enter Designer ID" name= "Designer_id" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <lable> Name :</lable>
                    <input type= "text" class = "form-control" placeholder = "Enter Name" name= "Name" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <lable> Email :</lable>
                    <input type= "email" class = "form-control" placeholder = "Enter Email" name= "Email" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <lable> Contact Number :</lable>
                    <input type= "text" class = "form-control" placeholder = "Enter Contact Number" name= "Contact_number" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <lable> Skills :</lable>
                    <input type= "text" class = "form-control" placeholder = "Enter Skills" name="Skill" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <lable> Specialisation :</lable>
                    <input type= "text" class = "form-control" placeholder = "Enter your Specialisation" name= "Specialisation" autocomplete="off" required>
                </div>



                <button type="submit" name="submit"> Submit </button>
            </form>
         </div>

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
                    <li class="Flist2"><a href="">Services</a></li><br>
                    <li class="Flist2"><a href="">About</a></li><br>
                    <li class="Flist2"><a href=""> Blog</a></li><br>
                    <li class="Flist2"><a href="">Projects</a></li><br>
                    <li class="Flist2"><a href="">Contact us</a></li>       
                </ul>
            </div>  
            </div>

            <br>

            <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>

</body>
</html>