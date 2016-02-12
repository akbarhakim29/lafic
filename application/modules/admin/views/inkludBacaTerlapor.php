<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div id="tab1" class="tab_content">
			
			<?php foreach ($detail as $key ){ ?>
				
				

				<article class="module width_full" id="printData">
					<center><header><h3>&nbsp;&nbsp;&nbsp;Profil Terlapor</h3></header></center>
						<div class="module_content">
							<a href="#"  onClick="printF('printData')" title="Cetak Laporan">
							<IMG SRC="<?php echo base_url(); ?>assets/print-button.png" width=50px height=50px></a>
							<fieldset>
									<table class="tablesorter" cellspacing="0">
										<tr>
											<td><b>Nama Terlapor</b></td>
											<td><b>:</b></td>
											<td><?php echo  $key->nama;  ?></td>
										</tr>
										<tr>
											<td><b>Nomor KTP</b></td>
											<td><b>:</b></td>
											<td><?php echo   $key->no_ktp;  ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td><b>:</b></td>
											<td><?php echo   $key->alamat;  ?></td>
										</tr>
										<tr>
											<td><b>RT</b></td>
											<td><b>:</b></td>
											<td><?php echo   $key->RT;  ?></td>
										</tr>
										<tr>
											<td><b>RW</b></td>
											<td><b>:</b></td>
											<td><?php echo   $key->RW;  ?></td>
										</tr>
										<tr>
											<td><b>Kecamatan</b></td>
											<td><b>:</b></td>
											<td><?php echo   $key->kecamatan;  ?></td>
										</tr>
										<tr>
											<td><b>Kelurahan</b></td>
											<td><b>:</b></td>
											<td><?php echo  $key->kelurahan;  ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td><b>:</b></td>
											<td><?php echo  $key->jenis_kelamin;  ?></td>
										</tr>
										<tr>
											<td><b>Pekerjaan</b></td>
											<td><b>:</b></td>
											<td><?php echo  $key->pekerjaan;  ?></td>
										</tr>
										<tr>
											<td><b>No Kontak</b></td>
											<td><b>:</b></td>
											<td><?php echo  $key->no_kontak;  ?></td>
										</tr>
										
										
										</table>
								</fieldset>
								
					</div>
				</article>
			<?php } ?>
				
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->



