<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
		<h1>
		<a href="<?php echo home_url('/'); ?>">
		<?php bloginfo('name'); ?>
		</a>
		<small><?php bloginfo('description'); ?></small>
		</h1>
		<div class="h_right">
			<form method="get" action="<?php esc_url(home_url('/')); ?>">
				<input type="text" name="s" placeholder="Search...">
			</form>
		</div>
		</div>
	</header>

	<nav class="nav main-nav">
		<div class="container">
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>
		<?php wp_nav_menu($args); ?>
		</div>
	</nav>