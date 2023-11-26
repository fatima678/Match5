<?php
  include("connection.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidate_Sign Up</title>
	<link rel="stylesheet" type="text/css" href="admin_login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="Js/CandidateSignupValidation.js"></script>
</script>
</head>
<body>
   <div class="login-form">
    <h2>Candidate Sign Up</h2>
    <form  action="c_signupProcess.php" method="POST" onsubmit="return validateForm();" >
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="username" name="CandidateName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="password" id="candidatePass" name="CandidatePass">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="confirm password" id="CandidateconfirmPass" name="CandidateconfirmPass">
        </div>
        <button type="submit" name="SignUp">SignUp</button> 
        <div class="extra">
            <a href="#">Already have an account ?</a>
            <a href="candidate_login.php">Login</a> 
        </div>
    </form>
	</div>

</body>
</html> 
