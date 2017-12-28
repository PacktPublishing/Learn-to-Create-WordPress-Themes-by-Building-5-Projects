<?php get_header(); ?>

<div class="container index">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Blog Posts</h3>
				</div>
				<div class="panel-body">
					<?php if(have_posts()): ?>
						<?php while(have_posts()) : the_post(); ?>
							<article class="post">
							<div class="row">
								<?php if(has_post_thumbnail()): ?>
								<div class="col-md-3">
									<div class="post-thumbnail">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
								<div class="col-md-9">
									<h2>
									<a href="<?php echo the_permalink(); ?>">
										<?php echo the_title(); ?>
									</a>
									</h2>
									
									<p class="meta">
										Posted At
										<?php the_time(); ?> on 
										<?php the_date(); ?> by 
										<strong><?php the_author(); ?></strong>
									</p>
									
									<div class="excerpt">
										<?php echo get_the_excerpt(); ?>
										<br>	
									</div>
									<a class="btn btn-default" href="<?php the_permalink(); ?>">
											Read More &raquo;
									</a>
	  
								</div>
								<?php else : ?>
								<div class="col-md-12">
									<h2>
										<a href="<?php echo the_permalink(); ?>">
										<?php echo the_title(); ?>
										</a>
									</h2>
									<p class="meta">
										Posted at
										<?php the_time(); ?> on 
										<?php the_date(); ?> by 
										<strong><?php the_author(); ?></strong>
									</p>
									<div class="excerpt">
										<?php echo get_the_excerpt(); ?>
									</div>
									<br>
									<a class="btn btn-default" href="<?php the_permalink(); ?>">
										Read More &raquo;
									</a>
								</div>
								<?php endif; ?>
							</div>
							</article>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>