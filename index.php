<?php include('layout/header.php'); ?>

<div class="row my-4">
  <div class="col-md-10">
    <h1>Records</h1>
  </div>
  <div class="col-md-2">
    <a href="create.php" class="btn btn-primary mt-2">Create</a>
  </div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>Doe</td>
      <td>March 31, 2020</td>
      <td>
        <a href="#" class="btn btn-warning">Update</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
  
<?php require('layout/footer.php'); ?>