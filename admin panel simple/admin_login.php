<?php
session_start();
?>
<html>

    <head>

        <title>Admin Login</title>

    </head>

<body>
<form action="admin_login.php" method="post">
<table width="400" border="2" align="center" bgcolor="orange">

    <tr>
        <td align="center" bgcolor="pink" colspan="6"><h2> Admin Pannel Form</h2></td>
    </tr>

    <tr>
        <td align="right">Admin Name:</td>
        <td><input type="text" name='admin_name'></td>
    </tr>

    <tr>
        <td align="right">Admin Password:</td>
        <td><input type="password" name='admin_pass'></td>
    </tr>

    <tr>
        <td colspan='4' align="center"><input type="submit" name="login" value="Login"></td>
    </tr>
</table>
</form>
<center><?php echo @$_GET['error']; ?></center>
</body>
</html>
<?php
$conn = new mysqli("localhost","root","","students") or die("Connection Faild");
if(isset($_POST['login'])){
    $admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    

    $query = "SELECT * FROM login WHERE user_name='$admin_name' AND user_password='$admin_pass'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) >0){
        echo "<script>window.open('view.php?logged=Logged In SuccessFully..!','_self')</script>";
    }
        else{
                echo "<script>alert('Password Or User Name Is Incorrect')</script>";
        }
    
}

?>