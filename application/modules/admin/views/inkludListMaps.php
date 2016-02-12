<section id="main" class="column">
	<div id="scroll2">
	<div class="tab_container">
		<div id="tab1" class="tab_content">
			<br>
			<center>
				<table  id="t1"  class="example table-autosort table-autofilter table-autopage:10 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount"> 
					<thead> 
						<tr> 
		   					<th>No</th> 
		    				<th>Lattitude</th> 
		    				<th>Longitude</th> 
		    				<th>Nama Lokasi</th> 
		    				
		    				<th>Edit</th> 
						</tr> 
					</thead> 
					<?php $i=0 ?>
					
					<tbody> 
					<?php foreach ($result as $row) {?>
					<?php $i++; ?>
					
						
						<tr> 
		                    <td><?php echo $i;?></td> 
		    				<td><?php echo $row->lat;?></td>
		    				<td><?php echo $row->att;?></td> 
		    				<td><?php echo $row->nama;?></td> 
		    				<?php $onclick = array('title' =>"edit"
		    									);?>
							<td><?php echo anchor('admin/editMap/'.$row->ID_lokasi, '<img src="'.base_url().'assets/admin/images/icn_edit.png"/>', $onclick);?></td>
						</tr> 
					
					<?php } ?>
					</tbody>

					<tfoot>
								<tr>
									<td>&nbsp</td>
									<td>&nbsp</td>
									<td>&nbsp</td>
									<td>&nbsp</td>
									<td>&nbsp</td>
								</tr>
								<tr>
									<td class="table-page:previous" style="cursor:pointer;">&lt; &lt; Previous</td>
									<td colspan="3" style="text-align:center;">Page <span id="t1page">1</span>&nbsp;of <span id="t1pages">11</span></td>
									<td class="table-page:next" style="cursor:pointer;">Next &gt; &gt;</td>
								</tr>
								<tr>
									<td colspan="5"><span id="t1filtercount">105</span>&nbsp;of <span id="t1allcount">105</span>&nbsp;rows match filter(s)</td>
							</tr>
					</tfoot>
				</table>
			</center>
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->