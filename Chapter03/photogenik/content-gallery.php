<div class="w3-col m4 l4 pic">
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
     	 <?php 
   			 $attr = array(
    			'class' => 'w3-animate-opacity w3-hover-opacity'
   			 ); 
   		?>
    </div>
    <a href="<?php echo the_permalink(); ?>">
    	<?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
 	</a>
  <?php endif; ?>
  <?php the_content(); ?>
</div>