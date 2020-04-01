<?php 

require('layout/header.php'); 
require('db.php');

?>


<?php 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$date = date("Y-m-d H:i:s");

	if(isset($firstName) && isset($lastName)) {
		
		$sql = "INSERT INTO records(first_name, last_name, created_at, updated_at) VALUES('".$firstName."', '".$lastName."', '". $date ."', '". $date ."')";

		if($connect->query($sql)) {
			// Redirect to home
			header('Location: index.php');
		} 
	}
?>

<div class="row">
	<div class="col-md-8">
		<h1 class="my-4">Create Record</h1>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		  <div class="form-group">
		    <label for="firstName">First Name</label>
		    <input type="text" name="firstName" class="form-control" />
		  </div>
		  <div class="form-group">
		    <label for="lastName">Last Name</label>
		    <input type="text" name="lastName" class="form-control" />
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>


<?php require('layout/footer.php'); ?>