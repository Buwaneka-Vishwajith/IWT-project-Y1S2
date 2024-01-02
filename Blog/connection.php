<?php
$servername ="localhost";
$username ="root";
$password ="";
$database = "buwaneka";

$con =new mysqli($servername,$username,$password,$database);

if($con ->connect_error)
{
    die("connection faild: ".$con ->connect_error);
   
}
// else
// {
//     echo "connection successfully";
// }


?>