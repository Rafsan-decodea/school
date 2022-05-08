<?php include 'header.php'?>		

			<!-----------------scrool close ------------------>
			
			
			<!----------__________ add start ___________------------>
			
			<div class="row">				
				<div class="col-md-12">
					<div class="add">
											</div>
				</div>
			</div>
			<!----------__________ add close ___________------------>	
			
					
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 ">
				
								
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">

													
							<h4 class="catagory_title"> প্রতিষ্ঠানের ইতিহাস</h4>
							
							<div class="History">
								
								<img width="741" height="320" src="pages/wp-content/uploads/2018/04/5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://themesbazar.net/educational/wp-content/uploads/2018/04/5.jpg 741w, http://themesbazar.net/educational/wp-content/uploads/2018/04/5-300x130.jpg 300w" sizes="(max-width: 741px) 100vw, 741px" />								
								<p> <?php echo $data['history']; ?></a></span></p>
							</div>
				     	</div>
					</div>
						</br>
					
								
					<div class="row">

						<div class="col-lg-6 col-md-6 col-sm-6">
													
							<h4 class="catagory_title"> অধ্যক্ষের বাণী</h4>
							
							<div class="profile">
								<?php 
								 
								  $sql = "select ";
								
								?>
								
								<img width="400" height="500" src="pages/wp-content/uploads/2018/04/12.gif" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								
								<p> <?php echo $data['principletalk'];?></a></span></p>
							</div>
													</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
													
							<h4 class="catagory_title"> উপধ্যক্ষের বাণী</h4>
							
							<div class="profile">
								<?php
								  
								  $sql = "select preprincipleimage	 from posts ";
								  $result = $db->query($sql);
								  $image = mysqli_fetch_array($result);

								?>
								<img width="400" height="500" src="<?php echo "/school/images/". $image['preprincipleimage'] ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								
								<p><?php echo $data['preprincipletalk'];?> </a></span></p>
							</div>
													</div>

					</div>
					
					   
							
					</br>
					
				
					<div class="row">
					
					<!----------__________ homemenu one start ___________------------>
					
					
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4 class="catagory_title_1"> ছাত্রছাত্রীদের তথ্য</h4>
									<div class="news_information">
										<img src="pages/wp-content/themes/educationaltheme/images/menu01.jpg" >
										<div class="menu-student-information-container"><ul id="menu-student-information" class="menu"><li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%86%e0%a6%b8%e0%a6%a8-%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be/index.html">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
<li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-117"><a href="%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af/index.html">ভর্তি তথ্য</a></li>
<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a href="%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6/index.html">নোটিশ</a></li>
<li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%a8/index.html">রুটিন</a></li>
<li id="menu-item-114" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-114"><a href="category/%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a7%80/index.html">কৃতি শিক্ষার্থী</a></li>
</ul></div>									</div>
								</div>
							</div>
						</div>
						
						
						
						<!----------__________ homemenu two start ___________------------>
					
					
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h4 class="catagory_title_2"> শিক্ষকদের তথ্য</h4>
							<div class="news_information">
								<img src="pages/wp-content/themes/educationaltheme/images/menu02.jpg" >
								<div class="menu-teachers-information-container"><ul id="menu-teachers-information" class="menu"><li id="menu-item-120" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-120"><a href="category/%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6/index.html">শিক্ষকবৃন্দ</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="%e0%a6%b6%e0%a7%82%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a6%aa%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be/index.html">শূণ্যপদের তালিকা</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119"><a href="category/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95/index.html">প্রাক্তন প্রধান শিক্ষক</a></li>
<li id="menu-item-122" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-122"><a href="category/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">কর্মকর্তা কর্মচারী</a></li>
<li id="menu-item-123" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-123"><a href="category/%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%be%e0%a6%b2%e0%a6%a8%e0%a6%be-%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6/index.html">পরিচালনা পরিষদ</a></li>
</ul></div>							</div>
						</div>
					</div>
				</div>
			</div>
					
					
					<!----------__________ home menu Three start ___________------------>
					
					
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="catagory_title_3"> ডাউনলোড</h4>
								<div class="news_information">
								<img src="pages/wp-content/themes/educationaltheme/images/menu03.jpg" >
                         	   <ul>
															
                          	      <li><a href="download/%e0%a7%a7%e0%a6%ae-%e0%a6%b8%e0%a6%be%e0%a6%ae%e0%a7%9f%e0%a6%bf%e0%a6%95%e0%a6%bf-%e0%a6%aa%e0%a6%b0%e0%a7%80%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a6%b0-%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf/index.html">১ম সাময়িকি পরীক্ষার রুটিন ডাউনলোড</a></li>
                         	      							
                          	      <li><a href="download/%e0%a6%8f%e0%a6%b8%e0%a6%8f%e0%a6%b8%e0%a6%b8%e0%a6%bf-%e0%a6%aa%e0%a6%b0%e0%a7%80%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a6%b0-%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%a8-%e0%a6%a1%e0%a6%be/index.html">এসএসসি পরীক্ষার রুটিন ডাউনলোড</a></li>
                         	      							
                          	      <li><a href="download/%e0%a6%9b%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%b0-%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6-%e0%a6%a1%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a6%b2%e0%a7%8b%e0%a6%a1/index.html">ছুটির নোটিশ ডাউনলোড</a></li>
                         	      							
                          	      <li><a href="download/%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%ab%e0%a6%b0%e0%a6%ae-%e0%a6%a1%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a6%b2%e0%a7%8b%e0%a6%a1-2/index.html">ভর্তি ফরম ডাউনলোড</a></li>
                         	      							
                          	      <li><a href="download/%e0%a6%aa%e0%a6%b0%e0%a7%80%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a6%b0-%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%a8-%e0%a6%a1%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a6%b2%e0%a7%8b%e0%a6%a1/index.html">পরীক্ষার রুটিন ডাউনলোড</a></li>
                         	       
                       		     </ul>
                     		  </div>
						</div>
					</div>
				</div>
						
						
						<!----------__________ homemenu four start ___________------------>
						
						
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="catagory_title_4"> একাডেমীক তথ্য </h4>
									<div class="news_information">
										<img src="pages/wp-content/themes/educationaltheme/images/menu04.jpg" >
										<div class="menu-academic-information-container"><ul id="menu-academic-information" class="menu"><li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="%e0%a6%95%e0%a6%95%e0%a7%8d%e0%a6%b7-%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be/index.html">কক্ষ সংখ্যা</a></li>
<li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125"><a href="%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%86%e0%a6%b8%e0%a6%a8-%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be/index.html">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
<li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126"><a href="%e0%a6%9b%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be/index.html">ছুটির তালিকা</a></li>
<li id="menu-item-128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="%e0%a6%ae%e0%a6%be%e0%a6%b2%e0%a7%8d%e0%a6%9f%e0%a6%bf%e0%a6%ae%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a7%9f%e0%a6%be-%e0%a6%95%e0%a7%8d%e0%a6%b2%e0%a6%be%e0%a6%b8%e0%a6%b0%e0%a7%81%e0%a6%ae/index.html">মাল্টিমিডিয়া ক্লাসরুম</a></li>
<li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a6%a8-%e0%a6%b8%e0%a7%81%e0%a6%ac%e0%a6%bf%e0%a6%a7%e0%a6%be/index.html">যানবাহন সুবিধা</a></li>
</ul></div>									</div>
								</div>
							</div>
						</div>
					</div>
					
				<!--------------add option start----------------------->
						
					<div class="row">				
						<div class="col-md-12">
							<div class="add">
															</div>
						</div>
					</div>
					
				<!--------------add option close----------------------->				
				</div>
				
				
				<div class="col-lg-3 col-md-3 col-sm-3">
				
				<div class="academy_information">
					<div class="menu-sidebar-container"><ul id="menu-sidebar" class="menu"><li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af/index.html">ভর্তি তথ্য</a></li>
<li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%ab%e0%a6%b0%e0%a6%ae/index.html">ভর্তি ফরম</a></li>
<li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a href="%e0%a6%ab%e0%a6%9f%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">ফটোগ্যালারী</a></li>
<li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93-%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">ভিডিও গ্যালারী</a></li>
</ul></div>					
                </div>
				
									
				<!----------__________ Notice start ___________------------>
			
					
				<h4 class="catagory_title_5"> নোটিশ বোর্ড</h4>	
				<div class="notice_box">
			
					<marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						
					     <ul>
						 <?php 
				   
				           $sql = "select * from notice_board";
				           $result = $db->query($sql);
                           while($row = $result->fetch_assoc())
				               {

				           ?>
							<li><?php echo $row['notice'];?></a></li>
			            	<?php } ?>
                         </ul>
					</marquee>
                </div>
				
			
				
				<!----------__________ facebook start ___________------------>
				

									
					<div class="facebook_title"><a href="#">ফেইজবুক পেজ</a></div>
						<div class="fb-root">
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
							  fjs.parentNode.insertBefore(js, fjs);
							  }(document, 'script', 'facebook-jssdk'));
							</script>
						<div class="fb-page" data-href="https://www.facebook.com/softechcomputertraningcenter" 		data-tabs="timeline" data-width="390" data-height="120" data-small-header="true" 
						data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
				   </div>
				   
								   
			 				
				<!----------__________ facebook close ___________------------>
				
				
			<!----------__________ add start ___________------------>
			
			<div class="row">				
				<div class="col-md-12">
					<div class="add">
											</div>
				</div>
			</div>
			
			<!----------__________ add close ___________------------>
			
			
			<!----------__________ Sidemenu Two start ___________------------>
				
				
								
				<h4 class="catagory_title_5"> অফিসিয়াল লিংক</h4>	
				
				<div class="notice_box">
					<div class="menu-official-link-container"><ul id="menu-official-link" class="menu"><li id="menu-item-137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137"><a href="http://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>
<li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138"><a href="http://www.educationboardresults.gov.bd/">এসএসসি/এইচএসসি ফলাফল</a></li>
<li id="menu-item-139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139"><a href="http://banbeis.gov.bd/new/">ব্যানবেইজ</a></li>
<li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a href="http://www.seqaep.gov.bd/">সেকায়েপ</a></li>
</ul></div> 
					
                </div>
				
				   
							
			
			<!----------__________ Sidemenu Three start ___________------------>
			
				
							
				<h4 class="catagory_title_5"> গুরুত্বপূর্ণ তথ্য</h4>	
				
				<div class="notice_box">
					<div class="menu-important-link-container"><ul id="menu-important-link" class="menu"><li id="menu-item-142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="http://www.ebook.gov.bd/">ই-বুক</a></li>
<li id="menu-item-143" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a href="https://www.teachers.gov.bd/">শিক্ষক বাতায়ন</a></li>
<li id="menu-item-144" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="http://mmc.e-service.gov.bd/">মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট</a></li>
</ul></div> 
					
                </div>
				
				   
							
				</div>
				
			</div>

		</div>	
	</section>
	
	<?php include 'fotter.php'?>	

	</body>

<!-- Mirrored from themesbazar.net/educational/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 May 2022 06:10:33 GMT -->
</html>


