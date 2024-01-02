<?php

$con = new mysqli('localhost', 'root', '', 'buwaneka'); //connecting to database(server name,user name, password, db name)

if (!$con){
  die(mysqli_error($con));
}

?>