<?php
include("connection.php");
session_start();

if (!isset($_SESSION['c_id'])) {
    header("Location: candidate_login.php");
    exit();
}

$c_id = $_SESSION['c_id'];

// Check if the user has an active "Paid" package
$sqlCheckPackage = "SELECT * FROM payment_detail WHERE c_id = $c_id AND payment_status = 'paid'";
$resultCheckPackage = $conn->query($sqlCheckPackage);

if ($resultCheckPackage->num_rows > 0) {
    // User already has an active "Paid" package, redirect them to a message page or another action
    $_SESSION['package_restriction'] = true;
    header("Location: package_restriction.php"); // Create a page to inform the user
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $package_price = $_POST['package_price'];
    $package_name = $_POST['package_name'];

    

    $payment_status = "paid";

    // Calculate the expiration date based on the selected package's duration
    switch ($package_name) {
        case "signature-package":
            $duration = "12 months";
            break;
        case "premium-package":
            $duration = "6 months";
            break;
        case "premium":
            $duration = "1 months";
            break;
        case "standard":
            $duration = "15 days";
            break; 
        case "normal":
            $duration = "7 days";
            break;     
 
        default:
            $duration = "1 days"; // Default to 1 month
            break;
    }

    $currentDate = date('Y-m-d H:i:s');
    $expirationDate = date('Y-m-d H:i:s', strtotime($currentDate . " + $duration"));

    // Insert payment details into the payment_detail table
    $sql = "INSERT INTO payment_detail (c_id, payment_status, payment_amount, purchase_date, expiration_date, package_name)
            VALUES ($c_id, '$payment_status', $package_price, '$currentDate', '$expirationDate', '$package_name')";

    if ($conn->query($sql) === TRUE) {
        // Set a success session variable
        $_SESSION['payment_success'] = true;
        header("Location: packages_success.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
