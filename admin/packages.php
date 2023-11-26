<?php 
    include("header.php"); 
    include("connection.php");

    if (!isset($_SESSION['c_id'])) {
        header("Location: candidate_login.php");
        exit();
    }
    $c_id = $_SESSION['c_id'];
    // Check if the user has an active "Paid" package
    $sqlCheckPackage = "SELECT * FROM payment_detail WHERE c_id = $c_id AND payment_status = 'Paid'";
    $resultCheckPackage = $conn->query($sqlCheckPackage);
    $hasActivePackage = $resultCheckPackage->num_rows > 0;
?>;
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Packages</title>
    <link rel="stylesheet" href="packages2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
    *{
        font-family: 'Ubuntu', sans-serif;
    }
    body{
        margin: 0;
    }
    </style>
</head>
<body>
    <div class="myDiv">
        <h2>Select Your Package</h2>
        <p>You can choose any package from below list depending on your requirement.</p>
    </div>
    <div class="maindiv">
        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Signature Package</h3>
                <h1>Rs. 35000.00 </h1>
                <input type="hidden" name="package_name" value="signature-package">
                <input type="hidden" name="package_price" value="35000.00">
                <ul>
                    <li>Connections Limit: 60</li>
                    <li>Recommendations Limit: 80</li>
                    <li>Expiry: 12 months</li>
                </ul>
                <p id="pid">
                    Experience the signature package by shaadee.pk, this is the 'Best-Selling' offer.
                    You will gain access to basic and extensive search options for both International
                    and domestic Rishtas. Additionally, matchmaker offers a range of additional services that include
                    proposal shortlisting, WhatsApp sharing, and client applicaion management. Signature member can feature their
                    profile for maximum visibility on the website. This is the one of the best offers till now.
                    Subscribe and have hassle free Rishta service.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>

        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Premium Plus</h3>
                <h1>Rs. 27000.00 </h1>
                <input type="hidden" name="package_name" value="premium-package">
                <input type="hidden" name="package_price" value="27000.00">
                <ul>
                    <li>Connections Limit: 40</li>
                    <li>Recommendations Limit: 60</li>
                    <li>Expiry: 6 months</li>
                </ul>
                <p id="pid">
                    Discover a world of possibilities, we ensure quality International and Domestic Rishty that aligns with your preferences. 
                    Benefit from the expertise of a personalized matchmaker who will assist you in finding suitable rishtas. 
                    As a Premium Plus member, you can also feature your profile for maximum visibility. 
                    Enjoy the privilege of viewing  details on a potential match's profile upon their permission. 
                    You have ample time to embark on your journey by choosing this amazing package.This is the one of the best offers till now.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>

        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Premium</h3>
                <h1>Rs. 17000.00 </h1>
                <input type="hidden" name="package_name" value="premium">
                <input type="hidden" name="package_price" value="17000.00">
                <ul>
                    <li>Connections Limit: 30</li>
                    <li>Recommendations Limit: 40</li>
                    <li>Expiry: 1 month</li>
                </ul>
                <p id="pid">
                    Our platform offers this package for Local Pakistani Rishty. Gain access to our comprehensive 
                    matchmaking services & enhance your prospects to get the perfect match. Our dedicated matchmaker 
                    will assist you in finding suitable rishtas tailored to your preferences. Increase your 
                    visibility by featuring your profile as a prominent member with an additional payment.
                    Respect for privacy is of paramount importance for us.This is the one of the best offers till now.
                    Subscribe and have hassle free Rishta service.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>

        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Standard</h3>
                <h1>Rs. 13500.00 </h1>
                <input type="hidden" name="package_name" value="standard">
                <input type="hidden" name="package_price" value="13500.00">
                <ul>
                    <li>Connections Limit: 10</li>
                    <li>Recommendations Limit: 20</li>
                    <li>Expiry: 15 days</li>
                </ul>
                <p id="pid">
                   
                    Explore the world of local Pakistani Rishty with our personalized matchmaking services. 
                    Enjoy the flexibility of two installments, with the first installment of 13,500 PKR per month.
                    You will have a recommendation Limit of 20 with 10 connections during the first installment. 
                    In the second installment, your recommendation limit of 40 with 30 connections.<br />
                    As a Premium Plus member, your profile is tagged and featured, maximizing your visibility within our community.
                    Enjoy the privilege of viewing  details on a potential match's profile upon their permission. 
                    Trust shaadee.pk, It facilitates your search for love and companionship.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>

        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Normal</h3>
                <h1>Rs. 8500.00 </h1>
                <input type="hidden" name="package_name" value="normal">
                <input type="hidden" name="package_price" value="8500.00">
                <ul>
                    <li>Connections Limit: 7</li>
                    <li>Recommendations Limit: 12</li>
                    <li>Expiry: 7 days</li>
                </ul>
                <p id="pid">
                    Explore the world of local Pakistani Rishty with our personalized matchmaking services. 
                    Enjoy the package with the 2 flexible installment plans: each installment is PKR 8,500 per month.
                    You will have 12 Rishta recommendations and 7 Rishta connections in the first installment. While
                    in the second installment, your recommendation limit increases to 30 and your connection limit will 
                    increase to 25.<br />
                    Our dedicated matchmaker will provide 
                    invaluable assistance in finding a suitable Rishta that meets your specific criteria. 
                     you have the option to feature your profile 
                     Trust us to facilitate your local Pakistani Rishta 
                    journey with professionalism and excellence.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>

        <form action="packageProcess.php" method="POST">
            <div class="myDiv2">
                <h3>Basic</h3>
                <h1>Rs. 4000.00 </h1>
                <input type="hidden" name="package_name" value="basic">
                <input type="hidden" name="package_price" value="4000.00">
                <ul>
                    <li>Connections Limit: 20</li>
                    <li>Recommendations Limit: 30</li>
                    <li>Expiry: 1 day</li>
                </ul>
                <p id="pid">
                    Enjoy our “Basic package “which is a self-service plan to search for your partner
                    based on your preferences. In this plan, the choice of matches is limited to those candidates 
                    only who also have subscribed to the “Basic package”. The validity period for this package is 
                    4 months. Have a happy Basic package; explore and connect with potential partners at your
                    own will and dedicated time.Enjoy the privilege of viewing  details on a potential match's profile upon
                     their permission.Trust shaadee.pk, It facilitates your search for love and companionship. This is the one of the best offers till now. Signature member can feature their
                    profile . Subscribe and have hassle free Rishta service.
                </p>
                <button type="submit" <?php echo $hasActivePackage ? 'disabled' : ''; ?> class="disabled-button">Buy Now</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php 
  include("footer.php");
?>