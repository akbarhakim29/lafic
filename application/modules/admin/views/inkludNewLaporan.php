<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div id="ContactForm">
			<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
				<?php echo form_open('admin/addLaporan',$attributes);?>
					
						<?php if ($sukses==1) echo "<h4 class='alert_success'>Data berhasil ditambahkan</h4>"; 
						elseif($sukses==2) echo "<h4 class='alert_error'>Data gagal ditambahkan</h4>"; ?>
						<article class="module width_full">
								<header>
								<h3>&nbsp;&nbsp;&nbsp;Formulir Pelapor</h3>
								</header>
								<br><br><br>
								<div class="module_content">
										<div class="wrapper">
												
											<fieldset>					
												<?php
													   $nama = array(
													   'name'     => 'nama',
													   'maxlength'  => '30',
													   'id' =>		'req',
													   'size'       => '30',
													   'class'    => 'input',
													  	'value'    => 'Nama',
													    'onblur' => "if(this.value=='') this.value='Nama'",
														'onfocus' =>"if(this.value =='Nama' ) this.value=''"
														 ); 
														echo form_input($nama);
												?>		
											</fieldset>							
										</div>
									

										<div class="wrapper">
											<fieldset>			
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
											</fieldset>							
										</div>
													
										<div class="wrapper">		
											<fieldset>	
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
											</fieldset>						
										</div>
									
										<div class="wrapper">		
											<fieldset>	
											<?php
													$rt = array(
													'name'     => 'rt',
													'maxlength'  => '30',
													'id' =>		'req',
													'size'       => '30',
													'class'    => 'input',
													'value'    => 'RT',
													'onblur' => "if(this.value=='') this.value='RT'",
													'onfocus' =>"if(this.value =='RT' ) this.value=''"
													); 
													echo form_input($rt);
											?>			
											</fieldset>					
										</div>
									
										<div class="wrapper">	
											<fieldset>		
											<?php
													$rw = array(
													'name'     => 'rw',
													'maxlength'  => '30',
													'id' =>		'req',
													'size'       => '30',
													'class'    => 'input',
													'value'    => 'RW',
													'onblur' => "if(this.value=='') this.value='RW'",
													'onfocus' =>"if(this.value =='RW' ) this.value=''"
													); 
													echo form_input($rw);
											?>			
											</fieldset>					
										</div>
										
										<div class="wrapper">	
											<fieldset>		
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
											</fieldset>					
										</div>
													
										<div class="wrapper">	
											<fieldset>		
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
											</fieldset>					
										</div>
										
										<div class="wrapper">		
											<fieldset>	
												<table>
													<tr><td><?php echo form_radio('jk', 'L', TRUE); ?></td>
														<td><?php echo form_label('Laki-laki', 'jk');?></td></tr>
													<tr><td><?php echo form_radio('jk', 'P', FALSE); ?></td>
														<td><?php echo form_label('Perempuan', 'jk');?></td></tr>
												</table>
											</fieldset>	
										</div>
									
										<div class="wrapper">	
											<fieldset>		
											<?php
													$pekerjaan = array(
													'name'     => 'pekerjaan',
													'maxlength'  => '30',
													'id' =>		'req',
													'size'       => '30',
													'class'    => 'input',
													'value'    => 'Pekerjaan',
													'onblur' => "if(this.value=='') this.value='Pekerjaan'",
													'onfocus' =>"if(this.value =='Pekerjaan' ) this.value=''"
													); 
													echo form_input($pekerjaan);
											?>							
											</fieldset>	
										</div>
									
										<div class="wrapper">		
											<fieldset>	
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
											</fieldset>			
										</div>

										<div class="wrapper">		
											<?php
													$status = array(
										              'status1'  => 0 // status=pelapor
										            );
													echo form_hidden($status);
											?>							
										</div>
								</div>
						</article>
						<article class="module width_full">
							<header>
								<h3>&nbsp;&nbsp;&nbsp;Formulir Barang</h3>
							</header>
							<div class="module_content">
								
								<div class="wrapper">	
									<fieldset>
										<table>	
										<?php $atr = "style='width:100%;'"; ?>
										<tr><td ><h4>&nbsp;&nbsp;&nbsp;Kategori :<?php echo form_dropdown('kategori', $kategori, '0',$atr);?></h4></td></tr>	
										</table>	
									</fieldset>												
								</div>

								<div class="wrapper">
									<fieldset>
										<table>		
												<tr><td><?php echo form_radio('status2', 0, TRUE); ?></td>
												<td><?php echo form_label('Kehilangan', 'status');?></td>
											<td><?php echo form_radio('status2', 1, FALSE); ?></td>
												<td><?php echo form_label('Penemuan', 'status');?></td></tr>
												
										</table>
									</fieldset>
								</div>

								<div class="wrapper">
									<?php
											$isi = array(
											'name'     	=> 'isi',
											'cols'  	=> '1',
											'rows'      => '1',		
																
											'value'    => 'keterangan',
											'class' => 'ckeditor',
											'id' =>		'req',
											'onblur' => "if(this.value=='') this.value='keterangan'",
											'onfocus' =>"if(this.value =='keterangan' ) this.value=''"

											); 
											echo form_textarea($isi);
									?>								
								</div>

								<br><br>
								

								<div class="wrapper">
									<fieldset>
									<div class="example-container">	
									<?php
											$waktu = array(
											'name'     => 'waktu',
											'maxlength'  => '300',
											'size'       => '300',
											'class'    => 'input',
											'value'    => 'Waktu Laporan',
											'id' => 'datetimepicker',
											'onblur' => "if(this.value=='') this.value='Waktu Laporan'",
											'onfocus' =>"if(this.value =='Waktu Laporan' ) this.value=''"
											); 
											echo form_input($waktu);
									?>		
									</div>	
									</fieldset>					
								</div>

								<div class="wrapper">	
									<fieldset>
										<table>	
										<?php $atr2 = "style='width:100%;'"; ?>
										<tr><td ><h4>&nbsp;&nbsp;&nbsp;Lokasi Barang :<?php echo form_dropdown('lokasi', $lokasi['nama'], '0',$atr);?></h4></td></tr>	
										</table>	
									</fieldset>												
								</div>
									
									<?php echo form_submit('submit', 'submit')?>
									
						</div>
					
			
					</article>
					<br><br>

					
				<?php echo form_close();?>
		</div>	
		
	</div>
	</div>
</section><!-- end of #tab1 -->