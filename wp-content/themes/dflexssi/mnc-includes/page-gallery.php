<?php

 	/*
		Template Name: Gallery Page
 	*/
?>

<?php get_header(); ?>

<!--------------Content--------------->
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
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga1.jpg"/>
				<p><a href="#">PROJECT 01</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga2.jpg"/>
				<p><a href="#">PROJECT 02</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga3.jpg"/>
				<p><a href="#">PROJECT 03</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga4.jpg"/>
				<p><a href="#">PROJECT 04</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga5.jpg"/>
				<p><a href="#">PROJE	T 05</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga6.jpg"/>
				<p><a href="#">PROJECT 06</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga7.jpg"/>
				<p><a href="#">PROJECT 07</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/ga8.jpg"/>
				<p><a href="#">PROJECT 08</a></p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>