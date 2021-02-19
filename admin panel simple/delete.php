<?php

$conn = new mysqli("localhost","root","","students") or die("Connection Failed");

$delete_record = $_GET['del'];

$query = "DELETE  FROM u_reg WHERE u_id = '$delete_record'";
if (mysqli_query($conn,$query)){
    echo "<script>window.open('view.php?deleted=Record Has been Deleted successfully!','_self')</script>";
}
?>