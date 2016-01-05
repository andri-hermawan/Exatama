

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
		<?php
			    foreach($data as $post): 
			    	$string =  word_limiter($post->isi, 80);
				?>
		<article>
                <h2>
                   <?php echo $post->judul; ?>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span> By <?php echo $post->penulis; ?> on <?php echo $post->tanggal; ?></p>
                <hr>
               <img class="img-responsive" src="<?php echo base_url();?>assets/images/<?php echo $post->img; ?>" alt="">
                <hr>
                <p><?php echo $string; ?></p>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>home/read/<?php echo $post->id_post; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
		
                <hr>
		<?php endforeach; ?>
		</article>
            </div>
