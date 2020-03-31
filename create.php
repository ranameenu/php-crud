<?php include('layout/header.php'); ?>


<div class="row">
	<div class="col-md-8">
		<h1 class="my-4">Create Record</h1>

		<form>
		  <div class="form-group">
		    <label for="firstName">First Name</label>
		    <input type="text" class="form-control" />
		  </div>
		  <div class="form-group">
		    <label for="lastName">Last Name</label>
		    <input type="text" class="form-control" />
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>


<?php require('layout/footer.php'); ?>