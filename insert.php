<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "outcome_base");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$hash = password_hash($password, PASSWORD_BCRYPT);
 
// Attempt insert query execution
$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email','$hash')";
if(mysqli_query($link, $sql)){
    // echo "Records added successfully.";
    header("Location: login.html");
	die();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<a href="login.html">Go to login page</a>