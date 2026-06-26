<?php get_header(); ?>
	<div id="layout-inner"><!-- BEGIN INNER LAYOUT -->
		<div class="layout-inner-left">
			<?php if (have_posts()) : ?>
				<?php $count = 0; ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++; ?>
				<?php if ($count == 1) : ?>
					<h1 class="playmaker-topstory"><?php single_month_title(' ') ?></h1>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array( 402,210 ), array( 'class' => 'img-topstory' )); ?></a>
					<div style="clear: both;"></div>
					<div class="topstory">
						<h1 class="topstory-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content_rss('', TRUE, '', 26); ?>
					</div>	
					<div style="clear: both;"></div>
					<h1 class="playmaker-list">More From <?php single_month_title(' ') ?></h1>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array( 80,80 ), array( 'class' => 'img-thumb' )); ?></a>	
					<h1 class="normal"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content_rss('', TRUE, '', 21); ?>
					<div style="clear: both; margin: 0px 0px 5px 0px;"></div>
				<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
					<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			<p><?php posts_nav_link(' ', __('&laquo; Back &nbsp;'), __('&nbsp;More &raquo;')); ?></p>
		</div>
		<div class="layout-inner-middle">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Inner Column') ) : else : ?>
				<div class="shadey"><img src="<?php bloginfo('template_directory'); ?>/images/icon_alert.png" align="left" alt="alert" style="padding: 0px 10px 10px 0px; border:0px;" />This is the <b>INNER COLUMN</b> and is ready for widgets, <a href="<?php echo get_settings('home'); ?>/wp-admin/widgets.php/" target="_self" title="Click to add widgets"><b>click here</b></a> to add some now!</div> 
			<?php endif; ?>
		</div>
		<div class="layout-inner-right">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Side Column') ) : else : ?>
				<div class="shadey"><img src="<?php bloginfo('template_directory'); ?>/images/icon_alert.png" align="left" alt="alert" style="padding: 0px 10px 10px 0px; border:0px;" />This is the <b>SIDE COLUMN</b> and is ready for widgets, <a href="<?php echo get_settings('home'); ?>/wp-admin/widgets.php/" target="_self" title="Click to add widgets"><b>click here</b></a> to add some now!</div> 
			<?php endif; ?>
		</div>
	</div><!-- END INNER LAYOUT -->
<?php get_footer(); ?>