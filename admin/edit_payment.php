<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    // Redirect to the login page if the session variable is not set
    header("Location: admin_login.php");
    exit();
}


include("connection.php");

// Handle form submission to update payment status
if (isset($_POST['updatePayment'])) {
    $userId = $_POST['userId'];
    $newPaymentStatus = $_POST['newPaymentStatus'];

    // Update payment status in the database
    $sql = "UPDATE payment_detail SET payment_status = '$newPaymentStatus' WHERE c_id = (SELECT c_id FROM candidate WHERE name = '$userId')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_dashboard.php");
         // Redirect back to the admin dashboard after updating
        exit();
    } else {
        echo "Error updating payment status: " . $conn->error;
    }
}

// Fetch user data based on the user ID from the URL
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $sql = "SELECT name, payment_status FROM candidate
            INNER JOIN payment_detail ON candidate.c_id = payment_detail.c_id
            WHERE name = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment Status</title>
    <link rel="stylesheet" type="text/css" href="admin_dashboard2.css">
    <style>
        /* Center-align the form container */
        #form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        /* Style the form */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px; /* Set the desired width for the form */
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style the label and select */
        label, select {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
        }

        /* Style the button */
        button {
            width: 100%;
            padding: 10px;
            background-color: darkred;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>Edit Payment Status for <?php echo $row['name']; ?></h1>
        <div id="form-container">
           
            <form method="POST">
                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                <label for="newPaymentStatus">New Payment Status:</label>
                <select name="newPaymentStatus" id="newPaymentStatus">
                    <option value="Paid" <?php if ($row['payment_status'] == 'Paid') echo 'selected'; ?>>Paid</option>
                    <option value="Unpaid" <?php if ($row['payment_status'] == 'Unpaid') echo 'selected'; ?>>Unpaid</option>
                </select>
                <br>
                <button type="submit" name="updatePayment">Update Payment Status</button>
            </form>
        </div>
    </div>
</body>
</html>
