<?php
/*
	Template Name: Home Page
	Description: Home page for the site
*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>D-Flex Strategic Solutions Inc.</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri() ?>/js/html5.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo get_template_directory_uri() ?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 962,
        namespace: "centered-btns"
      });
    });
  </script>
    
</head>
<body>
<!--------------Header--------------->
<header> 
	<div id="logo"><a href=""><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"/></a></div>
	
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="single.html">About</a></li>
			<li><a href="single.html">Contact</a></li>
		</ul>
	</nav>
</header>

<div class="social">
		<div class="shareicons">
			<ul>
				<li><a href="https://www.facebook.com/pages/D-Flex-Strategic-Solutions-Inc/537228659688698"><img src="<?php echo get_template_directory_uri() ?>/images/Active-Facebook-icon.png" title="Facebook"/></a></li>
				<li><a href="https://twitter.com/Dflex_Strategic"><img src="<?php echo get_template_directory_uri() ?>/images/Active-Twitter-icon.png" title="Twitter"/></a></li>
				<li><a href="http://ph.linkedin.com/pub/dflex-strategic-solutions-inc/85/b54/5a9"><img src="<?php echo get_template_directory_uri() ?>/images/Active-linkedin-icon.png" title="LinkedIn"/></a></li>
			</ul>
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>

</div>

<!--------------Slideshow--------------->

<section class="featured">
	<div class="rslides_container">
		<ul class="rslides" id="slider">
			<li><img src="<?php echo get_template_directory_uri() ?>/images/slide1.jpg"/></li>
			<li><img src="<?php echo get_template_directory_uri() ?>/images/slide3.jpg"/></li>
			<li><img src="<?php echo get_template_directory_uri() ?>/images/slide2.jpg"/></li>
			<li><img src="<?php echo get_template_directory_uri() ?>/images/slide4.jpg"/></li>
			<li><img src="<?php echo get_template_directory_uri() ?>/images/slide5.jpg"/></li>
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
						<img src="<?php echo get_template_directory_uri() ?>/images/laptop.png"/>
						<h2>Online Store</h2>
					</div>
					<div class="content">
						<p>E-commerce Online Store.</p>
						<p class="more"><a class="button" href="http://www.dflexssi.com/">Get Started</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_template_directory_uri() ?>/images/chart.png"/>
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
						<img src="<?php echo get_template_directory_uri() ?>/images/history.png"/>
						<h2>Download Page</h2>
					</div>
					<div class="content">
						<p>Download this Price List if you are a System Integrator.</p>
						<p class="more"><a class="button" href="#">Download Now</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						<img src="<?php echo get_template_directory_uri() ?>/images/web.png"/>
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
						<img src="<?php echo get_template_directory_uri() ?>/images/thumb2.jpg" />
						<p>Philconstruct is where hundreds of the best suppliers from countries like Australia, China, Italy, South Korea, Singapore, Thailand, Turkey, the United Kingdom, the United States, and more choose to launch their products and technologies in the Philippine market.
						<a class="more" href="blog.html">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">2nd Philippine Professional Summit</div>
					<div class="content">
						<img src="<?php echo get_template_directory_uri() ?>/images/thumb1.jpg" />
						<p>“Empowering Professionals Towards ASEAN Economic Community 2015”  is the theme of the 2nd Philippine Professional Summit held last October 15 to 17, 2013 at the Fiesta Pavilion of the Manila Hotel.
						<a class="more" href="blog.html">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">The Contract Signing</div>
					<div class="content">
						<img src="<?php echo get_template_directory_uri() ?>/images/thumb3.jpg" />
						<p>DFLEX and VIVANCO have recently signed a contract for distribution partnership which enables DFLEX to market and distribute Vivanco Products for Structure Cabling solutions in the Philippines.
						<a class="more" href="blog.html">Read more</a></p>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrapfooter">
	<p>Copyright © 2014 - <a href="http://www.dflexssi.com/" target="_blank">D-Flex Strategic Solutions Inc.</p>
	</div>
</footer>

</body></html>