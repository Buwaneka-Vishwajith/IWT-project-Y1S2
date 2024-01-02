<?php
 include 'connect.php'; 
 if (isset($_GET['deleteid'])){
    $designerId=$_GET['deleteid'];

    $sql="delete from design_team_details where Designer_id= '$designerId'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else
    {
        die(mysqli_error($con));
    }
}
?>