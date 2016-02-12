<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container" id="maps">
		<div id="tab1" class="tab_content">
			<?php if ($sukses==1) echo "<h4 class='alert_success'>Lokasi berhasil ditambahkan</h4>"; 
			elseif($sukses==2) echo "<h4 class='alert_error'>Lokasi gagal ditambahkan. Nama Telah Ada </h4>"; 
			elseif($sukses==3) echo "<h4 class='alert_warning'>Lokasi telah ada sebelumnya</h4>";?>

			<?php echo $map['js']; ?>
			<?php echo $map['html'];?>

			<?php echo form_open('admin/addMap');?>
				<center>
					<article class="module width_2_quarter" >
					
						<fieldset>
							<div class="module_content">
										<?php
												$data1 = array(
									              'id'  =>  'latzStart',
									              'name' => 'latcur',
									              'value' => '-7.956008900734134',
									              'title' => 'Current Latitude'
									            );
												echo form_input($data1);
										?>							
									
											
										<?php
												$data2 = array(
									              'id'  =>  'latz',
									              'name' => 'latnew',
									              'value' =>'-7.956008900734134',
									              'title' => 'New Latitude'
									            );
												echo form_input($data2);
										?>							
									
			
										<?php
												$data3 = array(
									              'id'  =>  'langzStart',
									              'name' => 'langcur',
									              'value' => '112.61593421592124',
									              'title' => 'Current Longitude'
									            );
												echo form_input($data3);
										?>							
									
										
										<?php
												$data4 = array(
									              'id'  =>  'langz',
									              'name' => 'langnew',
									              'value' =>'112.61593421592124' ,
									              'title' => 'New Longtude'
									            );
												echo form_input($data4);
										?>							
							</div>
						</fieldset>
					</article>
				</center>
			
			<article class="module width_quarter" >
				<header><h3>&nbsp;&nbsp;&nbsp;Nama Lokasi</h3></header>
				<div class="module_content">
					<center>
						<fieldset>
										<?php
												$data4 = array(
									      
									              'name' => 'nama',
									              'value' => 'Nama Lokasi' ,
									              'title' => 'Nama Lokasi',
									              'onblur' => "if(this.value=='') this.value='Nama Lokasi'",
												  'onfocus' =>"if(this.value =='Nama Lokasi' ) this.value=''"
									            );
												echo form_input($data4);
										?>			
										
						</fieldset>
					
						<?php echo form_submit('submit', 'submit')?>
					</center>
				</div>	
			</article>	
			<?php echo form_close();?>	
		</div>
	</div>	
	</div>	
	
</section><!-- end of #tab1 -->