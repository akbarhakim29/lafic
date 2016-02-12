<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div class="module_content">
		<div id="ContactForm">
			
			<article class="module width_full">
				<header><h3>&nbsp;&nbsp;&nbsp;Formulir Terlapor</h3></header>
				<br><br><br>
				<div class="module_content">
					<?php foreach ($detail['data0'] as $key ){ ?>
						<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
						<?php echo form_open('admin/addTerlapor',$attributes);?>
						<div>
								<?php if ($sukses==1) echo "<h4 class='alert_success'>Data berhasil ditambahkan</h4>"; 
								elseif($sukses==2) echo "<h4 class='alert_error'>Data gagal ditambahkan</h4>"; ?>

								<fieldset>
								<div class="wrapper">						
									<?php
										   $nama = array(
										   'name'     => 'nama',
										   'maxlength'  => '30',
										   'size'       => '30',
										   'id' =>		'req',
										   'class'    => 'input',
										   'value'    => 'Nama',
										    'onblur' => "if(this.value=='') this.value='Nama'",
											'onfocus' =>"if(this.value =='Nama' ) this.value=''"
											 ); 
											echo form_input($nama);
									?>									
								</div>
								</fieldset>
								<fieldset>			
								<div class="wrapper">
											
									<?php
											$ktp = array(
											'name'     => 'no_ktp',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Nomor KTP',
											'onblur' => "if(this.value=='') this.value='Nomor KTP'",
											'onfocus' =>"if(this.value =='Nomor KTP' ) this.value=''"
											); 
											echo form_input($ktp);
									?>									
								</div>
								</fieldset>
								<fieldset>			
								<div class="wrapper">		
									<?php
											$alamat = array(
											'name'     => 'alamat',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Alamat',
											'onblur' => "if(this.value=='') this.value='Alamat'",
											'onfocus' =>"if(this.value =='Alamat' ) this.value=''"
											); 
											echo form_input($alamat);
									?>							
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<?php
											$rt = array(
											'name'     => 'rt',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'RT',
											'onblur' => "if(this.value=='') this.value='RT'",
											'onfocus' =>"if(this.value =='RT' ) this.value=''"
											); 
											echo form_input($rt);
									?>							
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<?php
											$rw = array(
											'name'     => 'rw',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'RW',
											'onblur' => "if(this.value=='') this.value='RW'",
											'onfocus' =>"if(this.value =='RW' ) this.value=''"
											); 
											echo form_input($rw);
									?>							
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<?php
											$kelurahan = array(
											'name'     => 'kelurahan',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Kelurahan',
											'onblur' => "if(this.value=='') this.value='Kelurahan'",
											'onfocus' =>"if(this.value =='Kelurahan' ) this.value=''"
											); 
											echo form_input($kelurahan);
									?>							
								</div>
								</fieldset>
								<fieldset>		
								<div class="wrapper">		
									<?php
											$kecamatan = array(
											'name'     => 'kecamatan',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Kecamatan',
											'onblur' => "if(this.value=='') this.value='Kecamatan'",
											'onfocus' =>"if(this.value =='Kecamatan' ) this.value=''"
											); 
											echo form_input($kecamatan);
									?>							
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<table>
										<tr><td><?php echo form_radio('jk', 'L', TRUE); ?></td>
											<td><?php echo form_label('Laki-laki', 'jk');?></td></tr>
										<tr><td><?php echo form_radio('jk', 'P', FALSE); ?></td>
											<td><?php echo form_label('Perempuan', 'jk');?></td></tr>
									</table>
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<?php
											$pekerjaan = array(
											'name'     => 'pekerjaan',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Pekerjaan',
											'onblur' => "if(this.value=='') this.value='Pekerjaan'",
											'onfocus' =>"if(this.value =='Pekerjaan' ) this.value=''"
											); 
											echo form_input($pekerjaan);
									?>							
								</div>
								</fieldset>
								<fieldset>
								<div class="wrapper">		
									<?php
											$no_kontak = array(
											'name'     => 'no_kontak',
											'maxlength'  => '30',
											'size'       => '30',
											'id' =>		'req',
											'class'    => 'input',
											'value'    => 'Nomor Telepon',
											'onblur' => "if(this.value=='') this.value='Nomor Telepon'",
											'onfocus' =>"if(this.value =='Nomor Telepon' ) this.value=''"
											); 
											echo form_input($no_kontak);
									?>							
								</div>
								</fieldset>

									
									<?php
											$status = array(
								              'status1'  => 1 // status=terlapor
								            );
											echo form_hidden($status);
									?>							
								
											
									<?php
											$id_subjek = array(
								              'id_barang'  => $key->no_barang 
								            );
											echo form_hidden($id_subjek);
									?>							
								
										
									<?php
											$id_detail = array(
								              'id_detail'  => $key->ID_detail 
								            );
											echo form_hidden($id_detail);
									?>							
								

								
											
									<?php echo form_submit('submit', 'submit')?>
						</div>
						<?php echo form_close();?>
					<?php } ?>
			</div>
		</article>
		</div>	
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->