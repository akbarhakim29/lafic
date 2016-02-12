<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div id="tab1" class="tab_content">
			
			<?php foreach ($read as $row) {?>
				

				<article class="module width_full">
				<center><header><h3>&nbsp;&nbsp;&nbsp;<?php echo  $row->judul;  ?></h3></header></center>
					<div class="module_content">
						<?php echo  "<b> Pengirim </b> : ".$row->nama;  ?> <br>
						<?php echo  "<b> Email </b> : ".$row->email;  ?> <br>
						<?php echo  "<b> Pada Tanggal </b> : ".$row->waktu;  ?> <br>
						
						<br>
						<fieldset>
							<div class="module_content">
							<p><?php echo $row->isi; ?></p>
							</div>
						</fieldset>
					</div>
				</article>
			<?php } ?>
				
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->



