<div class="container"> 
	 	<?php foreach($data_produk as $row){ ?>
	 	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
					<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="<?php echo base_url(); ?>assets/site/js/imagezoom.js"></script>
										  <script defer src="<?php echo base_url(); ?>assets/site/js/jquery.flexslider.js"></script>
										<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/flexslider.css" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->
							  <ul class="slides">
								<li>
									<div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/admin/upload/<?php echo $row['foto']; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								
								
							  </ul>
							<div class="clearfix"></div>
					</div>						
				</div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4><?php echo $row['judul']; ?></h4>
				<div class="cart-b">
					<div class="left-n "><?php echo currency_format($row['harga']); ?></div>
				    <a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				    <div class="clearfix"></div>
				 </div>
				 <h6>Stock :<?php echo $row['jumlah']; ?></h6>
				 <h6>Merk :<?php echo $row['merk']; ?></h6>
				  <h6>Di Update :<?php echo date('d M Y H:i:s',strtotime($row['tgl_input_pro'])); ?></h6>
			   	<p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/site/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/site/images/twitter.png" title="Twitter"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/site/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/site/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
          	    <div class="clearfix"> </div>
          	   </div>
          	   <ul id="flexiselDemo1">
			<li><img src="<?php echo base_url(); ?>assets/site/images/pi.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="<?php echo base_url(); ?>assets/site/images/pi1.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="<?php echo base_url(); ?>assets/site/images/pi2.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="<?php echo base_url(); ?>assets/site/images/pi3.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="<?php echo base_url(); ?>assets/site/images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/site/js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Product Details</h3>
				     	<p class="m_text"> </b> <?php echo $row['ket']; ?></p>
				     </div>	
				     <?php } ?>
          	   </div>
          	   
          	   <!---->