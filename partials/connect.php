<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'registration-data');

if(!$conn){
die(mysqli_error($conn));
}


?>