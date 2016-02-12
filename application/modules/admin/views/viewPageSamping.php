<aside id="sidebar" class="column">
		<form class="quick_search">
			<img src="<?php echo base_url(); ?>assets/admin/images/logo2.png" height=60px >
		</form>
		<hr/>
		<h3>Laporan</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo anchor ('admin/homeNewLaporan','New Laporan')?></li>
			<li class="icn_categories"><?php echo anchor ('admin/homeListLaporan','List Laporan')?></li>
			
		</ul>
		<h3>Kategori</h3>
		<ul class="toggle">
			<li class="icn_categories"><?php echo anchor ('admin/homeListKategori','List Kategori')?></li>
		</ul>
		<h3>Lokasi</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo anchor ('admin/homeAddMap','Add Lokasi')?></li>
			<li class="icn_categories"><?php echo anchor ('admin/homeListMap','List Lokasi')?></li>
			<li class="icn_tags"><?php echo anchor ('admin/homeMap','View Map')?></li>
			<!--<li class="icn_view_users"><a href="#">Add Location</a></li>-->
		</ul>
		<h3>Message</h3>
		<ul class="toggle">
            <li class="icn_folder"><?php echo anchor ('admin/homeMsg','View Message')?></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_security"><?php echo anchor ('admin/homeUpdatePassword','Change Password')?></li>
			<li class="icn_profile"><?php echo anchor ('admin/homeUpdateUsername','Change Account')?></li>
			<li class="icn_jump_back"><?php echo anchor ('admin/homeLogout','Logout')?></li>			
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2013 Website Admin</strong></p>
			<p>Theme by <a href="http://www.liperkus.allalla.com">Lingga Perdana</a></p>
		</footer>
	</aside><!-- end of sidebar -->