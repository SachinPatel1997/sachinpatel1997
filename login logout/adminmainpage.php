<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include 'link.php' ?>
</head>
<body>
    <div class="container center-div shadow">
        <div class="heading text-center text-uppercase text-white mb-5">Guys, Share With Ur Friends And Subscribe My<?Php echo $_SESSION['user']?>Sachin Patel Channel:) </div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>