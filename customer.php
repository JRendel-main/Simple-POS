<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/conn.php');
?>
<div class="container mt-5">
    <div class="text-center"><h1>Customer Details</h1></div>
    <table class="table">
  <thead>
    <tr>
      <th>Ref ID</th>
      <th>Fullname</th>
      <th>Year - Section</th>
      <th>Amount</th>
      <th>Paid</th>
      <th>Student Number</th>
      <th>Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['year']; ?> - <?php echo $row['section']; ?></td>
      <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['student_number']; ?></td>
        <td><?php echo $row['time']; ?></td>
      <td>
        <a href="edit_customer.php?id=<?php echo $row['sqid']; ?>" class="btn btn-primary">Edit</a>
        <a href="delete_customer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

</div>