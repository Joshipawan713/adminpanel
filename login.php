<?php 
// session_start();

// require_once 'AuthinectionAdmin.php';

// $crud = new AuthAdmin();

// if (isset($_POST['submit'])) {
// $email = $_POST['email'];
// $password = $_POST['password'];
// $result = $crud->LoginAdmin($email, $password);

// if (is_array($result)) {
// $_SESSION['admin_user_id'] = $result['id'];
// $_SESSION['admin_user_name'] = $result['name'];
// $_SESSION['admin_user_email'] = $result['email'];

// header("location:index.php");
// exit();

// }

// }

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/favicon.svg" />
		<title>Login - Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="authentication">
		<div class="container">
			<form method="POST" action="index.php">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<?php if(!empty($result)){ echo $result; } ?>
								<a href="javascript:void(0)" class="login-logo">Admin</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password" />
								</div>
								<div class="actions">
									<button type="submit" name="submit" class="btn btn-info w-100">Login</button>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>