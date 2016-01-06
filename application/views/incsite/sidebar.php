<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		
		<ul class="kid-menu ">
				<?php foreach($kategoriq as $row) { ?>
				<li><a href="<?php echo base_url()."site/kategori/".$row['id_kat']; ?>"> <span class="pull-right">(<?php echo $total_kat[0]['totalkategori']; ?>)</span><?php echo $row['kategori']; ?></a></li>
				<?php } ?>
				
			</ul>
	</ul>

	</br>

					<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">Brands</h3>
		 <ul class="menu">
		
				
		<ul class="kid-menu ">
				
				<?php foreach($merk as $row) { ?>
				<li><a href="<?php echo base_url()."site/merk/".$row['id_merk']; ?>"> <span class="pull-right">(13)</span><?php echo $row['merk']; ?></a></li>
				<?php } ?>
			</ul>
	</ul>
					</div>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
					<!-- <div class="grid-chain-bottom chain-watch">
		   		     		<h6><a href="single.html" align="center">Contact US</a></h6>  		     			   		     										
	   		     		</div> -->
	   		     		<a href="single.html"><img class="img-responsive chain" src="<?php echo base_url(); ?>assets/site/images/contak.jpg" alt=" " /></a>	</br>   		     		
	   		     		<a href="single.html"><img class="img-responsive chain" src="<?php echo base_url(); ?>assets/site/images/pembayaran.jpg" alt=" " /></a>	   		     		
	   		     		
	   		     	</div>
	   		     	<!--  <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>  -->	
			</div>
	   		    <div class="clearfix"> </div>   