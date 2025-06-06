<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/favicon.svg" />
		<title>Index - Admin</title>
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

					<div class="row gutters">
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/appointment.svg" alt="Quality Dashboards" />
								<p>Appointments</p>
								<h2>49</h2>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/patient.svg" alt="Best Dashboards" />
								<p>Total Users</p>
								<h2>60</h2>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/operation.svg" alt="Best Dashboards" />
								<p>Operations</p>
								<h2>21</h2>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/doctor.svg" alt="Top Dashboards" />
								<p>Total Drivers</p>
								<h2>75</h2>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/staff.svg" alt="Top Dashboards" />
								<p>Total Employees</p>
								<h2>253</h2>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-12">
							<div class="hospital-tiles">
								<img src="img/hospital/revenue.svg" alt="Top Dashboards" />
								<p>Earnings</p>
								<h2>$900k</h2>
							</div>
						</div>
					</div>
					<div class="row gutters">
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Drivers</div>
								</div>
								<div class="card-body">
									<div id="hospital-line-column-graph"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Drivers</div>
								</div>
								<div class="card-body">
									<div class="top-doctors-container">
										<div class="top-doctor">
											<img src="img/user2.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Clive Williams</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-blue" role="progressbar" style="width: 87%" aria-valuenow="87"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #1</div>
														<div class="right">9,800 Ratings</div>
													</div>
												</div>
											</div>
										</div>
										<div class="top-doctor">
											<img src="img/user3.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Levsmia</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-blue" role="progressbar" style="width: 65%" aria-valuenow="65"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #2</div>
														<div class="right">7,500 Ratings</div>
													</div>
												</div>
											</div>
										</div>
										<div class="top-doctor">
											<img src="img/user14.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Emma George</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-pink" role="progressbar" style="width: 42%" aria-valuenow="42"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #3</div>
														<div class="right">4,200 Ratings</div>
													</div>
												</div>
											</div>
										</div>
										<div class="top-doctor">
											<img src="img/user14.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Emma George</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-pink" role="progressbar" style="width: 42%" aria-valuenow="42"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #3</div>
														<div class="right">4,200 Ratings</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
		<script src="vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
		<script src="vendor/apex/examples/bar/hospital-patients-by-age.js"></script>
		<script src="vendor/rating/raty.js"></script>
		<script src="vendor/rating/raty-custom.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>