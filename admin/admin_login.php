<?php
    session_start();
    include("connection.php");

    if (isset($_SESSION['AdminLoginId'])) {
        // If the user is already logged in, redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    }

    if (isset($_POST['Signin'])) {
        $query = "SELECT * FROM `admin_login` WHERE `username` = ? AND `password` = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $_POST['AdminName'], $_POST['AdminPass']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if(mysqli_num_rows($result) == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['a_id'] = $row['a_id'];
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            header("location: admin_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Incorrect Username or Password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin_login</title>
    <link rel="stylesheet" type="text/css" href="admin_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="login-form">
        <h2>ADMIN LOGIN</h2>
        <form method="POST">
            <div class="input-field">
                <i class="bi bi-person-circle"></i>
                <input type="text" placeholder="Username" name="AdminName">
            </div>
            <div class="input-field">
                <i class="bi bi-shield-lock"></i>
                <input type="password" placeholder="Password" name="AdminPass">
            </div>
            <button type="submit" name="Signin">Sign In</button>
        </form>
    </div>
</body>
</html>
