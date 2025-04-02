<?php
//delete.php
include("./SQLConnect.php");

// Update status to 'Deleted' - or use DELETE statement if you want to actually remove the record
$query = mysqli_query($con, "UPDATE tbl_students SET status='Deleted' WHERE stud_ID ='".$_GET['id']."'") 
          or die(mysqli_error($con));

// For AJAX requests, just return success status
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if($query) {
        echo "success";
    } else {
        echo "error";
    }
    exit;
}

// For direct access (non-AJAX), show message and back button
if(!$query) {
    echo "Record not deleted!";
} else {
    echo "Record successfully deleted";
}

echo "<a href='../index.php'><input type='button' value='Back'/></a>";
?>