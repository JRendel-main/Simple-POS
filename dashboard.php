<?php
include('includes/header.php');
include('includes/navbar.php');
include('conn.php');

// check if there's a message stored in the session
if (isset($_SESSION['message']) && isset($_SESSION['alert_type'])) {
    // show the message
    echo "<div class='alert alert-" . $_SESSION['alert_type'] . " mt-5 d-flex justify-content-center'>
            " . $_SESSION['message'] . "
          </div>";
    
    // unset the message
    unset($_SESSION['message']);
    unset($_SESSION['alert_type']);
}

$product1_sales = 0;
$product1_quantity = 0;
$product2_sales = 0;
$product2_quantity = 0;
$product3_sales = 0;
$product3_quantity = 0;



$sql = "SELECT SUM(amount) AS total_sales, SUM(quantity) AS total_quantity FROM product WHERE prodid = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$product1_sales = $row['total_sales'];
$product1_quantity = $row['total_quantity'];

$sql = "SELECT SUM(amount) AS total_sales, SUM(quantity) AS total_quantity FROM product WHERE prodid = 2";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$product2_sales = $row['total_sales'];
$product2_quantity = $row['total_quantity'];

$sql = "SELECT SUM(amount) AS total_sales, SUM(quantity) AS total_quantity FROM product WHERE prodid = 3";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$product3_sales = $row['total_sales'];
$product3_quantity = $row['total_quantity'];


$overall_sales = $product1_sales + $product2_sales + $product3_sales;
$overall_quantity = $product1_quantity + $product2_quantity + $product3_sales;

?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Solo
        </div>
        <div class="card-body">
          <h5 class="card-title">Total Sales: <?php echo $product1_sales; ?></h5>
          <p class="card-text">Total Quantity Sold: <?php echo $product1_quantity; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Portrait
        </div>
        <div class="card-body">
          <h5 class="card-title">Total Sales: <?php echo $product2_sales; ?></h5>
          <p class="card-text">Total Quantity Sold: <?php echo $product2_quantity; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Landscape
        </div>
        <div class="card-body">
          <h5 class="card-title">Total Sales: <?php echo $product3_sales; ?></h5>
          <p class="card-text">Total Quantity Sold: <?php echo $product3_quantity; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Overall Sales
        </div>
        <div class="card-body">
          <h5 class="card-title">Total Sales: <?php echo $overall_sales; ?></h5>
          <p class="card-text">Total Quantity Sold: <?php echo $overall_quantity; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
