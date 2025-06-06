<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.svg" />
	<title>Add Drivers - Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/style.css">
	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<?php include('includes/topheader.php'); ?>

	<div class="container-fluid">

		<?php include('includes/header.php'); ?>

		<div class="main-container">

			<?php include('includes/breadcrumb.php'); ?>

			<div class="content-wrapper">
				<div class="row gutters justify-content-center">
					<div class="col-lg-12">
						<form method="post">
							<div class="card m-0">
								<div class="card-header">
									<div class="card-title">Add Users</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group">
												<label>Name :</label>
												<input type="text" class="form-control" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Email Id :</label>
												<input type="email" class="form-control" name="email" placeholder="Email Id" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Mobile No. :</label>
												<input type="text" class="form-control" name="mobile" placeholder="Mobile No." required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>DOB :</label>
												<input type="date" class="form-control" name="dob" placeholder="DOB" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Password :</label>
												<input type="password" class="form-control" name="password" placeholder="Password" required="">
											</div>
										</div>
                                        <div class="col-lg-4">
											<div class="form-group">
												<label>Address :</label>
												<input type="text" class="form-control" name="address" placeholder="Address" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>State :</label>
												<input type="text" class="form-control" name="state" placeholder="State" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>City :</label>
												<input type="text" class="form-control" name="city" placeholder="City" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Pincode :</label>
												<input type="text" class="form-control" name="pincode" placeholder="Pincode" required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Driving Licence No. :</label>
												<input type="text" class="form-control" name="licence_number" placeholder="Driving Licence No." required="">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label>Aadhaar / Pan Card :</label>
												<input type="text" class="form-control" name="aadhaar_pan" placeholder="Aadhaar / Pan Card" required="">
											</div>
										</div>
									</div>
									<button type="button" id="submit" name="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/main.js"></script>

</body>

</html>