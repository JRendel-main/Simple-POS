<?php
session_start();

include('includes/header.php'); 
include('includes/navbar.php'); 

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
?>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="row">
        <div class="col-6">
          <form action="upload.php" method="post">
            <div class="form-group">
              <label for="fullname">Full Name:</label>
              <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
              <label for="year">Year:</label>
              <select class="form-control" id="year" name="year" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="section">Section:</label>
              <select class="form-control" id="section" name="section" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
              </select>
            </div>
            <div class="form-group">
              <label for="amount">Amount:</label>
              <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="text" class="form-control" id="quantity" name="quantity" required>
            </div>
            </div>
            <div class="col-6">
            <div class="form-group">
              <label for="student_number">Student Number:</label>
              <input type="text" class="form-control" id="student_number" name="student_number" required>
            </div>
            <div class="form-group">
              <label for="product">Product:</label>
              <select class="form-control" id="product" name="product" required>
                <option value="Landscape">Landscape</option>
                <option value="Portrait">Portrait</option>
                <option value="Solo">Solo</option>
              </select>
            </div>
            <div class="form-group">
              <label for="time">Time:</label>
              <input type="text" class="form-control" id="time" name="time" value="<?php echo date("Y-m-d H:i:s"); ?>" readonly>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" id="image" class="form-control" />
            </div>
            <div class="form-group">
                <label for="submit">Submit</label>
                <button type="submit" id='submit' class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        document.getElementById("student_number").value = "SUM" + document.getElementById("student_number").value;
    </script>
    <?php include('includes/footer.php'); ?>
