<?php

 	/*
		Template Name: Contact Page
 	*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : 
	while ( have_posts() ) : 
		the_post(); ?>
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p><?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(array('show_browse' => false, 'separator' => '>>')); ?></p>
				</section>
			</div>
		</div>
		<div class="row block06">
			<div id="main-content" class="col_1_2_3">
				<?php the_content(); ?>
			</div>
	<?php endwhile; ?>
	<?php endif;?>
		</div>
	</div>
</section>
<?php get_footer(); ?>