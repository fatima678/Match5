<?php 
    session_start();
    if (!isset($_SESSION['AdminLoginId'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: admin_login.php");
        exit();
    }

    // Include your database connection code here
    include("connection.php");

    // Fetch user data and payment data
    $sql = "SELECT * FROM `candidate` WHERE 1";
    $result = $conn->query($sql);


    // Logout logic
    if (isset($_POST['logout'])) {
        // Destroy the session and redirect to the login page
        session_destroy();
        header("Location: admin_login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin_dashboard2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style>
        /* Center-align the table container */
        .table-container {
        	width: 70%;
            text-align: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 20px;
           /* float: right;*/ /* Move the table container to the right */
            margin-right: 20px; /* Add some margin for spacing */
        }

        /* Style the table */
        table {
            width: 100%; /* Adjust the width as needed */
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: darkred;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5; /* Change to your desired hover color */
        }
        td a{
        	text-decoration: none;
        	color: red;
        	font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidenav" id="mySidenav">
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="active_package.php">Active Packages</a>
        <a href="register_users.php">Register Users</a>
        <a href="#">Settings</a>
        <form method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
        <!-- Add more links here as needed -->
        <div class="bottom-links">
            <a href="#" onclick="closeNav()">Close Menu</a>
        </div>
    </div>

    <div id="main">
        <span class="openbtn" onclick="toggleNav()">&#9776; Menu</span>
        <h1 style="">Welcome to Admin Dashboard</h1>

        <!-- Right-align the table -->
        <div class="table-container">
    <!-- Display user data -->
        <table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Occupation</th>
            <th>City</th>
            <th>Gender</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['c_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['occupation'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            // echo '<td><a href="edit_user.php?userId=' . $row['c_id'] . '">Edit</a> | <a href="delete_user.php?userId=' . $row['c_id'] . '">Delete</a></td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
        </div>
    </div>
    <script>
        let isNavOpen = false;

        function toggleNav() {
            if (isNavOpen) {
                closeNav();
            } else {
                openNav();
            }
        }

        function openNav() {
            document.getElementById("mySidenav").style.left = "0";
            isNavOpen = true;
        }

        function closeNav() {
            document.getElementById("mySidenav").style.left = "-250px";
            isNavOpen = false;
        }
    </script>
</body>
</html>
