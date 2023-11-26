<?php
include("header.php"); // Include your header file if needed
include("connection.php");

  if (!isset($_SESSION['c_id'])) {
    header("Location: candidate_login.php"); // Redirect if c_id is not set
    exit();
  }
// Get the c_id from the URL parameter
if (isset($_GET['c_id'])) {
    $c_id = $_GET['c_id'];
    
    // Fetch user details based on c_id
     // $sql = "SELECT * FROM academics a join candidate c on(a.c_id=c.c_id) where `c_id`=$c_id";
    // $sql="SELECT * FROM `candidate` WHERE `c_id` = $c_id";
    $sql = "SELECT c.*, e.matric_degree, e.intermediate_degree, e.bachelors_detail, e.masters_detail
            FROM candidate c
            LEFT JOIN academics e ON c.c_id = e.c_id
            WHERE c.c_id = $c_id";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        // Retrieve other fields as needed
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Detail</title>
    <link rel="stylesheet" type="text/css" href="profile_detail2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="profile-details">
      <div class="profile-image">
          <img src="<?php echo $row['profile_img']; ?>" alt="Profile Image" width="400">
          <h2><?php echo $row['name']; ?> <?php echo $row['caste']; ?></h2>
      </div>
      <div class="other-detail"> 
          <div class="candidate-detail">
            <h2>Candidate Detail</h2>
            <div class="detail">
              <Span>Name</Span>
              <p><?php echo $row['name']; ?></p>
            </div>
            <div class="detail">
              <span>Gender</span>
              <p><?php echo $row['gender']; ?></p>
            </div>
            <div class="detail">
              <span>Caste</span>
              <p><?php echo $row['caste']; ?></p>
            </div>
            <div class="detail">
              <span>City</span>
              <p><?php echo $row['city']; ?></p>
            </div>
            <div class="detail">
              <span>Marital-Status</span>
              <p><?php echo $row['marital_status']; ?></p>
            </div>
            <div class="detail">
              <span>Email</span>
              <p><?php echo $row['email']; ?></p>
            </div>
             <div class="detail">
              <span>Phone No</span>
              <p><?php echo $row['phone_no']; ?></p>
            </div>
            <div class="detail">
              <span>Occupation</span>
              <p><?php echo $row['occupation']; ?></p>
            </div>
            <div class="detail">
              <span>Monthly Income</span>
              <p><?php echo $row['monthly_income']; ?></p>
            </div>
            <div class="detail">
              <span>Age</span>
              <p><?php echo $row['age']; ?></p>
            </div>
            <div class="detail">
              <span>Height</span>
               <p><?php echo $row['height']; ?></p>
            </div>
          </div>

          <div class="education-detail">
            <h2>Education Detail</h2>
            <div class="detail">
              <span>Matric</span>
              <p><?php echo $row['matric_degree']; ?></p>
            </div>
            <div class="detail">
              <span>Intermediate</span>
               <p><?php echo $row['intermediate_degree']; ?></p>
            </div>
            <div class="detail">
              <span>Bachelors in</span>
              <p><?php echo $row['bachelors_detail']; ?></p>
            </div>
            <div class="detail">
              <span>Master's:</span>
              <p><?php echo $row['masters_detail']; ?></p>
            </div>  
          </div>
          <div class="family-detail">
            
          </div>
      </div>
        
        <!-- Display other fields as needed -->
    </div>
</body>
</html>

<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "No user ID provided.";
}
?>
<?php 
  include("footer.php");
?>