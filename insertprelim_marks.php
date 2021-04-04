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
$Q1a = mysqli_real_escape_string($link, $_REQUEST['Q1a']);
$Q1b = mysqli_real_escape_string($link, $_REQUEST['Q1b']);
$Q2a = mysqli_real_escape_string($link, $_REQUEST['Q2a']);
$Q2b = mysqli_real_escape_string($link, $_REQUEST['Q2b']);
$Q3a = mysqli_real_escape_string($link, $_REQUEST['Q3a']);
$Q3b = mysqli_real_escape_string($link, $_REQUEST['Q3b']);
$Q4a = mysqli_real_escape_string($link, $_REQUEST['Q4a']);
$Q4b = mysqli_real_escape_string($link, $_REQUEST['Q4b']);
$Q5a = mysqli_real_escape_string($link, $_REQUEST['Q5a']);
$Q5b = mysqli_real_escape_string($link, $_REQUEST['Q5b']);
$Q6a = mysqli_real_escape_string($link, $_REQUEST['Q6a']);
$Q6b = mysqli_real_escape_string($link, $_REQUEST['Q6b']);
$total = $Q1a + $Q1b + $Q2a + $Q2b + $Q3a + $Q3b + $Q4a + $Q4b + $Q5a + $Q5b + $Q6a + $Q6b;

$sqlcheck ="SELECT s_id FROM stud WHERE s_rollno = '$s_rollno'"; 
$result = mysqli_query($link,$sqlcheck);
if(mysqli_num_rows($result) == 0) {
     // row not found, do stuff...
	echo "This Roll No does not exist in your database.";
	echo ' <a href="add_student.php">Click here to add the Student to your database</a> ';
} else {
    // Attempt insert query execution
$sql = "INSERT INTO prelim (s_rollno, Q1a, Q1b, Q2a, Q2b, Q3a, Q3b, Q4a, Q4b, Q5a, Q5b, Q6a, Q6b,total) VALUES ('$s_rollno', '$Q1a','$Q1b','$Q2a','$Q2b','$Q3a','$Q3b','$Q4a','$Q4b','$Q5a','$Q5b','$Q6a','$Q6b','$total')";
if(mysqli_query($link, $sql)){
    echo "Record added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>

<p><a href="welcome.php">Go to Dashboard</a></p>
<!-- <p><a href="view_students.php">View current Students</a></p> -->
