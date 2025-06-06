<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/favicon.svg" />
		<title>Users Details - Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="fonts/style.css">
		<link rel="stylesheet" href="css/main.min.css">
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
	</head>
	<body>

        <?php include('includes/topheader.php'); ?>

		<div class="container-fluid">

            <?php include('includes/header.php'); ?>

			<div class="main-container">

                <?php include('includes/breadcrumb.php'); ?>
				
				<div class="content-wrapper">

					<div class="row gutters">
						<div class="col-sm-12">

							<div class="table-container">
								<h5 class="table-title">Users Details</h5>
								
								<div class="table-responsive">
									<table id="basicExample" class="table m-0">
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
                                                <th>Mobile</th>
                                                <th>DOB</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Time</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Test</td>
												<td>Testing@gmail.com</td>
												<td>8547854785</td>
												<td>21/02/2005</td>
												<td>Delhi</td>
												<td>Delhi</td>
												<td>124510</td>
												<td><span class="badge badge-success">Active</span></td>
												<td>21/02/2005</td>
												<td>12:00:01 PM</td>
											</tr>
                                            <tr>
												<td>Test</td>
												<td>Testing@gmail.com</td>
												<td>8547854785</td>
												<td>21/02/2005</td>
												<td>Delhi</td>
												<td>Delhi</td>
												<td>124510</td>
												<td><span class="badge badge-danger">Deactive</span></td>
												<td>21/02/2005</td>
												<td>12:00:01 PM</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>