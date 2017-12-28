<article class="post">
<h2><?php echo the_title(); ?></h2>
<p class="meta">
Posted at <?php the_time(); ?> on <?php the_date(); ?> by
<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
<?php the_author(); ?></a>
</p>
<?php if(has_post_thumbnail()) : ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif; ?>

<br/>

<?php the_content(); ?>
</article>