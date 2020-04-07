<?php require('layout/header.php'); ?>

<?php require('db.php'); ?>

<?php

$sql = 'SELECT * FROM records ORDER BY created_at DESC';

$records = [];
if($connect->query($sql)) {
  $records = $connect->query($sql);
} 

?>

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
    <?php foreach($records as $index => $record): ?>
      <tr>
        <th scope="row"><?php echo $index+1; ?></th>
        <td><?php echo $record['first_name']; ?></td>
        <td><?php echo $record['last_name']; ?></td>
        <td><?php echo $record['updated_at']; ?></td>
        <td>
          <a href="#" class="btn btn-warning">Update</a>
          <a href="delete.php?id=<?php echo $record['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
<?php require('layout/footer.php'); ?>