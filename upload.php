<?php
  $fullname = $_POST['fullname'];
  $year = $_POST['year'];
  $section = $_POST['section'];
  $amount = $_POST['amount'];
  $quantity = $_POST['quantity'];
  $student_number = $_POST['student_number'];
  $product = $_POST['product'];
  $time = $_POST['time'];

  // Connect to the database
  $conn = mysqli_connect('localhost', 'root', '', 'posbooth');

  // Check for a connection error
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if($product == 'Solo') {
    $prodid == 1;
  }
  else if($product == 'Portrait') {
    $prodid == 2;
  }
  else if($product == 'Landscape') {
    $prodid == 3;
  }

  $sql = "SELECT prodid from invoice where product='$product'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $prodid = $row['prodid'];
  

  // Insert the data into the database"
  $sql = "INSERT INTO product set fullname='$fullname', year='$year', section='$section', amount='$amount', quantity='$quantity', student_number='$student_number', time='$time', prodid='$prodid'";


  if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Successfully added!";
    $_SESSION['alert_type'] = "success";
    header("Location: input.php");
  } else {
    $_SESSION['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION['alert_type'] = "danger";
    header("Location: input.php");
  }

  mysqli_close($conn);

  header('input.php');
?>
