<?php
include("connection.php");

session_start();
if (!isset($_SESSION['c_id'])) {
    header("Location: candidate_login.php"); // Redirect if c_id is not set
    exit();
}

$c_id = $_SESSION['c_id'];
echo "$c_id";

//personal detail
$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone'];
$religion = $_POST['religion'];
$occupation = $_POST['occupation'];

$monthly_income = $_POST['monthly-income'];
$age = $_POST['age'];
$height = $_POST['height'];
$gender = $_POST['gender'];
$marital_status = $_POST['marital-status'];
$caste = $_POST['caste']; 
$city = $_POST['city'];

// family data 
$father_name = $_POST['father-name'];
$mother_name = $_POST['mother-name'];
$father_occupation = $_POST['father-occupation'];
$mother_occupation = $_POST['mother-occupation'];
$father_phone = $_POST['father-phone'];
$no_of_siblings = $_POST['siblings'];
$no_of_married_persons = $_POST['married-persons'];

// Academic Detail from front-end
$matric_degree = $_POST['matric-degree'];
$intermediate_degree = $_POST['inter-degree'];
$bachelors_detail = $_POST['bachelors'];
$masters_detail = $_POST['masters'];

// House Detail
$house_size = $_POST['house-size'];
$total_floors = $_POST['floors'];
$owner = $_POST['owner'];
$city = $_POST['city'];
$address = $_POST['address'];


if (isset($_FILES['profile_img']) && is_uploaded_file($_FILES['profile_img']['tmp_name'])) {
    $profilePicName = $_FILES['profile_img']['name'];
    $profilePicTemp = $_FILES['profile_img']['tmp_name'];
    $profilePicPath = "uploads/" . $profilePicName;

    move_uploaded_file($profilePicTemp, $profilePicPath);
} else {
    echo "Profile picture upload failed.";
    exit();
}

$sqlCandidate = "INSERT INTO `candidate`(`name`, `email`, `phone_no`, `religion`, `occupation`, `monthly_income`, `age`, `height`, `gender`, `marital_status`, `caste`, `profile_img`, `c_id`,`city`) VALUES ('$name', '$email','$phone_no', '$religion','$occupation','$monthly_income','$age','$height,'$gender','$marital_status','$caste',' $profilePicPath',$c_id,'$city')";

if ($conn->query($sqlCandidate) === TRUE) {
	
    $sqlFamilyDetail = "INSERT INTO `familydetail`(`c_id`, `father_name`, `mother_name`, `father_occupation`,`mother_occupation`, `father_phone`, `siblings`, `married_persons`) VALUES ($c_id,'$father_name','$mother_name','$father_occupation','$mother_occupation','$father_phone','$no_of_siblings','$no_of_married_persons')";

	if ($conn->query($sqlFamilyDetail) === TRUE) {

        $sqlAcademics = "INSERT INTO `academics`(`c_id`, `matric_degree`, `intermediate_degree`, `bachelors_detail`,`masters_detail`) VALUES ($c_id,'$matric_degree','$intermediate_degree','$bachelors_detail','$masters_detail')";

        if ($conn->query($sqlAcademics) === TRUE) {

            $sqlHouseDetail = "INSERT INTO `house_detail`(`c_id`, `size`, `total_floors`, `house_owner`, `city`, `location`) VALUES ($c_id,'$house_size','$total_floors','$owner','$city','$address')";

            if ($conn->query($sqlHouseDetail) === TRUE) {
                echo "Data inserted successfully.";
                header("Location: index.php"); // Redirect to some success page
            }//if
        }//if
	}//if
}//if
else {
    echo "Error: " . $sqlCandidate . "<br>" . $conn->error;
}//else

$conn->close();
?>
