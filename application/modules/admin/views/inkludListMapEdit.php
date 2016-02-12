<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container" id="maps">
		<div id="tab1" class="tab_content">
			<?php if ($sukses==1) echo "<h4 class='alert_success'>Lokasi berhasil diperbarui</h4>"; 
			elseif($sukses==2) echo "<h4 class='alert_error'>Lokasi gagal diperbarui</h4>"; ?>

			<?php echo $map['js']; ?>
			<?php echo $map['html'];?>

			<?php echo form_open('admin/updateMap');?>
				<center>
					<article class="module width_2_quarter" >
						<?php foreach ($detail as $key) {?>
						<fieldset>
							<div class="module_content">
										<?php
												$data1 = array(
									              'id'  =>  'latzStart',
									              'name' => 'latcur',
									              'value' => $key->lat,
									              'title' => 'Current Latitude'
									            );
												echo form_input($data1);
										?>							
									
											
										<?php
												$data2 = array(
									              'id'  =>  'latz',
									              'name' => 'latnew',
									              'value' =>$key->lat,
									              'title' => 'New Latitude'
									            );
												echo form_input($data2);
										?>							
									
			
										<?php
												$data3 = array(
									              'id'  =>  'langzStart',
									              'name' => 'langcur',
									              'value' => $key->att,
									              'title' => 'Current Longitude'
									            );
												echo form_input($data3);
										?>							
									
										
										<?php
												$data4 = array(
									              'id'  =>  'langz',
									              'name' => 'langnew',
									              'value' => $key->att ,
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
									              'value' => $key->nama ,
									              'title' => 'Nama Lokasi',
									              'onblur' => "if(this.value=='') this.value='".$key->nama ."'",
												  'onfocus' =>"if(this.value =='".$key->nama."' ) this.value=''"
									            );
												echo form_input($data4);
										?>			
										<?php
												$dataz= array(
									              'idLok'  => $idLokasi 
									            );
												echo form_hidden($dataz);
										?>				
						</fieldset>
						<?php } ?>
						<?php echo form_submit('submit', 'submit')?>
					</center>
				</div>	
			</article>	
			<?php echo form_close();?>	
		</div>
	</div>	
	</div>	
	
</section><!-- end of #tab1 -->