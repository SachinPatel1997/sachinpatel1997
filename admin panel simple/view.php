<?php
session_start();

if(!$_SESSION['admin_name']){
    header('location: admin_login.php?error=You are not an Administrator..<br>Please enter User name & Password to login to admin pannel!');
}

?>
<html>

    <head>
        <title>Viewing the Records</title>
    </head>

<body>
    <a href='user_registration.php'>Insert New Record</a>
    Welcome:<font color='blue' size='3'> <?php echo $_SESSION['admin_name']; ?></font>
    <a href='logout.php'>Logout</a>
    <center><font color='red' size='6'><?php echo @$_GET['deleted']; ?> <?php echo @$_GET['updated']; ?> <?php echo @$_GET['logged']; ?></font></center>
    <table align='center' width='1000' border='4'>

    <tr>

        <td colspan='20' align='center' bgcolor='yellow'><h1>Viewing all the records</h1></td>
    </tr>

    <tr align='center'>
        <th>Serial No</th>
        <th>Student's Name</th>
        <th>Father's Name</th>
        <th>Roll No</th>
        <th>Gender</th>
        <th>Delete</th>
        <th>Edit</th>
        <th>Details</th>
        
    </tr>


   <!-- <tr align='center'>-->
    <?php
        $conn = new mysqli("localhost","root","","students") or die ("Connection Failed");

        $query = "SELECT * FROM u_reg ORDER BY 1 DESC";
        $result = mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {
            $u_id = $row[0];
            $u_name = $row[1];
            $u_father = $row[2];
            $u_roll = $row[4];
            $gender = $row[5];

        
    ?>
    <tr align='center'>
        <td><?php echo $u_id; ?></td>
        <td><?php echo $u_name; ?></td>
        <td><?php echo $u_father; ?></td>
        <td><?php echo $u_roll; ?></td>
        <td><?php echo $gender; ?></td>
        <td><a href='delete.php?del=<?php echo $u_id; ?>'>Delete</a></td>
        <td><a href='edit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
        <td><a href='view.php?details=<?php echo $u_id; ?>'>Details</td> 
    </tr>
        <?php } ?>
</table>
<?php
$record_details = @$_GET['details'];
$query = "SELECT * FROM u_reg WHERE u_id='$record_details'";
$result1 = mysqli_query($conn,$query);
$query = "SELECT * FROM u_reg WHERE u_id='$record_details'";
$result1 = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result1))
        {
            $u_id = $row[0];
            $u_name = $row[1];
            $u_father = $row[2];
            $u_roll = $row[4];
            $gender = $row[5];
?>
<br><br>
<table align='center' border='4' bgcolor='gray' width='800'>
    <tr>
        <td bgcolor='yellow' colspan='6' align='center'>
        <h2>Your Details Here:</h2>
        </td>
    </tr>

    <tr align='center' bgcolor='white'>
        <td><?php echo $u_id; ?></td>
        <td><?php echo $u_name; ?></td>
        <td><?php echo $u_father; ?></td>
        <td><?php echo $u_roll; ?></td>
        <td><?php echo $gender; ?></td>
            
    </tr>
        <?php } ?>
</table><br><br><br><br><br>
<form action='view.php' method='get'>
Search a Record:<input type="text" name="search"/>
<input type="submit" name="submit" value="Find Now"/>
</form>
<?php

if(isset($_GET['search'])){
    $search_record = $_GET['search'];
    $query2 = "SELECT * FROM u_reg WHERE u_name='$search_record' OR u_roll='$search_record'";
    $result2 = mysqli_query($conn,$query2);
    while($row2=mysqli_fetch_array($result2)){
        $name123 = $row2[1];
        $father123 = $row2[2];
        $school123 = $row2[3];
        $roll123 = $row2[4];
        $class123 = $row2[5];

    

?>
<table width='800' bgcolor='yellow' align='center' border='1'>

    <tr align='center'>

        <td><?php echo $name123; ?></td>
        <td><?php echo $father123; ?></td>
        <td><?php echo $school123; ?></td>
        <td><?php echo $roll123; ?></td>
        <td><?php echo $class123; ?></td>   
    </tr>
</table>
<?php }} ?>

</body>
</html>