 <?php
 include('partials/connect.php'); 
 if (!isset($_SESSION['username'])) {
    header("location: index.php");  
 }
 ?>
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome page</title>
 </head>
 <body>

 <h1 class="welcome-msg">Welcome<?php echo $_SESSION['username']?></h1>
 
<form action="logout.php" method="get">
<input type="submit" value="Logout" class="exit-btn">
</form>
 </body>
 </html>