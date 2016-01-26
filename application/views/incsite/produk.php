
					<?php foreach($rekomen as $row) { ?>
					<a href="<?php echo base_url(); ?>site/detail/produk/<?php echo $row['id_produk']; ?>">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     	
	   		     		<div class=" elit-grid"> 
		   		     		<h4><?php echo $row['judul']; ?></h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p><?php echo currency_format($row['harga']); ?> </p>
							<span class="on-get">GET NOW</span>

						</div>		
						<img class="img-responsive shoe-left" src="<?php echo base_url(); ?>assets/admin/upload/<?php echo $row['foto']; ?>" alt=" " />
						
						<div class="clearfix"> </div>
	   		     	</div>
	   		     	<?php } ?>
					
					<div class="clearfix"> </div>
	   		     </div>
	   		     <div class="products">
	   		     	<h5 class="latest-product">LATEST PRODUCTS</h5>	
	   		     	  <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
	   		     <div class="clearfix"> </div>
				 </div>

	   		     <div class="product-left">
	   		     	 <?php foreach($data_produk as $row) { ?>
	   		     	
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="single.html"><img class="img-responsive chain" src="<?php echo base_url(); ?>assets/admin/upload/<?php echo $row['foto']; ?>" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="single.html"><?php echo $row['judul']; ?></a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">300$</span>
		   		     				<span class="reducedfrom"><?php echo currency_format($row['harga']); ?></span>
		   		     				 <!--  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span> -->
	   		     				</div>
	   		     				<a class="now-get get-cart" href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>">Lihat Detail</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	 <?php } ?>
	   		     	 <div class="pagination-area">
							<ul class="pagination">
								<?php echo $pages; ?>
							</ul>
					</div>
	   		     	 <div class="clearfix"> </div>
	   		     </div>
	   		     <div class="clearfix"> </div>
				
	   		 
