<?php
  include("connection.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidate_login</title>
	<link rel="stylesheet" type="text/css" href="admin_login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

   <div class="login-form">
    <h2>Candidate LOGIN</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="username" name="CandidateName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="password" name="CandidatePass"> 
        </div>
        <button type="submit" name="Signin">Sign In</button>
        <div class="extra">
            <a href="#">Forgot Password ?</a>
            <a href="Candidate_SignUp.php">Create an Account</a>
        </div>
    </form>
	</div>
  

 <?php  
 	 if (isset($_POST['Signin'])) {
        // Use prepared statement to prevent SQL injection
        $query = "SELECT * FROM `Candidatesignup` WHERE `c_username` = ? AND `password` = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $_POST['CandidateName'], $_POST['CandidatePass']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if(mysqli_num_rows($result) == 1) {
           // echo "correct";
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['c_id']=$row['c_id'];
            $_SESSION['c_username']=$row['c_username'];
            header("location: index.php");
        }//if
        else {
            echo "<script>alert('Incorrect Username or Password')</script>";
        }//else
    }//if
 ?>
</body>

</html> 
