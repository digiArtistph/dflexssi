<?
	/*
		Template Name: Home Page
	*/	
?>
<?php get_header(); ?>

<!--------------Slideshow--------------->

<section class="featured">
	<div class="rslides_container">
		<ul class="rslides" id="slider">
			<li><img src="<?php echo get_bloginfo('template_url')  . '/mnc-includes/'; ?>images/slide1.jpg"/></li>
			<li><img src="<?php echo get_bloginfo('template_url')  . '/mnc-includes/'; ?>images/slide2.jpg"/></li>
			<li><img src="<?php echo get_bloginfo('template_url')  . '/mnc-includes/'; ?>images/slide3.jpg"/></li>
			<li><img src="<?php echo get_bloginfo('template_url')  . '/mnc-includes/'; ?>images/slide4.jpg"/></li>
			<li><img src="<?php echo get_bloginfo('template_url')  . '/mnc-includes/'; ?>images/slide5.jpg"/></li>
		</ul>
	</div>
</section>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">		
		<div class="row block01">
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/laptop.png"/>
						<h2>Online Store</h2>
					</div>
					<div class="content">
						<p>E-commerce Online Store.</p>
						<p class="more"><a class="button" href="http://store.dflexssi.com/">Get Started</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/chart.png"/>
						<h2>Technology Trends</h2>
					</div>
					<div class="content">
						<p>Structured Cabling using both UTP and Fibre optic cables is, today, the accepted cabling backbone of any building complex, office installation or manufacturing plant.</p>
						<p class="more"><a class="button" href="http://www.ind-safety.com/editorial/2013/05/IS1305_Client-Tech_02.html">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/history.png"/>
						<h2>Download Page</h2>
					</div>
					<div class="content">
						<p>Download this Price List if you are a System Integrator.</p>
						<p class="more"><a class="button" href="<?php echo get_bloginfo(); ?>/download">Download Now</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/web.png"/>
						<h2>Global Condition</h2>
					</div>
					<div class="content">
						<p>A newly released “hot topic study” from BSRIA charts the global structured cabling market through the year 2020, concluding that by then the ...</p>
						<p class="more"><a class="button" href="http://www.cablinginstall.com/articles/2013/09/bsria-market-2020.html">Read more</a></p>
					</div>
				</section>
			</div>
		</div>
		
		<div class="row block02">
			<div class="col16">
				<section>
					<p></p>
				</section>
			</div>
		</div>
		
		<div class="row block03">
			<div class="col-1-3">
				<section>
					<div class="heading">Philconstruct 2013</div>
					<div class="content">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb2.jpg" />
						<p>Philconstruct is where hundreds of the best suppliers from countries like Australia, China, Italy, South Korea, Singapore, Thailand, Turkey, the United Kingdom, the United States, and more choose to launch their products and technologies in the Philippine market.
						<a class="more" href="<?php echo get_bloginfo('url'); ?>/blog">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">2nd Philippine Professional Summit</div>
					<div class="content">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb1.jpg" />
						<p>“Empowering Professionals Towards ASEAN Economic Community 2015”  is the theme of the 2nd Philippine Professional Summit held last October 15 to 17, 2013 at the Fiesta Pavilion of the Manila Hotel.
						<a class="more" href="<?php echo get_bloginfo('url'); ?>/blog">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">The Contract Signing</div>
					<div class="content">
						<img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/thumb3.jpg" />
						<p>DFLEX and VIVANCO have recently signed a contract for distribution partnership which enables DFLEX to market and distribute Vivanco Products for Structure Cabling solutions in the Philippines.
						<a class="more" href="<?php echo get_bloginfo('url'); ?>/blog">Read more</a></p>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>