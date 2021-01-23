<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "No Connection";
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
<header>
    <div class="container center-div-shadow">
        <div class="heading text-center mb-5 text-uppercase text-dark">ADMIN LOGIN PAGE</div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
            <div class="admin-form shadow p-2">
                    <form action="logincheck.php" method="POST">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="user" value="" class="form-control" autocomplete="off">
                        </div>
                        
                         <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                        </div>
                            <input type="submit" class="btn btn-success" name="submit">    
                    </form>
            </div>
        </div>
    </div>
    
    </header>
</body>
</html>