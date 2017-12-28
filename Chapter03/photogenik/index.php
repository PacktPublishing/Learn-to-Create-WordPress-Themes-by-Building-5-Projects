<?php get_header(); ?>
					
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
      
  <?php else : ?>
    <?php echo wpautop('Sorry, there are no posts'); ?>
  <?php endif; ?>
<?php get_footer(); ?>