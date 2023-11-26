<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="footer2.css">
</head>
<body>
    <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Social Links</h2>
                <!-- Add your social media links here -->
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="footer-section contact-form">
            <h2>Contact Us</h2>
            <form action="" method="post">
                <!-- Add your contact form fields here -->
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit" class="btn">Send</button>
            </form>
        </div>
        </div> 
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Matchmaking. All rights reserved.</p>
    </div>
</footer>

</body>
</html>