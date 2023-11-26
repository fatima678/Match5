function validateForm() {
    console.log("validateForm function called"); 
    var password = document.getElementById("candidatePass").value;
    var confirmPassword = document.getElementById("CandidateconfirmPass").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}