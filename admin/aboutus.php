<?php 
     include("header.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="registeration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="aboutus.css">
    <style type="text/css">
        .navbar { 
    background-color: darkred;
    overflow: hidden;
}

.navbar a.title {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: bold;
}

.navbar .navbar-links {
    float: right;
}

.navbar a {
    display: inline-block; 
    color: white;
    text-align: center;
    padding: 13px 15px;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
}
  
.navbar a:hover {
    background-color: rgba(0,0,0,0.2);
}

@media screen and (max-width: 600px) {
    .navbar a {
        display: block; 
        float: none;
    }
    .navbar .navbar-links {
        float: none;
        text-align: center; 
    }
}
    </style>
</head>
<body>
<section class="home" id="home">
    <div class="content">
        <h3>About Us</h3>
        <p>Welcome to our Online Matchmaking System, where we believe that love knows no boundaries and technology can bring people together.to find their perfect match. Our platform is dedicated to connecting individuals looking for meaningful relationships, fostering friendships, and creating lasting connections.We strive to make the process of finding your soulmate an enjoyable and efficient experience</p>
    </div>
    <div class="image">
        <img src="images/ab1.jpg" alt="">
    </div>
    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>
</section>

<section class="about" id="about">
    <h1 class="heading"> <span>Meet Our Ceo</span>  </h1>
    <div class="row">
        <div class="image">
            <img src="images/ab2.webp" alt="">
            <h2>CEO: Zeeshan Arshad</h2>
        </div>

        <div class="content">
            <h3 class="title">Our Mission</h3>
            <p>Our mission is to create a safe, inclusive, and enjoyable space for individuals to explore their romantic and social possibilities. We believe that everyone deserves a chance at love and companionship, and our platform aims to break down barriers and facilitate genuine connections.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-award"></i>
                    <h3>350+ Active Client</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-user"></i>
                    <h3>250+ satisfied clients</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-project-diagram"></i>
                    <h3>2000 Happy Wed Couples</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h1 class="heading">  <span>Our Branches</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/ab3.jpg" alt="">
            <p>Address: Street 4, Akram colony, Gill road. Gujranwala, 52250. Pakistan.</p>
        </div>
        <div class="box">
            <img src="images/ab4.jpg" alt="">
            <p>Address: Street 4, Akram colony, Gill road. Gujranwala, 52250. Pakistan.</p>
        </div>
        <div class="box">
            <img src="images/ab5.jpg" alt="">
            <p>Address: Street 4, Akram colony, Gill road. Gujranwala, 52250. Pakistan.</p>
        </div>
    </div>
</section>


<section class="review" id="review">
    <h1 class="heading"> <span>client's review</span> </h1>
    <div class="box-container">
        <div class="box">
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>Ahmad</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>"I can't thank the marriage website enough for the positive impact it has had on our relationship. My husband and I were going through a rough patch, and we decided to give this website a try. The resources and articles available were incredibly insightful and helped us understand each other better. The communication exercises and tools provided were a real eye-opener, and we found ourselves discussing things we had never addressed before. </p> 
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>Sara</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>"As a newlywed couple, we were eager to start our journey together on the right foot. The marriage website came highly recommended, and it exceeded our expectations. The personalized assessments helped us identify our strengths as a couple and areas where we could improve. The website's extensive library of articles and videos on various aspects of marriage has been invaluable.</p>   
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>Ali Khan</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>"I've been using the marriage website for a while now, and I'm thoroughly impressed with the level of support it provides. As a busy couple with demanding careers and kids, finding time for our relationship was challenging. However, the website's accessibility through mobile devices allowed us to engage with it whenever we had a moment. The weekly challenges and relationship exercises have brought fun and excitement back into our marriage. </p>
        </div>
    </div>
</section>

</body>
</html>
<?php 
  include("footer.php");
?>