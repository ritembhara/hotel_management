<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id16350129_hoteltravelodgerit", "t+v(zDYJ>^2RfJVQ", "id16350129_hoteltravelodge");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$book = mysqli_real_escape_string($link, $_REQUEST['Course']);
 
// Attempt insert query execution

$sql = "INSERT INTO booking (First,Last,email,Phone,Book) VALUES ('$fname', '$lname', '$email','$phone','$book')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>