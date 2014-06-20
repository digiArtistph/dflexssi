<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?>	</p>
				</section>
			</div>
		</div>

	<div class="row block05">
		<div id="main-content" class="col-2-3">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="heading">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="info">Posted by <?php ucwords(the_author()); ?> | <?php comments_number(); ?> | <?php the_time('F j, Y'); ?></div>
			</div>
			<div class="content">
				<?php the_post_thumbnail(); ?>
				<p><?php the_content(); ?></p>

			</div>
		</article>	
	<?php endwhile; endif; ?>
	</div>
	<div id="sidebar" class="col-1-3">
		<section>
			<div class="heading"><h2>About us</h2></div>
				<div class="content">
					<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb1.jpg" />
					<p>D-Flex Strategic Solutions Inc.is the Sole Distributor of Vivanco Products in the Philippines.</p>
				</div>
		</section>

		<?php get_sidebar(); ?>

		<section>
			<div class="heading"><h2>Popular Post</h2></div>
			<div class="content">
				<div class="post">
					<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb1.png"/>
					<h4><a href="http://vivanco.fusudesign.com/vivanco-asia-training-successfully-held-in-hong-kong/">Vivanco Asia Training Held in Hong Kong</a></h4>
					<p>December 16 ,2013</p>
				</div>
				<div class="post">
					<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb2.png"/>
					<h4><a href="http://vivanco.fusudesign.com/connecting-macau-and-germany-by-vivanco/">Connecting Macau and Germany by Vivanco</a></h4>
					<p>November 21 ,2013</p>
				</div>
				<div class="post">
					<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb3.png"/>
					<h4><a href="http://vivanco.fusudesign.com/the-dawn-of-a-new-one-stop-solutions-provider/">The Dawn of a New One Stop Solutions Provider</a></h4>
					<p>June 23 ,2013</p>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
</section>
<?php get_footer(); ?>