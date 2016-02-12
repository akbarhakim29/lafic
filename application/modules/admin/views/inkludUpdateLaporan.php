<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div class="module_content">
		<div id="ContactForm">
			<article class="module width_full">
						<?php foreach ($detail['data0'] as $key ){ ?>
							<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
							<?php echo form_open('admin/updateLaporan',$attributes);?>
							<div>
									<?php if ($sukses==1) echo "<h4 class='alert_success'>Data berhasil diupdate</h4>"; 
									elseif($sukses==2) echo "<h4 class='alert_error'>Data gagal diupdate</h4>"; ?>
				<header>
					<h3>&nbsp;&nbsp;&nbsp;Formulir Pelapor</h3>
				</header> <br><br>
						<div class="module_content">
									<div class="wrapper">
										<fieldset>						
										<?php
											   $nama = array(
											   'name'     => 'nama',
											   'maxlength'  => '30',
											   'size'       => '30',
											   'id' =>		'req',
											   'class'    => 'input',
											   'value'    =>  $detail['data1'][$key->ID_detail]['1']['nama']
											   
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
												'value'    => $detail['data1'][$key->ID_detail]['1']['no_ktp']
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
												'value'    => $detail['data1'][$key->ID_detail]['1']['alamat']
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
												'size'       => '30',
												'id' =>		'req',
												'class'    => 'input',
												'value'    => $detail['data1'][$key->ID_detail]['1']['RT']
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
												'size'       => '30',
												'id' =>		'req',
												'class'    => 'input',
												'value'    => $detail['data1'][$key->ID_detail]['1']['RW']
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
												'value'    => $detail['data1'][$key->ID_detail]['1']['kelurahan']
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
												'value'    => $detail['data1'][$key->ID_detail]['1']['kecamatan']
												); 
												echo form_input($kecamatan);
										?>
										</fieldset>								
									</div>

									<div class="wrapper">
										<fieldset>		
										<?php if(($detail['data1'][$key->ID_detail]['1']['jenis_kelamin'])=='L') {$L=TRUE;$P=FALSE;} else{$L=FALSE;$P=TRUE;}
										 ?>
										 <table>
												<tr><td><?php echo form_radio('jk', 'L', $L); ?></td>
													<td><?php echo form_label('Laki-laki', 'jk');?></td></tr>
												<tr><td><?php echo form_radio('jk', 'P', $P); ?></td>
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
												'size'       => '30',
												'id' =>		'req',
												'class'    => 'input',
												'value'    => $detail['data1'][$key->ID_detail]['1']['pekerjaan']
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
												'value'    => $detail['data1'][$key->ID_detail]['1']['no_kontak']
												); 
												echo form_input($no_kontak);
										?>
										</fieldset>								
									</div>
	
										<?php
												$status = array(
									              'status1'  => 0 // status=pelapor
									            );
												echo form_hidden($status);
										?>							
									

											
										<?php
												$id_barang = array(
									              'id_barang'  => $key->no_barang 
									            );
												echo form_hidden($id_barang);
										?>							
									
									
										
										<?php
												$id_subjek = array(
									              'id_subjek'  => $key->no_subjek 
									            );
												echo form_hidden($id_subjek);
										?>							
									
										
										<?php
												$id_detail = array(
									              'id_detail'  => $key->ID_detail 
									            );
												echo form_hidden($id_detail);
										?>							
									
						</div>
			</article>
			<article class="module width_full">
				<header><h3>&nbsp;&nbsp;&nbsp;Formulir Barang</h3></header>
						<div class="module_content">
									<div class="wrapper">
									<fieldset>	
									
										<table>	
										<tr><td ><h4>&nbsp;&nbsp;&nbsp;Kategori :<?php echo form_dropdown('kategori', $kategori, $detail['data2']['katIndextoJenis'][$detail['data1'][$key->ID_detail]['0']['jenis']]);?></h4></td></tr>	
										</table>
									</fieldset>													
									</div>

									<div class="wrapper">
										<fieldset>
											<?php if(($detail['data1'][$key->ID_detail]['0']['status'])!='2') {?>
													<table>		

															<?php if(($detail['data1'][$key->ID_detail]['0']['status'])=='0') {$L=TRUE;$P=FALSE;} else{$L=FALSE;$P=TRUE;}
														 ?>
															<tr><td><?php echo form_radio('status2', 0, $L); ?></td>
															<td><?php echo form_label('Kehilangan', 'status');?></td>
															<td><?php echo form_radio('status2', 1, $P); ?></td>
															<td><?php echo form_label('Penemuan', 'status');?></td></tr>
															
													</table>
											<?php } ?>
											<?php if(($detail['data1'][$key->ID_detail]['0']['status'])=='2')  {

														$xx= $detail['data1'][$key->ID_detail]['0']['status'];
														$datastat = array('status2'  => $xx);
														echo form_hidden($datastat);
											
											}?>
										</fieldset>
									</div>
									<div class="wrapper">
										
											<?php
													$isi = array(
													'name'     	=> 'isi',
													'cols'  	=> '1',
													'id' =>		'req',
													'rows'      => '1',							
													'value'    => $detail['data1'][$key->ID_detail]['0']['keterangan'],
													'class' => 'ckeditor'
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
													'value'    => $detail['data1'][$key->ID_detail]['0']['waktu'],
													'id' => 'datetimepicker'
													); 
													echo form_input($waktu);
											?>
													
											</div>	
										</fieldset>					
									</div>

									<div class="wrapper">
										<fieldset>	
											<table>	
											<tr><td ><h4>&nbsp;&nbsp;&nbsp;Lokasi Barang :<?php echo form_dropdown('lokasi', $lokasi['nama'],  $detail['data1'][$key->ID_detail]['2']['nama']);?></h4></td></tr>	
											</table>
										</fieldset>													
									</div>
											
										
											<?php echo form_submit('submit', 'update')?>
										
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