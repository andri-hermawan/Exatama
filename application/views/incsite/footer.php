<?php foreach($data_setting as $row) { ?>
<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="<?php echo $row['twitter']; ?>"><span> </span></a></li>
						<!-- <li><a href="#"><span> </span></a></li> -->
						<li><a href="<?php echo $row['facebook']; ?>"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6><?php echo $row['judul_blog']; ?></h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						
					</ul>

				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>Portfolio</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>Customer Service</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6><?php echo $row['information']; ?></h6>
					<ul>
						<!-- <li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li>nisi, dignissim</li>
						<li>gravida at.</li>
						<li class="phone">PH : 6985792466</li> -->
						<li class="temp"><p>&copy 2015 inspirasibaduy.com<a href="http://w3layouts.com/" target="_blank"></a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>
