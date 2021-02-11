<?php
session_start();
if(!$_SESSION['email'])
{
    header("Location: login_code.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1><br>
    <?php
    echo $_SESSION['email'];
     ?>
     <h1>
     <a href="logout.php">Logout Here</a>
</body>
</html>