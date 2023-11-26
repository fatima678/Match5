<?php 
    session_start();
    if (!isset($_SESSION['AdminLoginId'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: admin_login.php");
        exit();
    }

    include("connection.php");

    // Check if the userId parameter is set
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        
        // Perform the deletion
        $sqlDelete = "DELETE FROM payment_detail WHERE c_id = (SELECT c_id FROM candidate WHERE name = '$userId')";
        if ($conn->query($sqlDelete) === TRUE) {
            // Deletion successful, redirect back to the admin dashboard
            header("Location: active_package.php");
            exit();
        } else {
            // Deletion failed, handle the error (e.g., display an error message)
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // userId parameter not set, handle the error (e.g., display an error message)
        echo "User ID not provided for deletion.";
    }
?>
