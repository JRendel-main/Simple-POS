<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4>Enter Customer Details</h4>
        </div>
        <div class="card-body">
          <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="fullname">Fullname</label>
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter fullname" />
            </div>
            <div class="form-group">
              <label for="section">Year</label>
              <!-- create a dropdown -->
              <select name="section" id="section" class="form-control">
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
              </select>
            </div>
            <!-- create for section -->
            <div class="form-group">
              <label for="section">Section</label>
              <!-- create a dropdown -->
              <select name="section" id="section" class="form-control">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
              </select>
            <div class="form-group">
              <label for="payment">Payment</label>
              <input type="text" name="payment" id="payment" class="form-control" placeholder="Enter payment" />
            </div>
            <div class="form-group">
              <label for="amount">Amount</label>
              <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter amount" />
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" id="image" class="form-control" />
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>

