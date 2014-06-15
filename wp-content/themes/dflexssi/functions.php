<?php

add_action( 'after_setup_theme', 'dflexssi_setup' );
function dflexssi_setup() {
	load_theme_textdomain( 'dflexssi', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'dflexssi' ),
			'footer-menu' => __('Footer Menu', 'dflexssi')
		 )
		);
}

add_action( 'wp_enqueue_scripts', 'dflexssi_load_scripts' );
function dflexssi_load_scripts() {
	if(!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
		wp_register_script('jsresponsive', get_bloginfo("template_url") . '/mnc-includes/js/responsiveslides.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('jsresponsive');
	}
}

add_action('wp_head', 'dflexssi_add_custom_js_script');
function dflexssi_add_custom_js_script() {
	$output = '
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
  </script>';

  echo $output;

}

add_action( 'comment_form_before', 'dflexssi_enqueue_comment_reply_script' );
function dflexssi_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'dflexssi_title' );
function dflexssi_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_action('wp_head', 'dflexssi_append_css');
function dflexssi_append_css() {
	$output = '';
	$output .= '<link rel="stylesheet" href="' . get_bloginfo('stylesheet_url') . '" />' . "\n";
	$output .= '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/mnc-includes/css/zerogrid.css" />' . "\n";
	$output .= '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/mnc-includes/css/style.css" />' . "\n";
	$output .= '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/mnc-includes/css/responsive.css" />' . "\n";
	$output .= '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/mnc-includes/css/responsiveslides.css" />' . "\n";

	echo $output;

}

add_filter( 'wp_title', 'dflexssi_filter_wp_title' );
function dflexssi_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'dflexssi_widgets_init' );
function dflexssi_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'dflexssi' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}

function dflexssi_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}

add_filter( 'get_comments_number', 'dflexssi_comments_number' );
function dflexssi_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

/* breadcrumbs */
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> / </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> / </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> / </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
