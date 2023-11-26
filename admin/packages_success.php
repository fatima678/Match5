<?php
    include("header.php");
    include("connection.php");

    // Assuming you have a payment ID or some identifier for the successful payment
     // Replace with the actual payment ID

    if (!isset($_SESSION['c_id'])) {
        header("Location: candidate_login.php");
        exit();
    }

    $paymentId = $_SESSION['c_id'];
    // Fetch the payment details from the database
    $sql = "SELECT * FROM payment_detail WHERE c_id = $paymentId";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Fetch the payment details as an associative array
        $paymentData = $result->fetch_assoc();

        // Close the database connection
        $conn->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="packages_success.css">
</head>
<body>
 <div id="successModal" class="modal">
        <div class="modal-content">
        	<h1>Congrats :)</h1>
            <h2>Package Purchase Successful</h2>
            <?php
                // Check if payment details are available
                if (isset($paymentData)) {
                    echo '<p>Package Name: ' . $paymentData['package_name'] . '</p>';
                    echo '<p>Price: ' . $paymentData['payment_amount'] . '</p>';
                    // Add more package details here as needed
                } else {
                    echo '<p>Package details not found.</p>';
                }
            ?>

            <h4>Note: Now you can view profiles</h4>
        </div>

    </div>

</body>
</html>