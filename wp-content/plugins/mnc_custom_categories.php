<?php
/**
 * Plugin Name: MNC Custom Categories
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: This is a custom categories widget
 * Version: 1.0
 * Author: Kenneth "digiArtist_ph" P. Vallejos
 * Author URI: https://github.com/digiArtistph/mugsandcoffeecodex
 */

class Mnc_Custom_Categories extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		$optons = array('classname' => 'mnc_custom_categories', 'description' => 'Custom Categories');
		parent::__construct('mnc_custom_categories', 'MNC Custom Categories', $options);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array 
	 * @param array 
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$args = array('title_li' => '');
		?>
			<section>
				<div class="heading"><h2>Categories</h2></div>
			</section>
			<div class="content">
				<ul>
		<?php
		wp_list_categories( $args );
		?>
				</ul>
			</div>
		<?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array  The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array  The new options
	 * @param array  The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action('widgets_init', function(){
	register_widget('Mnc_Custom_Categories');
});