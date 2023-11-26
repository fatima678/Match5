<?php 
    session_start();
    // Check if the user is logged in
    $loggedIn = isset($_SESSION['c_username']);
    
    // Logout functionality
    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>header</title>
</head>
<body>
    <div class="navbar">
        <a href=" " class="title"> Matchmaking</a> 
        <div class="navbar-links">
            <a href="index.php">Home</a>
            <a href="#container-card">Featured Profiles</a>
            <a href="packages.php">Packages</a>
            <a href="services.php">Services</a>
            <a href="contactus.php">Contact Us</a>
            <a href="aboutus.php">About us</a>
            <a href="registeration.php">Register Profile</a>
            <a href="admin_login.php" class="button">Admin Panel</a>
            <?php if($loggedIn): ?>
<!--                 <a href="registeration.php">Register Profile</a> -->
                <a href=""><?php echo $_SESSION['c_username']; ?></a>
                <a href="?logout=true">Logout</a>
            <?php else: ?>
                <a href="candidate_login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
