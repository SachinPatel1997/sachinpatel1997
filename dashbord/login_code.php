<?php
session_start();
require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    //	header("Location: login.php");
      //  $_SESSION['success']="Redirected to Dashboard";
   // echo "Login SuccessFully";
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["Id"];
		$email = $row["Email"];
		//session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: dashboard.php");
}
else
{
   // $_SESSION['error']="Wrong Email Or Passwsord!";
    header('Location:login.php');
	echo "Invalid email or password";
}
?>