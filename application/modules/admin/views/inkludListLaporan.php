<section id="main" class="column">

	<div class="tab_container">
		<div id="tab1" class="tab_content">
			<br>
			<center>
			<table id="t1"  class="example table-autosort table-autofilter table-autopage:10 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount"> 
			
			<thead> 
				<tr> 
   					<th>No</th> 
    				<th>Pelapor</th> 
    				<th class="table-filterable table-sortable:default table-sortable" title="Click to sort">Status</th>
    				<th class="table-filterable table-sortable:default table-sortable" title="Click to sort">Barang</th> 
    				<th class="table-filterable table-sortable:default table-sortable" title="Click to sort">Tempat Kejadian</th> 
    				<th class="table-filterable table-sortable:default table-sortable" title="Click to sort">Tanggal</th> 
    				<th>Edit</th>
    				<th>Selesaikan</th>
    				
				</tr> 
			</thead> 

				
			<?php $i=0;?>
			<tbody> 
			<?php foreach ($detail['data0'] as $key ): ?>
            <?php $i++; ?>
				<tr> 
                    <td><?php echo $i;?></td> 
    				<td><?php echo anchor('admin/readLaporan/'.$key->ID_detail,$detail['data1'][$key->ID_detail]['1']['nama']);?></td> 
    				<td><?php if (($detail['data1'][$key->ID_detail]['0']['status'])==0)     {$str="kehilangan";} 
    						  elseif (($detail['data1'][$key->ID_detail]['0']['status'])==1) {$str="penemuan";}
    						  elseif (($detail['data1'][$key->ID_detail]['0']['status'])==2) {$str=anchor('admin/readTerlapor/'.$key->ID_detail,"terselesaikan");}
    					echo $str;?></td> 
    				<td><?php echo $detail['data2']['katIndextoJenis'][$detail['data1'][$key->ID_detail]['0']['jenis']];?></td>
    				<td><?php echo $detail['data1'][$key->ID_detail]['2']['nama'];?></td> 
    				<td><?php echo $detail['data1'][$key->ID_detail]['0']['waktu'];?></td> 		
					<td><?php echo anchor('admin/formUpdateLaporan/'.$key->ID_detail, '<img src="'.base_url().'assets/admin/images/icn_edit.png"/>');?></td>
					<td><?php  if ((($detail['data1'][$key->ID_detail]['0']['status'])==1)||(($detail['data1'][$key->ID_detail]['0']['status'])==0)){echo anchor('admin/formNewTerlapor/'.$key->ID_detail, '<img src="'.base_url().'assets/admin/images/icn_settings.png"/>');}?></td>
				</tr> 
			<?php endforeach ?>
			</tbody>

			<tfoot>
				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>
				<tr>
					<td class="table-page:previous" style="cursor:pointer;">&lt; &lt; Previous</td>
					<td colspan="6" style="text-align:center;">Page <span id="t1page">1</span>&nbsp;of <span id="t1pages">11</span></td>
					<td class="table-page:next" style="cursor:pointer;">Next &gt; &gt;</td>
				</tr>
				<tr>
					<td colspan="8"><span id="t1filtercount">105</span>&nbsp;of <span id="t1allcount">105</span>&nbsp;rows match filter(s)</td>
			</tr>
			</tfoot>
			</table>
			</center>
		</div>
	</div>
	
</section><!-- end of #tab1 -->