<?php
include('partials/connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['signup'])) {

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $confirm = md5($_POST['confirm']);


    $sql = "SELECT * FROM data WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = "User already exists";
            header("location:index.php");
            exit();
        } else {

            if ($password === $confirm) {

                $sql = "insert into data(username, password)
                values('$username', '$password')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $_SESSION['success'] = "signup successful";
                    header("location:index.php");
                    exit();
                }
            } else {
                $_SESSION['match'] = "password did not match";
                header("location:index.php");
                exit();
            }
        }
    }
}
?>

   