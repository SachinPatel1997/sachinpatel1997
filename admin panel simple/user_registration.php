
<html>

    <head>

        <title>Student's Registration Form</title>    
    </head>

<body>
<form action='user_registration.php' method='post'>
<table width='500' border='10' align='center'>

    <tr>
        <th bgcolor='yellow' colspan='5'>Student's Registration Form</th>
    </tr>

    <tr>
        <td align='right'>Student's Name:</td>
        <td><input type='text' name='user_name' placeholder="Student's Name">
            <font color='red'> <?php echo @$_GET['name']; ?></font>
        </td>
    </tr>

     <tr>
        <td align='right'>Father's Name:</td>
        <td><input type='text' name='father_name' placeholder="Father's Name">
            <font color='red'> <?php echo @$_GET['father']; ?></font>
        </td>
    </tr>

     <tr>
        <td align='right'>School's Name</td>
        <td><input type='text' name='school_name' placeholder="School's Name">
            <font color='red'> <?php echo @$_GET['school']; ?></font>
        </td>
    </tr>

     <tr>
        <td align='right'>Roll No:</td>
        <td><input type='text' name='roll_no' placeholder="Roll No">
            <font color='red'> <?php echo @$_GET['roll']; ?></font>
        </td>
    </tr>

    <tr class="row">
                <td align='right'><label for="sex">Gender</label></td>
                <td>
                    <input type="radio" name="gender" id="sex" value="Male" <?php  if(isset($student_gender) && $student_gender ='Male') echo 'checked="checked"'; ?>/>
                    <label for="sex">Male</label>
                    <input type="radio" name="gender" value="Female" id="sex" <?php  if(isset($student_gender) && $student_gender ='Female') echo 'checked="checked"'; ?> />
                    <label for="">Female</label>
                    <font color='red'> <?php echo @$_GET['gender']; ?></font>

                </td>

     </tr>
     <tr>
        <td align='right'>Class:</td>
        <td>
            <select name='student_class'>
                <option value='null'>Select Class</option>
                <option value='10th'>10th</option>
                <option value='9th'>9th</option>

            </select>
            <font color='red'> <?php echo @$_GET['class']; ?></font>
        </td>
    </tr>

    <tr>
        <td align='center' colspan='10'>
        
            <input type='submit' name='submit' value='Submit'>
        </td>

    </tr>

</table>

</form>

</body>
</html>

<?php

$conn  = new mysqli("localhost","root","","students") or die("Connection Failed");
    if(isset($_POST['submit'])){
    $student_name = $_POST['user_name'];
    $student_father = $_POST['father_name'];
    $student_school = $_POST['school_name'];
    $student_roll = $_POST['roll_no'];
    $student_gender = $_POST['gender'];
    $student_class = $_POST['student_class'];

    if($student_name==''){
        echo "<script>window.open('user_registration.php?name=Name is Required','_self')</script>";
        exit();
    }

    if($student_father==''){
        echo "<script>window.open('user_registration.php?father=Father Name is Required','_self')</script>";
        exit();
    }

    if($student_school==''){
        echo "<script>window.open('user_registration.php?school=School Name is Required','_self')</script>";
        exit();
    }
    if($student_roll==''){
        echo "<script>window.open('user_registration.php?roll=Enter Roll no','_self')</script>";
        exit();
    }
     if($student_gender==''){
        echo "<script>window.open('user_registration.php?gender=Gender is Required','_self')</script>";
        exit();
    }

    if($student_class=='null'){
        echo "<script>window.open('user_registration.php?class=Select Your Class','_self')</script>";
        exit();
    }

    $query = "INSERT INTO u_reg (u_name,u_father,u_school,u_roll,gender,u_class) VALUES ('$student_name','$student_father','$student_school','$student_roll','$student_gender','$student_class')";

    if(mysqli_query($conn,$query)){
    
        echo '<center><b>The following Data Has been inserted into our database:</b></center>';
        echo "<table align='center' border='4'><tr><td>$student_name</td><td>$student_father</td><td>$student_school</td><td>$student_roll</td><td>$student_gender</td><td>$student_class</td></tr></table>";
   }
}

?>