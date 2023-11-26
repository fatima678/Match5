<?php 
  include("header.php");
  include("connection.php");

  $sql = "SELECT `c_id`,`name`, `gender`,`profile_img`,`marital_status`, `city`  FROM `candidate` WHERE 1";
  $result = $conn->query($sql);

  // if (!isset($_SESSION['c_id'])) {
  //         header("Location: candidate_login.php");
  //         exit();
  //     }

  //     $c_id = $_SESSION['c_id'];

  //     // Check if the user has an active "Paid" package
  //     $sqlCheckPackage = "SELECT * FROM payment_detail WHERE c_id = $c_id AND payment_status = 'unpaid'";
  //     $resultCheckPackage = $conn->query($sqlCheckPackage);

  //     $hasNotActivePackage = $resultCheckPackage->num_rows > 0;

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="index.js">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Home</title>

  <style type="text/css">
    .review{
      padding:20px;
    }
    .box-container{
      display: flex;
      flex-wrap: wrap;
    }
    .btn a{
       color: white;
        text-decoration: none;
    }
    
    .card{
/*      background-color: green;*/
      border-radius: 20px;
      padding: 10px;
      width: 15rem;

    }
    img{
      border-radius: 10px;
    }
  </style>

</head>
<body>
  
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/image1.jpg" style="width:100%;height: 550px; filter: brightness(50%);">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/image2.jpg" style="width:100%;height: 550px;filter: brightness(50%);">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/image3.jpg" style="width:100%; height: 550px;filter: brightness(50%);">
      <div class="text">Caption Three</div>
    </div>

  </div>

  <br>

  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

  <div class=form-container>
    <form>
      <!-- <div class="input-fields">
        <label>Marital status</label>
        <Select id="marital-status">
           <option>Divorced</option>
           <option>Married</option>
           <option>Seperated</option>
           <option>Single</option>
           <option>Widowed</option>
        </Select>
      </div> -->
      <div class="input-fields">
        <label>Gender</label>
         <Select id="Male">
            <option>female</option>
            <option>male</option>
         </Select>
      </div>
      <!-- <div class="input-fields">
        <label >Age From</label>
         <Select id="age-from">
          <option>18</option>
            <option>18</option>
            <option>19</option>
            <option>19</option>
            <option>20</option>
            <option>20</option>
            <option>21</option>
            <option>21</option>
            <option>22</option>
            <option>22</option>
            <option>23</option>
            <option>23</option>
            <option>24</option>
            <option>24</option>
            <option>25</option>
            <option>25</option>
            <option>26</option>
            <option>26</option>
            <option>27</option>
            <option>27</option>
            <option>28</option>
            <option>28</option>
            <option>29</option>
            <option>29</option>
            <option>30</option>
            <option>30</option>
            <option>31</option>
            <option>31</option>
            <option>32</option>
            <option>32</option>
            <option>33</option>
            <option>33</option>
            <option>35</option>
            <option>35</option>
            <option>36</option>
            <option>36</option>
            <option>37</option>
            <option>37</option>
            <option>38</option>
            <option>38</option>
            <option>39</option>
            <option>39</option>
            <option>40</option>
            <option>40</option>
        </Select>
      </div>
      <div class="input-fields">
        <label>Age To</label>
        <Select id="age-to">
          <option>18</option>
            <option>18</option>
            <option>19</option>
            <option>19</option>
            <option>20</option>
            <option>20</option>
            <option>21</option>
            <option>21</option>
            <option>22</option>
            <option>22</option>
            <option>23</option>
            <option>23</option>
            <option>24</option>
            <option>24</option>
            <option>25</option>
            <option>25</option>
            <option>26</option>
            <option>26</option>
            <option>27</option>
            <option>27</option>
            <option>28</option>
            <option>28</option>
            <option>29</option>
            <option>29</option>
            <option>30</option>
            <option>30</option>
            <option>31</option>
            <option>31</option>
            <option>32</option>
            <option>32</option>
            <option>33</option>
            <option>33</option>
            <option>35</option>
            <option>35</option>
            <option>36</option>
            <option>36</option>
            <option>37</option>
            <option>37</option>
            <option>38</option>
            <option>38</option>
            <option>39</option>
            <option>39</option>
            <option>40</option>
            <option>40</option>
        </Select>
      </div> -->
      <div class="input-fields"> 
        <button type="button" id="search-button">Search</button>
      </div>
    </form>
  </div>
  <h2 class="Profile-head">Feature Profiles</h2>
  

<div class="container-card" id="container-card">

<?php  
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $c_id = $row['c_id'];

            $sqlCheckPackage = "SELECT * FROM payment_detail WHERE c_id = $c_id AND payment_status = 'unpaid'";
            $resultCheckPackage = $conn->query($sqlCheckPackage);
            $hasNotActivePackage = $resultCheckPackage->num_rows > 0;

            echo '<div class="card">';
                echo '<img src="' . $row['profile_img'] .'" alt="Avatar" style="width:100%; height:220px;">';
                echo '<div class="container">';
                  echo '<h4>' . $row['name'] .'</h4>'; 
                  echo '<p class="gender">' . $row['gender'] .'</p>';
                  echo '<p>'.$row['marital_status'].'</p>';
                  echo '<p>'.$row['city'].' </p>';
                echo '</div>';
                echo '<form action="profile_detail.php" method="get">';
                echo '<input type="hidden" name="c_id" value="' . $c_id . '">';
                echo '<button class="btn" type="submit" ' . ($hasNotActivePackage ? 'disabled' : '') . '>View Profile</button>';
                echo '</form>';
                // echo '<button class="btn" ><a href="profile_detail.php?c_id=' . $row['c_id'] . '">View Profile</a></button>';
            echo '</div>';
        }//while  
    }//if
?>

</div>
       <!--  <div class="container-card" id="container-card">
            <div class="card">
               <img src="images/image1.JPg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4><b><?php echo  $name; ?></b></h4> 
                  <p>Status</p>
                  <p>City </p>
                </div>
                <button class="btn ">View Profile</button>
            </div>
        </div> -->
<!-- Inside the while loop where you display user profiles -->


  <h2 class="blogs-head">Latest Blogs</h2>
  <div class="blogs">
    <div class="blog-card">
      <h2>A good wife is a good mother, and a good husband is an excellent father-Be good</h2>
      <span>6th Jun, 2022 3:42 pm</span>
       <p> Marcus Aurelius was the famous and one of the most potent emperors in Roman History. He was also a stoic philosopher.  “Just do the right thing, and the rest doesn’t matter”. He conveyed one of the most important philosophies of life in one sentence. The post A good wife is a good mother, and a good husband is an excellent father-Be good appeared first on <span class="red">Matchmaking.pk Blog</span></p>
    </div>
     <div class="blog-card">
      <h2>It is not a lack of love, but a lack of friendship</h2>
      <span>11th Apr, 2022 12:02 pm</span>
        <p>It is not a lack of love, but a lack of friendship that makes unhappy marriages. It is not a lack of love but a lack of friendship that makes unhappy marriages. The unabashed declaration is that love is the central theme on which the universe is designed and keeps its stature stable and erected.The post It is not a lack of love, but a lack of friendship appeared first on     <span class="red">Matchmaking.pk Blog</span></p>
    </div>
    <div class="blog-card">
      <h2>Ap ki soch vs Society ki soch</h2>
          <span>4th Apr, 2022 2:25 pm</span>
          <p>Social patterns are stringent. On has to follow anyway. There is no other way to live but in a gregarious manner because humans can’t survive in desolation. Social laws are good because they keep checking on the moral duties of a person. So the question arises here to what extent one should follow the norm? The post Ap ki soch vs Society ki soch appeared first on <span class="red">Matchmaking.pk Blog</span>.</p>
    </div>
  </div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script>
  if (window.jQuery) {
    console.log("jQuery is loaded.");
  } else {
    console.log("jQuery is not loaded.");
  }
</script>
<script>
 $(document).ready(function() {
  $("#search-button").click(function() {
    var gender = $("#Male").val();
    console.log("Selected Gender:", gender);
    $(".card").each(function() {
      var cardGender = $(this).find(".gender").text().toLowerCase();
      console.log("Card Gender:", cardGender);
      // Modify the toggling logic to show/hide the cards correctly
      var showCard = (gender === "Any" || cardGender === gender);
      $(this).toggle(showCard);
    });
  });
});
</script>
<script>
$(document).ready(function() {
  // Loop through each card
  $(".card").each(function() {
    var hasNotActivePackage = $(this).data("hasNotActivePackage");

    // Disable the button if hasNotActivePackage is true
    if (hasNotActivePackage) {
      $(this).find(".btn a").prop("disabled", true);
    }
  });
});
</script>

</body>
</html>
  