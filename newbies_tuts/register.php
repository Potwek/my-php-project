<?php
//register.php
//Inserts new student record to tbl_students table in newbies_db database.
include("./SQLConnect.php");

if(isset($_POST['btn_register'])) {
    // Extract form data
    $stud_ID = $_POST['stud_ID'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $MI = $_POST['MI'];
    $course = $_POST['course'];
    $yearLevel = $_POST['yearLevel'];
    $password = $_POST['password']; // In a real application, this should be hashed
    
    // Check if student ID already exists
    $check_query = mysqli_query($con, "SELECT stud_ID FROM tbl_students WHERE stud_ID='$stud_ID'") or die(mysqli_error($con));
    
    if(mysqli_num_rows($check_query) > 0) {
        echo "<script>alert('Student ID already exists!'); window.location.href='register_form.php';</script>";
        exit();
    }
    
    // Insert new student with password
    $query = mysqli_query($con, "INSERT INTO tbl_students (stud_ID, lastName, firstName, MI, course, yearLevel, status, password) 
                              VALUES ('$stud_ID', '$lastName', '$firstName', '$MI', '$course', '$yearLevel', 'Active', '$password')") 
                              or die(mysqli_error($con));
    
    if(!$query) {
        echo "<script>alert('Registration failed!'); window.location.href='register_form.php';</script>";
    } else {
        // Redirect to login page after successful registration
        echo "<script>alert('Registration successful! Please login.'); window.location.href='login_form.php';</script>";
    }
} else {
    // If someone tries to access this page directly without submitting the form
    header("Location: register_form.php");
    exit();
}
?>