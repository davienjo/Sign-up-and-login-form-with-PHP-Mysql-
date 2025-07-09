
<?php

include('partials/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration form</title>
</head>

<body>

    <div class="section">

        <div class="container">
            <h2>Sign up</h2>

 <?php
    if (isset($_SESSION['user'])) {
        echo "<div class='danger'>" . $_SESSION['user'] . "</div>";
        unset($_SESSION['user']);
    } else if (isset($_SESSION['success'])) {
        echo "<div class='success'>" . $_SESSION['success'] . "</div>";
        unset($_SESSION['success']);
    } else if (isset($_SESSION['match'])) {
        echo "<div class='match'>" . $_SESSION['match'] . "</div>";
        unset($_SESSION['match']);
    }
    ?>

<form action="signup.php" method="post">

                <div>
                    <label for="username " class="label">Username</label>
                    <input type="text" name="username" placeholder="Enter your username" id="username" autocomplete="off">
                </div>

                <div>
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" id="password" autocomplete="off">
                </div>

                <div>
                    <label for="confirm" class="label">Confirm Password</label>
                    <input type="password" name="confirm" placeholder="Enter your password" id="confirm" autocomplete="off">
                </div>


                <div>
                    <input type="submit" name="signup" value="Sign up" class="submit1">
                </div>

            </form>
        </div>


        <!-- login form -->

        <div class="container2">
            <h2>Login</h2>
       <?php
        if(isset($_SESSION['invalid'])) {
        echo "<div class='danger'>" . $_SESSION['invalid'] . "</div>";
        unset($_SESSION['invalid']);
        }
        ?>

            <form action="login.php" method="post">
                <div>
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" placeholder="Enter your username" id="username" autocomplete="off">
                </div>

                <div>
                    <label for="password" class="label">Password</label>
                    <input type="text" name="password" placeholder="Enter your password" id="password" autocomplete="off">
                </div>


                <div>
                    <input type="submit" name="login" value="Login" class="submit2">
                </div>
            </form>



        </div>


    </div>
</body>

</html>