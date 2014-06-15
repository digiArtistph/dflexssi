<?php

add_action( 'after_setup_theme', 'dflexssi_setup' );

function dflexssi_setup() {
	load_theme_textdomain( 'dflexssi', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'dflexssi' ) )
		);
}
add_action( 'wp_enqueue_scripts', 'dflexssi_load_scripts' );

function dflexssi_load_scripts() {
	wp_enqueue_script( 'jquery' );
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