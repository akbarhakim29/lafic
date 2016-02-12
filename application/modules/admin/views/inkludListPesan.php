<section id="main" class="column">
	<div id="scroll5">
	<div class="tab_container">
		<div id="tab1" class="tab_content">
			<br>
			<center>
			<table id="t1"  class="example table-autosort table-autofilter table-autopage:10 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount"> 
			
			<thead> 
				<tr> 
   					<th>No</th> 
    				<th>Judul</th> 
    				<th>Pengirim</th> 
    				<th>Email</th> 
    				<th class="table-filterable table-sortable:default table-sortable" title="Click to sort">Tanggal</th> 
    				<th>Hapus</th> 
				</tr> 
			</thead> 
			<?php $i=0 ?>
			<tbody> 
			<?php foreach ($result as $row) {?>
			<?php $i++; ?>
				<tr> 
					<?php $this->load->library('email'); ?>
                    <td><?php echo $i;?></td> 
    				<td><?php echo anchor('admin/readMsg/'.$row->ID_msg, $row->judul);?></td> 
    				<td><?php echo $row->nama;?></td>
    				<td><?php echo $row->email;?></td> 
    				<td><?php echo $row->waktu;?></td> 
    				<?php $onclick = array('title' =>"delete",
    										'onclick'=>"return confirm('Apakah anda yakin ?	(semua pesan yang terhapus tidak dapat dikembalikan)')"
    									);?>
					<td><?php echo anchor('admin/delMsg/'.$row->ID_msg, '<img src="'.base_url().'assets/admin/images/icn_trash.png"/>', $onclick);?></td>
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
					<td>&nbsp</td>
					
				</tr>
				<tr>
					<td class="table-page:previous" style="cursor:pointer;">&lt; &lt; Previous</td>
					<td colspan="4" style="text-align:center;">Page <span id="t1page">1</span>&nbsp;of <span id="t1pages">11</span></td>
					<td class="table-page:next" style="cursor:pointer;">Next &gt; &gt;</td>
				</tr>
				<tr>
					<td colspan="6"><span id="t1filtercount">105</span>&nbsp;of <span id="t1allcount">105</span>&nbsp;rows match filter(s)</td>
			</tr>
			</tfoot>
			</table>
			</center>
		</div>
	</div>
	</div>
</section><!-- end of #tab1 -->