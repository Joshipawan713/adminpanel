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
		// elseif ($breadcrumburl == 'index.php') {
			
		// }
		?>
		<!-- <li class="breadcrumb-item">Hospital Dashboard</li>
		<li class="breadcrumb-item">
			<a href="#">Bootstrap jQuery</a>
		</li>
		<li class="breadcrumb-item active">Accordion</li> -->
	</ol>
	<div class="site-award">
		<img src="img/award.svg" alt="Hospital Dashboards"> Porter Dashboard
	</div>
</div>