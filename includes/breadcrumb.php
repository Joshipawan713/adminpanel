<?php
$breadcrumburl = basename($_SERVER['PHP_SELF']);
?>
<div class="page-header">
	<ol class="breadcrumb">
		<?php 
		if ($breadcrumburl == 'index.php') {
			?>
			<li class="breadcrumb-item">Home</li>
			<?php
		}
		elseif ($breadcrumburl == 'add_users.php') {
			?>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item">Users</li>
			<li class="breadcrumb-item active">Add Users</li>
		<?php
		}
		elseif ($breadcrumburl == 'users_details.php') {
		?>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item">Users</li>
			<li class="breadcrumb-item active">Users Details</li>
		<?php 
		}
		elseif ($breadcrumburl == 'add_drivers.php') {
			?>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item">Drivers</li>
			<li class="breadcrumb-item active">Add Drivers</li>
		<?php 
		}
		elseif ($breadcrumburl == 'drivers_details.php') {
			?>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item">Drivers</li>
			<li class="breadcrumb-item active">Drivers Details</li>
		<?php
		}
		?>
	</ol>
	<!-- <div class="site-award">
		<img src="img/award.svg" alt="Hospital Dashboards"> Admin Dashboard
	</div> -->
</div>