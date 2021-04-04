<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "outcome_base");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$s_rollno = mysqli_real_escape_string($link, $_REQUEST['s_rollno']);
$s_name = mysqli_real_escape_string($link, $_REQUEST['s_name']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
$dept_name = mysqli_real_escape_string($link, $_REQUEST['dept_name']);
$academic_year = mysqli_real_escape_string($link, $_REQUEST['academic_year']);
$sem = mysqli_real_escape_string($link, $_REQUEST['sem']);

 
// Attempt insert query execution
$sql = "INSERT INTO stud (s_rollno, s_name, gender, dob, class, dept_name, academic_year, sem) VALUES ('$s_rollno', '$s_name','$gender','$dob','$class','$dept_name','$academic_year','$sem')";
if(mysqli_query($link, $sql)){
    echo "Record added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<p><a href="welcome.php">Go to Dashboard</a></p>
<p><a href="add_student.php">Add another Student</a></p>

<p><a href="view_students.php">View current Students</a></p>
