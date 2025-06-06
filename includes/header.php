<?php 
$headurl = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg custom-navbar">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar"
		aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			<i></i>
			<i></i>
			<i></i>
		</span>
	</button>
	<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?php if($headurl=='index.php'){ ?>active-page<?php } ?>" href="index.php">
					<i class="icon-devices_other nav-icon"></i>
					Dashboard
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle <?php if($headurl=='add_users.php' || $headurl=='users_details.php'){ ?>active-page<?php } ?>" href="javascript:void(0)" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<i class="icon-users nav-icon"></i>
					Users
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="add_users.php" class="dropdown-item <?php if($headurl=='add_users.php'){ ?>active-page<?php } ?>">Add User</a>
					</li>
					<li>
						<a href="users_details.php" class="dropdown-item <?php if($headurl=='users_details.php'){ ?>active-page<?php } ?>">Users Details</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle <?php if($headurl=='add_drivers.php' || $headurl=='drivers_details.php'){ ?>active-page<?php } ?>" href="javascript:void(0)" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<i class="icon-users nav-icon"></i>
					Drivers
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="add_drivers.php" class="dropdown-item <?php if($headurl=='add_drivers.php'){ ?>active-page<?php } ?>">Add Driver</a>
					</li>
					<li>
						<a href="drivers_details.php" class="dropdown-item <?php if($headurl=='drivers_details.php'){ ?>active-page<?php } ?>">Drivers Details</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>