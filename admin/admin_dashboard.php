<?php 
    session_start();
    if (!isset($_SESSION['AdminLoginId'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: admin_login.php");
        exit();
    }

    // Include your database connection code here
    include("connection.php");

    // Fetch the number of users
    $sqlUsers = "SELECT COUNT(*) as num_users FROM candidate";
    $resultUsers = $conn->query($sqlUsers);
    $rowUsers = $resultUsers->fetch_assoc();
    $numUsers = $rowUsers['num_users'];

    // Fetch the number of active packages
    $sqlPackages = "SELECT COUNT(*) as num_packages FROM payment_detail WHERE payment_status = 'paid'";
    $resultPackages = $conn->query($sqlPackages);
    $rowPackages = $resultPackages->fetch_assoc();
    $numPackages = $rowPackages['num_packages'];

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
    <!-- Add this script tag to include Chart.js from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Center-align the chart container */
        .chart-container {
            width: 70%;
            text-align: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 20px;
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
       
        <div class="bottom-links">
            <a href="#" onclick="closeNav()">Close Menu</a>
        </div>
    </div>

    <div id="main">
        <span class="openbtn" onclick="toggleNav()">&#9776; Menu</span>
        <h1 style="">Welcome to Admin Dashboard</h1>

        <!-- Display the chart -->
        <div class="chart-container">
            <canvas id="myPieChart" width="400" height="200"></canvas>
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

        // Get the canvas element
        var ctx = document.getElementById('myPieChart').getContext('2d');

        // Define your data
        var data = {
            labels: ['Users', 'Active Packages'],
            datasets: [{
                label: 'Number of Users and Active Packages',
                backgroundColor: ['darkred', 'black'],
                data: [<?php echo $numUsers; ?>, <?php echo $numPackages; ?>]
            }]
        };

        // Create a pie chart
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
</body>
</html>
