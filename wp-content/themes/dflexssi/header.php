<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>js/html5.js"></script>
	<script src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>js/css3-mediaqueries.js"></script>
<![endif]-->

<link href='<?php echo get_stylesheet_directory_uri(); ?>/mnc-includes/images/favicon.ico' rel='icon' type='image/x-icon'/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--------------Header--------------->
<header> 
	<div id="logo"><a href=""><img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/logo.png"/></a></div>
	
	<?php get_template_part('navigation', 'top'); ?>
</header>

<div class="social">
		<div class="shareicons">
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/pages/D-Flex-Strategic-Solutions-Inc/537228659688698"><img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/Active-Facebook-icon.png" title="Facebook"/></a></li>
				<li><a target="_blank" href="https://twitter.com/Dflex_Strategic"><img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/Active-Twitter-icon.png" title="Twitter"/></a></li>
				<li><a target="_blank" href="http://ph.linkedin.com/pub/dflex-strategic-solutions-inc/85/b54/5a9"><img src="<?php echo get_bloginfo('template_url') . '/mnc-includes/'; ?>images/Active-linkedin-icon.png" title="LinkedIn"/></a></li>
			</ul>
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>

</div>