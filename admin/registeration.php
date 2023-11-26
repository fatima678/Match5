<?php 
  include("header.php");
  include("connection.php");

  $sql = "SELECT `name`, `gender`, `c_id` FROM `candidate` WHERE 1";
  $result = $conn->query($sql);

  if (!isset($_SESSION['c_id'])) {
    header("Location: candidate_login.php"); // Redirect if c_id is not set
    exit();
  }
?>;

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="registeration.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</hewad>
<body>
  <div class="container">
    <div class="image-container">
      <img src="images/image4.jpg" alt="Background Image">
      <div class="centered-content">
        <h1>MatchMaking</h1>
        <h2>Welcome to</h2>
        <p>Pakistan largest soulmate finder</p>
        <button><a href="candidate_login.php">Login</a></button>
      </div>
    </div>
    
    <div class="form-container">
      <form action="candidateProfileRegister.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>Profile Registration</legend>
        <!-- Personal Detail -->
        <h2>Personal Information</h2>
        <div class="peronal_detail">
          <div>
            <label for="profile_img">Profile Picture:</label>
            <input type="file" name="profile_img" id="profile_img" accept="image/*" required><br><br>
          </div>
          <div>
            <label for="name">Name<span> *</span></label>
            <input type="text" id="name" name="name" placeholder="enter your name" required="">
          </div>
          <div>
            <label for="email">Email<span> *</span></label>
            <input type="email" id="email" name="email" placeholder="email" required="">
          </div>
          <div>
            <label for="phone">Phone Number <span> *</span></label>
            <input type="tel" id="phone" name="phone" placeholder="enter your phone number" required="">
          </div>
           <div>
              <label for="religion">Religion <span> *</span></label>
              <select id="religion" name="religion" required="">
                <option value="select">select</option>
                <option value="islam">Islam</option>
                <option value="christian">Christian</option>
                <option value="Other">Other</option>
              </select>
          </div>

          <div>
              <label for="occupation">Occupation <span> *</span></label>
              <select name="occupation" required="">
                <option value="select">select</option>
                <option value="famer">Farmer</option>
                <option value="teacher">Teacher</option>
                <option value="doctor">Doctor</option>
                <option value="govt-job">Government Job</option>
                <option value="govt-job">Engineer</option>
                <option value="other">Other</option>
              </select>
          </div>

          <div>
            <label for="income">Monthly Income <span> *</span></label>
            <input type="number" id="income" name="monthly-income" placeholder="enter your income" required="">
          </div>

          <div>
            <label for="age">Age <span> *</span></label>
            <input type="number" id="age" name="age" placeholder="enter your age i.e 0-9" required="">
          </div>

          <div>
            <label for="Height">Height <span> *</span></label>
            <input type="text" id="height" name="height" placeholder="enter your height i.e 5.6'" required="">
          </div>

          <div>
              <label for="gender">Gender <span> *</span></label>
              <select id="gender" name="gender" required="">
                <option value="select">select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
          </div>

          <div>
              <label for="marital-status">Marital Status<span> *</span></label>
              <select name="marital-status" required="">
                <option value="select">select</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
              </select>
          </div>

          <div>
            <label for="caste">Caste </label>
            <input type="text" id="caste" name="caste" placeholder="enter your caste">
          </div>

          <div>
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="enter your city" required="">
          </div>

        </div>


        <!-- Family Detail -->

        <h2>Family Detail</h2>
        <div class="peronal_detail">
          <div>
            <label for="father-name">Father Name<span> *</span></label>
            <input type="text" id="father-name" name="father-name" placeholder="enter your father name" required="">
          </div>
          <div>
            <label for="mother-name">Mother Name <span> *</span></label>
            <input type="text" id="mother-name" name="mother-name" placeholder="enter your mother name" required="">
          </div>
          <div>
              <label for="father-occupation">Father's Occupation <span> *</span></label>
              <select name="father-occupation" required="">
                <option value="select">select</option>
                <option value="famer">Farmer</option>
                <option value="teacher">Teacher</option>
                <option value="doctor">Doctor</option>
                <option value="govt-job">Government Job</option>
                <option value="govt-job">Engineer</option>
                <option value="govt-job">Died</option>
                <option value="other">Other</option>
              </select>
          </div>
          <div>
            <label for="father-occupation">Mother's Occupation</label>
              <select name="mother-occupation"> 
                <option value="select">select</option>
                <option value="housewife">House Wife</option>
                <option value="housewife">Working</option>
                <option value="govt-job">Died</option>
                <option value="other">Other</option>
              </select>
          </div>
          <div>
            <label for="father-phone">Father's Phone</label>
            <input type="tel" id="father-phone" name="father-phone" placeholder="enter father's phone" required="">
          </div>
          <div>
            <label for="siblings">No. of Siblings<span> *</span></label>
            <input type="number" id="siblings" name="siblings" min="0" placeholder="no. of siblings" required="">
          </div>
          <div>
            <label for="married-persons">No. of Married Person<span> *</span></label>
            <input type="number" id="married-persons" name="married-persons" min="0" placeholder="no. of married persons" required="">
          </div>

        </div>

        <!-- Academics Detail -->

        <h2>Academics Detail</h2>
        <div class="peronal_detail">
          <div>
              <label for="education-detail">Matric</label>
              <select name="matric-degree">
                <option value="select">select</option>
                <option value="science">science</option>
                <option value="arts">arts</option>
                <option value="other">Other</option>
              </select>
          </div>
          <div>
              <label for="education-detail">Intermediate</label>
              <select name="inter-degree">
                <option value="select">select</option>
                <option value="medical">medical</option>
                <option value="engineering">engineering</option>
                <option value="ics">ics</option>
                <option value="other">Other</option>
              </select>
          </div>
          <div>
              <label for="bachelors-detail">Bachelor's</label>
              <input type="text" id="bachelors" name="bachelors" placeholder="enter your bachelors detail">
          </div>
          <div>
              <label for="masters-detail">Master's</label>
              <input type="text" id="masters" name="masters" placeholder="enter your masters Detail">
          </div>
        </div>

        <!-- House Detail -->
        <h2>House Detail</h2>
        <div class="peronal_detail">
          <div>
              <label for="house-size">House Size</label>
              <input type="text" id="house-size" name="house-size" placeholder=" size of house i.e 5 marla,10 marla">
          </div>
          <div>
              <label for="floors">Total Floors</label>
              <input type="number" id="floors" name="floors" placeholder=" no. of floors i.e 0-9 ">
          </div>
          <div>
            <label for="owner">House Owner</label>
              <select name="owner">
                <option value="select">select</option>
                <option value="medical">self own</option>
                <option value="engineering">on rent</option>
              </select>
          </div>
          <div>
            <label for="city">City<span> *</span></label>
              <select name="city" required="">
                <option value="select">select</option>
                <option>gujranwala</option>
                <option>lahore</option>
                <option>islamabad</option>
                <option>gujrat</option>
              </select>
          </div>
          <div>
              <label for="address">Location <span> *</span></label>
              <textarea type="text" id="address" name="address" placeholder="enter your address" rows="4" required=""></textarea>
          </div>
        </div>
        <button type="submit">Submit</button>
        <!-- <button type="submit"><a href="index.php">Register Profile</a></button> -->
        </fieldset>
      </form> 
       
    </div>
  </div>
</body>
</html>
<?php 
  include("footer.php");
 ?>