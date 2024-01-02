<?php
$con = new mysqli('localhost','root','','buwaneka');

/*if($con){
    echo "Connection Successfull";
}
else{
    die(mysqli_error($con));
}*/

if(!$con){
    die(mysqli_error($con));
}else{
    echo "<script>console.log(\"amanda\")</script>";
}

?>