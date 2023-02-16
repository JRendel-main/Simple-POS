<?php
session_start();

include('includes/conn.php'); 

// Check if customer id is set in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete customer from the database
    $query = "DELETE FROM product WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        // Set success message
        $_SESSION['message'] = "Customer deleted successfully";
        $_SESSION['alert_type'] = "success";
    } else {
        // Set error message
        $_SESSION['message'] = "Error deleting customer: " . mysqli_error($conn);
        $_SESSION['alert_type'] = "danger";
    }
}

// Redirect to customers page
header("location: customer.php");
exit;
?>