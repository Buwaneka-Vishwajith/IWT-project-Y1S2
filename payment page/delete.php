<?php
 include 'connect.php'; 
 if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from invoice where Invoice_id= '$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:paymentdashbord.php');
    }else
    {
        die(mysqli_error($con));
    }
}
?>