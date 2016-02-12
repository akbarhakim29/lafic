<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		
		<div id="ContactForm">
			
			<article class="module width_3_quarter">
				<header><h3>&nbsp;&nbsp;&nbsp;Form Password</h3></header>
				<br><br><br>
				<div class="module_content">
					<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
						<?php echo form_open('admin/updatePassword',$attributes);?>
						<div>
								<?php if ($sukses==1) echo "<h4 class='alert_success'>Password berhasil diperbarui</h4>"; 
								elseif($sukses==2) echo "<h4 class='alert_error'>Password gagal diperbarui</h4>"; 
								elseif($sukses==3) echo "<h4 class='alert_warning'>Password baru tidak cocok, masukkan sekali lagi</h4>"; ?>

								<label>Password Saat Ini</label>
								<fieldset>
								<div class="wrapper">						
									<?php
										   $data1 = array(
										   'name'     => 'passcur',
										   'maxlength'  => '30',
										   'size'       => '30',
										   'id' =>		'req',
										   'class'    => 'input',
										  	'value' => '...................',
										   'onblur' => "if(this.value=='') this.value='...................'",
										   'onfocus' =>"if(this.value =='...................' ) this.value=''"
											 ); 
											echo form_password($data1);
									?>*							
								</div>
								</fieldset>
								<label>Password Baru</label>
								<fieldset>			
								<div class="wrapper">
											
									<?php
											$data2 = array(
											'name'     => 'passnew',
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
								<label>Konfirmasi Password Baru</label>
								<fieldset>			
								<div class="wrapper">		
									<?php
											$data3 = array(
											'name'     => 'passnew2',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value' => '...................',
										   'onblur' => "if(this.value=='') this.value='...................'",
										   'onfocus' =>"if(this.value =='...................' ) this.value=''"
											); 
											echo form_password($data3);
									?>*							
								</div>

									<?php
												$dataz= array(
									              'username'  => $username 
									            );
												echo form_hidden($dataz);
									?>						
								</fieldset>
								<?php echo form_submit('submit', 'submit')?>
						</div>
						<?php echo form_close();?>
				
			</div>
		</article>
		
		</div>	
	
	</div>
	</div>
</section><!-- end of #tab1 -->