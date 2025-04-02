<?php
//login.php
include("SQLConnect.php");

if(isset($_POST['btn_login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pwd'];
    
    // Check if the student exists and get their password
    $query = mysqli_query($con, "SELECT stud_ID, password FROM tbl_students WHERE stud_ID='$username' AND status='Active'") 
             or die(mysqli_error($con));
    
    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        
        // Check if the password matches
        if($row['password'] == $password) { // In a real app, use password_verify() for hashed passwords
            // Start a session to keep track of the logged-in user
            session_start();
            $_SESSION['stud_ID'] = $row['stud_ID'];
            
            // Redirect to index.php after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='login_form.php';</script>";
        }
    } else {
        echo "<script>alert('Student ID not found or account inactive!'); window.location.href='login_form.php';</script>";
    }
} else {
    // If someone tries to access this page directly without submitting the form
    header("Location: login_form.php");
    exit();
}
?>