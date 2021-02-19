<?php

$conn = new mysqli("localhost","root","","students") or die ("Connection Failed");

$edit_record = $_GET['edit'];
$query = "SELECT * FROM u_reg WHERE u_id='$edit_record'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
    $edit_id = $row[0];
    $s_name = $row[1];
    $s_father = $row[2];
    $s_school = $row[3];
    $s_roll = $row[4];
    $s_class = $row[6];
}
?>
<html>

    <head>

        <title>Updating Student's Record</title>    
    </head>

<body>
<form action='edit.php?edit_form=<?php echo $edit_id; ?>' method='post'>
<table width='500' border='3' align='center'>

    <tr>
        <th bgcolor='yellow' colspan='5'>Updating Form</th>
    </tr>

    <tr>
        <td align='right'>Student's Name:</td>
        <td><input type='text' name='user_name1' value='<?php echo $s_name; ?>'>
            
        </td>
    </tr>

     <tr>
        <td align='right'>Father's Name:</td>
        <td><input type='text' name='father_name1' value='<?php echo $s_father; ?>'>
            
        </td>
    </tr>

     <tr>
        <td align='right'>School's Name</td>
        <td><input type='text' name='school_name1' value='<?php echo $s_school; ?>'>
            
        </td>
    </tr>

     <tr>
        <td align='right'>Roll No:</td>
        <td><input type='text' name='roll_no1' value='<?php echo $s_roll; ?>'>
            
        </td>
    </tr>

    
        <td align='right'>Class:</td>
        <td>
            <select name='student_class1'>
                <option value='<?php echo $s_class; ?>'><?php echo $s_class; ?></option>
                <option value='10th'>10th</option>
                <option value='9th'>9th</option>

            </select>
           
        </td>
    </tr>

    <tr>
        <td align='center' colspan='6'>
        
            <input type='submit' name='update' value='Update'>
        </td>

    </tr>

</table>

</form>

</body>
</html>

<?php

if(isset($_POST['update'])){
    $edit_record1 = $_GET['edit_form'];
    $student_name = $_POST['user_name1'];
    $student_father = $_POST['father_name1'];
    $student_school = $_POST['school_name1'];
    $student_roll = $_POST['roll_no1'];
    $student_class = $_POST['student_class1'];

    $query1 = "UPDATE u_reg SET u_name='$student_name',u_father='$student_father',u_school='$student_school',u_roll='$student_roll',u_class='$student_class' WHERE u_id='$edit_record1'";

    if (mysqli_query($conn,$query)){
        echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
    }
}
?>