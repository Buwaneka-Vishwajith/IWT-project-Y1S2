<?php

$con = new mysqli('localhost', 'root', '', 'buwaneka');

if (!$con) {
    die(mysqli_error($con));
} 
