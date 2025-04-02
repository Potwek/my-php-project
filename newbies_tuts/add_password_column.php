<?php
include("SQLConnect.php");

// Add password column to tbl_students if it doesn't exist
$check_column = mysqli_query($con, "SHOW COLUMNS FROM tbl_students LIKE 'password'");
if(mysqli_num_rows($check_column) == 0) {
    $add_column = mysqli_query($con, "ALTER TABLE tbl_students ADD COLUMN password VARCHAR(255)");
    if($add_column) {
        echo "Password column added successfully!";
    } else {
        echo "Error adding password column: " . mysqli_error($con);
    }
} else {
    echo "Password column already exists.";
}
?>