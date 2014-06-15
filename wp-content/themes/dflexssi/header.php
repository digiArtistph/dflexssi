<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>


	
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
<body <?php body_class(); ?>>
<!------------Header--------------->
<header> 
	<div id="logo"><a href=""><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"/></a></div>
	<nav>
	<?php
	$defaults = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => false,
		'container_class' => 'hello',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	wp_nav_menu( $defaults );

	?>
	</nav>
</header>
