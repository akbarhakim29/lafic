<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		
		<div id="ContactForm">
			
			<article class="module width_3_quarter">
				<header><h3>&nbsp;&nbsp;&nbsp;Form Account</h3></header>
				<br><br><br>
				<div class="module_content">
					<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
						<?php echo form_open('admin/updateUsername',$attributes);?>
						<div>
								<?php if ($sukses==1) echo "<h4 class='alert_success'>Account berhasil diperbarui</h4>"; 
								elseif($sukses==2) echo "<h4 class='alert_error'>Account gagal diperbarui</h4>"; 
								 ?>

								<label>Nama Account Baru</label>
								<fieldset>
								<div class="wrapper">						
									<?php
										   $data1 = array(
										   'name'     => 'usernamenew',
										   'maxlength'  => '30',
										   'size'       => '30',
										   'id' =>		'req',
										   'class'    => 'input',
										   'value' => 'account baru',
										   'onblur' => "if(this.value=='') this.value='account baru'",
										   'onfocus' =>"if(this.value =='account baru' ) this.value=''"

											 ); 
											echo form_input($data1);
									?>*							
								</div>
								</fieldset>
								<label>Password</label>
								<fieldset>			
								<div class="wrapper">
											
									<?php
											$data2 = array(
											'name'     => 'password',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value' => '...................',
											'onblur' => "if(this.value=='') this.value='...................'",
											'onfocus' =>"if(this.value =='...................' ) this.value=''"
											); 			  
											echo form_password($data2);
									?>*									
								</div>
								</fieldset>
								

									<?php
												$dataz= array(
									              'username'  => $username 
									            );
												echo form_hidden($dataz);
									?>						
								
								<?php echo form_submit('submit', 'submit')?>
						</div>
						<?php echo form_close();?>
				
			</div>
		</article>
		
		</div>	
	
	</div>
	</div>
</section><!-- end of #tab1 -->