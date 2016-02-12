<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div class="module_content">
		<div id="ContactForm">
							<article class="module width_2_quarter" >
								<?php if ($sukses==1) echo "<h4 class='alert_success'>Data berhasil ditambahkan</h4>"; 
								elseif($sukses==2) echo "<h4 class='alert_error'>Data gagal ditambahkan</h4>"; 
								elseif($sukses==3) echo "<h4 class='alert_warning'>Data telah ada sebelumnya</h4>"; 
								elseif ($sukses==5) echo "<h4 class='alert_success'>Data berhasil diupdate</h4>"?>


						<?php if($updateOK==0){ ?>
								<?php $attributes = array('onsubmit' => "return checkrequired(this)");?>
								<?php echo form_open('admin/formNewKategori',$attributes);?>
								
										

										<header><h3>&nbsp;&nbsp;&nbsp;New Category</h3></header>
										<fieldset>
										<div class="module_content">

											<div class="wrapper">	
											
												
													<?php
															$data = array(
															'name'     => 'kategori',
															'maxlength'  => '25',
															'size'       => '5',
															'id' =>		'req',
															'value'    => 'kategori',
															'onblur' => "if(this.value=='') this.value='kategori'",
															'onfocus' =>"if(this.value =='kategori' ) this.value=''"
															); 
															echo form_input($data);
													?>							
												
											
											</div>
										</fieldset>
											
											<?php echo form_submit('submit', 'submit')?>
										
								<?php echo form_close();?>
								</div>

							<?php echo "</article>"; ?>
						<?php } ?>
						<?php if($updateOK==1){ ?>
							<?php foreach ($realData as $keyData) {?>
								<?php echo form_open('admin/updateKategori');?>

										<header><h3>&nbsp;&nbsp;&nbsp;Edit Category</h3></header>
										<fieldset>
											<div class="module_content">
													<div class="wrapper">		
														<?php
																$data = array(
																'name'     => 'kategori',
																'maxlength'  => '25',
																'size'       => '5',
																'id' =>		'req',
																'value'    => $keyData->jenis
																); 
																echo form_input($data);
														?>							
													</div>
												
											
														<?php
																$data8 = array(
													              'id'  => $idKategori 
													            );
																echo form_hidden($data8);
														?>							
										
											</div>
										</fieldset>		
											<?php echo form_submit('submit', 'submit')?>
									
								<?php echo form_close();?>
								
							<?php echo "</article>"; ?>
							<?php } ?>
						<?php } ?>
			
				
			<article class="module width_quarter" >
				<header><h3>&nbsp;&nbsp;&nbsp;List Category</h3></header>
				<div class="module_content">
					<center>
					<table id="t1"  class="example table-autosort table-autofilter table-autopage:10 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount"> 
					
					<thead> 
						<tr> 
		   					<th>No</th> 
		    				<th>Kategori</th> 
		    				<th>Edit</th>
						</tr> 
					</thead> 

						
					<?php $i=0; ?>
					<tbody> 
					<?php foreach ($kategori2 as $key ): ?>
		            <?php $i++; ?>
						<tr> 
		                    <td><?php echo $i;?></td> 
		    				<td><?php echo $key->jenis;?></td> 
							<td><?php echo anchor('admin/homeListKategori/0/1/'.$key->ID_kategori, '<img src="'.base_url().'assets/admin/images/icn_edit.png"/>');?></td>
						</tr> 
					<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td class="table-page:previous" style="cursor:pointer;">&lt; &lt; Previous</td>
							<td colspan="1" style="text-align:center;">Page <span id="t1page">1</span>&nbsp;of <span id="t1pages">11</span></td>
							<td class="table-page:next" style="cursor:pointer;">Next &gt; &gt;</td>
						</tr>
						<tr>
							<td colspan="3"><span id="t1filtercount">105</span>&nbsp;of <span id="t1allcount">105</span>&nbsp;rows match filter(s)</td>
					</tr>
					</tfoot>
					</table>
					</center>
				</div>	
			</article>		
		</div>	
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->