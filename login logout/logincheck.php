<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfully";
}else{
    echo "no connection";   
}
$db = mysqli_select_db($con,'youtubeadmin');
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM admintable WHERE user='$username' and pass='$password'";
    $query = mysqli_query($con,$sql);
    
    $row = mysqli_num_rows($query);
    if($row == 1){
        echo "login successful";
        $_SESSION['user'] = $username;
        header('location:adminmainpage.php');
    }else{
        echo "login failed";
        header('location:adminlogin.php');
    }
}
?>
