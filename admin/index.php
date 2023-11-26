<?php 
  include("header.php");
  include("connection.php");

  $sql = "SELECT `c_id`,`name`, `gender`,`profile_img`,`marital_status`, `city`  FROM `candidate` WHERE 1";
  $result = $conn->query($sql);

  // Check if the user is logged in
  if (isset($_SESSION['c_id'])) {
      $c_id = $_SESSION['c_id'];
      
      // Check if there are payment details for the logged-in user with payment_status as 'paid'
      $sqlCheckPackage = "SELECT * FROM payment_detail WHERE c_id = $c_id AND payment_status = 'paid';";
      $resultCheckPackage = $conn->query($sqlCheckPackage);
      $hasActivePackage = $resultCheckPackage->num_rows > 0;
  } else {
      // If the user is not logged in, assume no active package
      $hasActivePackage = false;
  }
?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="index.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

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
    .btn.disabled {
      background-color: gray; /* Change the background color to gray */
      color: white; /* Change the text color to white */
      cursor: not-allowed; /* Change the cursor to indicate it's not clickable */
    }
    .buy_package{
      margin-top: 5px;
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

            echo '<div class="card">';
            echo '<img src="' . $row['profile_img'] .'" alt="Avatar" style="width:100%; height:220px;">';
            echo '<div class="container">';
            echo '<h4>' . $row['name'] .'</h4>'; 
            echo '<p class="gender">' . $row['gender'] .'</p>';
            echo '<p>'.$row['marital_status'].'</p>';
            echo '<p>'.$row['city'].' </p>';
            echo '</div>';

            // Check if the user is logged in and has an active package
            if (isset($_SESSION['c_id']) && $hasActivePackage) {
                echo '<form action="profile_detail.php" method="get">';
                echo '<input type="hidden" name="c_id" value="' . $c_id . '">';
                echo '<button class="btn" type="submit">View Profile</button>';
                echo '</form>';
            } else {
                echo '<form action="profile_detail.php" method="get">';
                echo '<input type="hidden" name="c_id" value="' . $c_id . '">';
                echo '<button class="btn disabled" type="submit" disabled>View Profile</button>';
                echo '</form>';

                // Add the "Buy Package" button here
                echo '<form class="buy_package" action="packages.php" method="get">';
                echo '<input type="hidden" name="c_id" value="' . $c_id . '">';
                echo '<button class="btn buy-package" type="submit">Buy Package</button>';
                echo '</form>';
            }

            echo '</div>';
        }//while  
    }//if
    ?>
  </div>      


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
  <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 100%; height: 400px;"></iframe><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}</style><style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:100%;}</style><a href="https://www.eireportingonline.com">ei reporting online</a></div></div>

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

<?php 
  include("footer.php");
?>