<?php

include('partials/connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

 if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password =md5($_POST['password']);
 
 $sql = "select * from data where username = '$username' and password = '$password'";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result)>0){
    
    $_SESSION['username'] = $username;
    header("location: welcome.php");
    exit();
 }else{

$_SESSION['invalid'] ="Invalid credentials";
                    header("location:index.php");
                    exit();


 }
 
}
 
 
}

 
?>