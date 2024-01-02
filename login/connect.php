<?php

$con = new mysqli('localhost', 'root', '', 'buwaneka');

if($con -> connect_error){
    die("Connection error : " .$con -> connect_error);
}

