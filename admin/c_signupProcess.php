<?php
include("connection.php");

$name = $_POST['CandidateName'];
$password = $_POST['CandidatePass'];
$confirmpassword = $_POST['CandidateconfirmPass'];


$sql = "INSERT INTO candidatesignup (c_username, password, confirmpassword) VALUES ('$name', '$password', '$confirmpassword')";
if ($conn->query($sql) === TRUE) {
    $c_id = $conn->insert_id;
    
    // Here, you should set the c_id into a session or use any other method to persist it
    session_start();
    $_SESSION['c_id'] = $c_id;
    echo $_SESSION['c_id'];

    echo "Data inserted successfully.";
    header("Location: candidate_login.php"); // Redirect to login page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
