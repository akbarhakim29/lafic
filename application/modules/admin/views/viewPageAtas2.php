	<body onload="setInterval('getCurrentTime()', 1000);">
	<section id="secondary_bar">
		<div class="user">
			
			<p><?php echo $username; ?> (<?php echo anchor ('admin/homeMsg',$jmlPesan.' Messages') ?>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			
		</div>
	</section><!-- end of secondary bar -->



