

	<body>
		
		
			<div id="container">
			<?php echo form_open('admin/cekLogin');?>
			
									<div class="login">LOGIN</div>
										<div class="username-text">Username:</div>
										<div class="password-text">Password:</div>
								<?php
								  $subjek = array(
										'name'     => 'username',
										'value'    => 'username'
								  );
												echo"<div class='username-field'>";
								echo form_input($subjek);
												echo"</div>";
											   
							  	?>									
								<?php
								  $passwd = array(
										'name'     => 'password',
										'value'    => 'password'
								  );
												echo"<div class='password-field'>";
								echo form_password($passwd);
												echo"</div>";
											   
							  	?>		
										<?php echo form_submit('submit', 'GO')?>
			 <?php echo form_close();?>
			 </div>
	</body>
</html>
