<?php
session_start();
// Create connection
$conn = mysqli_connect('localhost','kk','kk211299','jedb');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

  // Attempt insert query execution
$sql = "INSERT INTO EZ (username, passord) 
VALUES ('$username', '$password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>
    

