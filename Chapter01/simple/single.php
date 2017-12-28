<?php get_header(); ?>

<div class="container">
<div class="main">

<?php if(have_posts()) : ?>
	<?php while(have_posts()): the_post(); ?>
		<article class="post">
		<h3>
		<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?></h3>
		</a>
		<div class="meta">
		Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
        </div>
		
		<?php if(has_post_thumbnail()) : ?>
			<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		
		<?php the_content(); ?>
		</article>
		
    <?php endwhile; ?>
<?php else : ?>
	<?php echo wpautop('Sorry, No posts were found'); ?>
<?php endif; ?>

<?php comments_template(); ?>
</div>


<?php get_footer(); ?>