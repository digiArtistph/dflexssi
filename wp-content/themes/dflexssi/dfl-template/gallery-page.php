<?php
/*
	 Template Name: Gallery Page
	 Descripttion: Displays photos
 */
 ?>
 <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo get_template_directory_uri(); ?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.js"></script>
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
	<div id="logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></a></div>
	
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
				<li><a href="https://www.facebook.com/pages/D-Flex-Strategic-Solutions-Inc/537228659688698"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-Facebook-icon.png" title="Facebook"/></a></li>
				<li><a href="https://twitter.com/Dflex_Strategic"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-Twitter-icon.png" title="Twitter"/></a></li>
				<li><a href="http://ph.linkedin.com/pub/dflex-strategic-solutions-inc/85/b54/5a9"><img src="<?php echo get_template_directory_uri(); ?>/images/Active-linkedin-icon.png" title="LinkedIn"/></a></li>
			</ul>
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
	 		</div>

</div>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p>Home >> Gallery</p>
				</section>
			</div>
		</div>
		
		<div class="row block06">
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga1.jpg"/>
				<p><a href="#">PROJECT 01</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga2.jpg"/>
				<p><a href="#">PROJECT 02</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga3.jpg"/>
				<p><a href="#">PROJECT 03</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga4.jpg"/>
				<p><a href="#">PROJECT 04</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga5.jpg"/>
				<p><a href="#">PROJECT 05</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga6.jpg"/>
				<p><a href="#">PROJECT 06</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga7.jpg"/>
				<p><a href="#">PROJECT 07</a></p>
			</div>
			<div class="col04">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ga8.jpg"/>
				<p><a href="#">PROJECT 08</a></p>
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