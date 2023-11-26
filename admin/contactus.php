<?php include("header.php") ?>;

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contactus</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class="image-container">
		  <img src="images/contactus.jpg" alt="Background Image">
		  	<div class="centered-content">
		    <h1>Contact Us</h1>
		    </div>
		</div>
	</div> 

	

	<h2>Contact Us</h2>
    <div class="contact-container">
		<div class="left-div">
			<h4>Contact Info</h4>
	    	<h3><i class="fas fa-envelope"></i>  matchmaking7@gmail.com</h3>
			<h3><i class="fas fa-phone"></i>  +923001234567</h3>
			<h3><i class="fas fa-map-marker-alt"></i>  Gujranwala,Pakistan-52250</h3>
		</div>

	    <div class="right-div">
	    	<h4>Contact form</h4>
	    	<input type="text" name="name" placeholder="Name">
	    	<input type="email" name="email" placeholder="Email">
	    	<textarea rows="4" placeholder="Message"></textarea >
	    	<button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>

	    </div>
    </div>

</body>
</html>

<?php 
  include("footer.php");
?>