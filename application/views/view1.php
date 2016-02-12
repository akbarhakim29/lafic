
<body>
<div class="spinner"></div>
<div id="bgSlider"></div>
<div class="extra">
	<div class="main">
		<div class="box">
			<!--header -->
			<header>
				<h1><a href="index.php" id="logo"></a></h1>
				<nav class="menu">
					<ul id="menu">
						<li><a href="#!/page_Home"><span></span><strong>Home</strong></a></li>
						<li><a href="#!/page_Maps"><span></span><strong>Maps</strong></a></li>
						<li><a href="#!/page_HowTo"><span></span><strong>How To</strong></a></li>
						<li><a href="#!/page_About"><span></span><strong>About</strong></a></li>
						<li><a href="#!/page_Contact"><span></span><strong>Contact Us</strong></a></li>
					</ul>
				</nav>
			</header><div class="ic">Tim Sukses Pemrograman Web Kelas A</div>
			<!--header end-->
			<!--content -->
			<article id="content">
				
				<ul>		
					<li id="page_Home">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Information</h2>

									<div id="scroll2">
										<?php
																	   
											foreach ($detail['data0'] as $key ) 
											{
												if ($detail['data1'][$key->ID_detail]['0']['status']<2)
													{
														$potongkalimat = substr($detail['data1'][$key->ID_detail]['0']['keterangan'], 0, 160);
														echo '<div class="wrapper pad_bot2">';
														if ($detail['data1'][$key->ID_detail]['0']['status']==0){echo"<figure class='left marg_right1'><img src=".base_url()."assets/images/iconLost.png alt=''></figure>
																<div id ='colorLost'><p class='pad_bot2'><strong>Telah Hilang ! (".$detail['data1'][$key->ID_detail][0]['waktu'].") </strong></p></div>";}
														if ($detail['data1'][$key->ID_detail]['0']['status']==1){echo"<figure class='left marg_right1'><img src=".base_url()."assets/images/iconFound.png alt=''></figure>
																<div id ='colorFound'><p class='pad_bot2'><strong>Telah Ditemukan ! (".$detail['data1'][$key->ID_detail]['0']['waktu'].")</strong></p></div>";}
														echo"<p class='pad_bot2'><strong>".$detail['data2']['katIndextoJenis'][$detail['data1'][$key->ID_detail]['0']['jenis']]."</strong></p>";
														echo"<p class='pad_bot1'>".$potongkalimat."....</p>";
														echo"<p class='pad_bot2'><a href='#!/".$key->ID_detail."' class='link1'>Read More</a></p>";		   
														echo '</div>';
													}
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</li>
										<li id="page_Maps">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<?php echo $map['js']; ?>
									<?php echo $map['html']; ?>
								</div>
							</div>
						</div>
					</li>
					
					<li id="page_HowTo">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Flow Diagram System Information</h2>

									<p class="pad_bot1"><img src="<?=base_url();?>assets/images/notice.jpg" alt="" height="500" /></p>
								</div>
							</div>
						</div>
					</li>
					<li id="page_About">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<h2>Company Profile </h2>
																		<?php echo"<figure class='left marg_right1'><img src=".base_url()."assets/images/gedung.jpg alt=''></figure>
																		 ";?><p class="pad_bot1"><strong>LAFIC ( Lost and Found Information Centre ):</strong><br>
									Merupakan suatu pusat informasi masa depan Universitas Brawijaya yang lahir dari mimpi anak bangsa. Berdiri pada tahun 2013 dan merupakan 
																		hasil dari pemikiran kelompok tim sukses Pemrograman Web kelas A. </p>
																		
																		<p class="pad_bot1">
									Situs LAFIC merupakan situs yang dibangun dengan bahasa pemrograman PHP yang dibantu dengan framework Code Igniter 2.1.3. 
																		situs ini dirancang menggunakan pandangan Hirarchy Model View Controller sehingga developper dapat dengan mudah mengembangkan website ini 
																	   . </p>
									
								</div>
							</div>
						</div>
					</li>
					<li id="page_Contact">
						<div class="box1">
							<div class="inner">
								<a href="#" class="close" data-type="close"><span></span></a>
								<div class="wrapper">
									<div class="col1">
										<h2>Our Office</h2>
										<p><strong>Building X, Brawijaya University <br>
												Veteran, Malang, Indonesia</strong></p>
										<p class="address">Freephone:<br>
												Telephone:<br>
												FAX:<br>
												E-mail:</p>
										<p class="pad_bot1">0341 - 7779999<br>
												0341 - 3337777<br>
												0341 - 3335777<br>
												<a href="mailto:" class="color1">lafic@ub.ac.id</a></p>
									</div>
									<div class="col1 pad_left1">
										<br><br><br>
										<p class="pad_bot1"><img src="<?=base_url();?>assets/images/contact.gif" alt="" height="180" /></p>
									</div>
								</div>
								<div class="wrapper">
									<h2>Contact Form</h2>
									
								
								<?php $attributes0 = array('name' => 'myForm',  'onsubmit'=>'return validateEmail();', 'id'=>"ContactForm" ); ?>
								<?php echo form_open('user/msgUpload',$attributes0);?>
								<div>
										<div class="wrapper">						
											<?php
												$subjek = array(
												'name'     => 'subjek',
												'maxlength'  => '30',
												'size'       => '30',
												'class'    => 'input',
												'value'    => 'Subject',
												'onblur' => "if(this.value=='') this.value='Subject'",
												'onfocus' =>"if(this.value =='Subject' ) this.value=''"
												
												); 
											echo form_input($subjek);
											?>									
										</div>
									
										<div class="wrapper">
									
											<?php
												$nama = array(
												'name'     => 'nama',
												'maxlength'  => '30',
												'size'       => '30',
												'class'    => 'input',
												'value'    => 'Name',
												'onblur' => "if(this.value=='') this.value='Name'",
												'onfocus' =>"if(this.value =='Name' ) this.value=''"
												); 
											echo form_input($nama);
											?>
									
										</div>
									
										<div class="wrapper">
										
											<?php
												$email = array(
												'id' => 'txtEmail',
												'name'     => 'email',
												'maxlength'  => '30',
												'size'       => '30',
												'class'    => 'input',
												'value'    => 'Email',
												'onblur' => "if(this.value=='') this.value='Email'",
												'onfocus' =>"if(this.value =='Email' ) this.value=''"
												); 
											echo form_input($email);
											?>
									
										</div>
									
										<div class="textarea_box">
											<?php
												$isi = array(
												'name'     	=> 'isi',
												'cols'  	=> '1',
												'rows'      => '1',
												'class'		=> 'textarea_box',
												'value'    => 'Message',
												'onblur' => "if(this.value=='') this.value='Message'",
												'onfocus' =>"if(this.value =='Message' ) this.value=''"
												); 
											echo form_textarea($isi);
											?>
										
										</div>
										<?php $attributes = array('name' => 'submit', 'value'=>'submit'); ?>
										<?php echo form_submit('submit','submit')?>
							

								</div>
								<?php echo form_close();?>
								
								</div>
							</div>
						</div>
					</li>
										<?php
												 
									  foreach ($detail['data0'] as $key ) 
									   {
												echo"<li id=".$key->ID_detail.">";
														echo"<div class='box1'>";
															   echo"<div class='inner'>";
																		echo"<a href='#' class='close' data-type='close'><span></span></a>";
																		echo"<div id='scroll2'>";
																		if ($detail['data1'][$key->ID_detail]['0']['status']==0) {$statusSTR="TELAH HILANG";$str="Kehilangan";}elseif ($detail['data1'][$key->ID_detail]['0']['status']==1) {$statusSTR="TELAH DITEMUKAN";$str="Penemuan";}
																				echo"<h2>".$statusSTR." ".strtoupper($detail['data2']['katIndextoJenis'][$detail['data1'][$key->ID_detail]['0']['jenis']])."</h2>";
																				echo"<p class='pad_bot2'><strong>Ciri-Ciri :</strong></p>";
																				echo"<p class='pad_bot1'>".$detail['data1'][$key->ID_detail]['0']['keterangan']."</p></br>";
																				echo"<p class='pad_bot2'><strong>Lokasi ".$str." : </strong></p>";
																				echo"<p class='pad_bot1'>di sekitar ".$detail['data1'][$key->ID_detail]['2']['nama']."</p></br>";
																				echo"<p class='pad_bot2'><strong>Waktu ".$str." :</strong></p>";
																				echo"<p class='pad_bot1'>".$detail['data1'][$key->ID_detail]['0']['waktu']."</p></br>";
																		echo"</div>
																</div>
														</div>
												</li>";
										}
										?>
				</ul>
			</article>
			<!--content end-->
		</div>
	</div>
	<div class="block"></div>
</div>
<div class="bg1">
	<div class="main">
			<!--footer -->
			<footer>
				<div class="col_1">
					<div class="wrapper">
						<div class="bg_spinner"></div>
						<ul class="pagination">
							<li class="current">Background: &nbsp; <a href="<?=base_url();?>assets/images/bg_img1.jpg">1</a></li>
							<li><a href="<?=base_url();?>assets/images/bg_img2.jpg">2</a></li>
							<li><a href="<?=base_url();?>assets/images/bg_img3.jpg">3</a></li>
						</ul>
					</div>
					<ul id="icons">
						<li><a href="http://www.facebook.com" class="normaltip" title="Facebook"><img src="<?=base_url();?>assets/images/icon1.jpg" alt=""></a></li>
						<li><a href="http://www.twitter.com" class="normaltip" title="Twitter"><img src="<?=base_url();?>assets/images/icon2.jpg" alt=""></a></li>
						<li><a href="http://www.linkedin.com" class="normaltip" title="Linkedin"><img src="<?=base_url();?>assets/images/icon3.jpg" alt=""></a></li>
						<li><a href="http://www.delicious.com" class="normaltip" title="Delicious"><img src="<?=base_url();?>assets/images/icon4.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="col_2">
					<span>LAFIC UB</span> Copyright 2013<br>
					Website Template by <a rel="nofollow" href="http://www.liperkus.allalla.com/" target="_blank">TimSuksesPW_A.com</a> | <a rel="nofollow" href="http://www.liperkus.allalla.com/" target="_blank">liperkus.allalla.com</a>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
			<!--footer end-->
	</div>
</div>
<script>
$(window).load(function() {	
	$('.spinner').fadeOut();
	$('body').css({overflow:'inherit'})
})
</script>
</body>
</html>