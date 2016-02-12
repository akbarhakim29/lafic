<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div id="tab1" class="tab_content">
			
			<?php foreach ($detail['data0'] as $key ){ ?>
				
				
			<div id="printData">
				<article class="module width_full" >
					<center><header><h3>Profil Pelapor</h3></header></center>
						<div class="module_content">
								<a href="#"  onClick="printF('printData')" title="Cetak Laporan">
								<IMG SRC="<?php echo base_url(); ?>assets/print-button.png" width=50px height=50px></a>
								<fieldset>
								<table class="tablesorter" cellspacing="0">
									<tr>
										<td><b>Nama Pelapor</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['nama'];  ?></td>
									</tr>
									<tr>
										<td><b>Nomor KTP</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['no_ktp'];  ?></td>
									</tr>
									<tr>
										<td><b>Alamat</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['alamat'];  ?></td>
									</tr>
									<tr>
										<td><b>RT</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['RT'];  ?></td>
									</tr>
									<tr>
										<td><b>RW</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['RW'];  ?></td>
									</tr>
									<tr>
										<td><b>Kecamatan</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['kecamatan'];  ?></td>
									</tr>
									<tr>
										<td><b>Kelurahan</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['kelurahan'];  ?></td>
									</tr>
									<tr>
										<td><b>Jenis Kelamin</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['jenis_kelamin'];  ?></td>
									</tr>
									<tr>
										<td><b>Pekerjaan</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['pekerjaan'];  ?></td>
									</tr>
									<tr>
										<td><b>No Kontak</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['1']['no_kontak'];  ?></td>
									</tr>
									
									</table>
							</fieldset>
							
									<?php if (($detail['data1'][$key->ID_detail]['0']['status'])==0)$str="kehilangan"; 
									elseif (($detail['data1'][$key->ID_detail]['0']['status'])==1)  {$str="penemuan";}
									elseif (($detail['data1'][$key->ID_detail]['0']['status'])==2)  {$str="Penemuan/Kehilangan yang terselesaikan";} ?>

									<b><h3>Telah Melaporkan Berita <?php echo " ".$str." "; ?> berupa </h3></b>
							<fieldset>	

									<table class="tablesorter" cellspacing="80">
								
									<tr>
										<td><b>Jenis Barang </b></td>
										<td><b>:</b></td>
										<td><?php echo $detail['data2']['katIndextoJenis'][$detail['data1'][$key->ID_detail]['0']['jenis']];  ?></td>
									</tr>
									<tr>
										<td><b>Ciri-Ciri</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['0']['keterangan'];  ?></td>
									</tr>
									
									<tr>
										<td><b>Pada Pukul</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['0']['waktu'];  ?></td>
									</tr>
									<tr>
										<td><b>Di Sekitar</b></td>
										<td><b>:</b></td>
										<td><?php echo  $detail['data1'][$key->ID_detail]['2']['nama'];  ?></td>
									</tr>
								</table>
							</fieldset>
					</div>
				</article>
			</div>
			<?php } ?>
				
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->



