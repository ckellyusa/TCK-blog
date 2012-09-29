<?php
/*
Plugin Name: jqPlot Charts and Graphs for jQuery
Plugin URI: http://www.ramoonus.nl/wordpress/jqplot/
Description: A pure JavaScript charting plugin for the jQuery javascript framework. 
Version: 1.0.0.1012
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_jqplot() {
		// JS
		wp_deregister_script('jqplot');
		wp_enqueue_script('jqplot', plugins_url('/js/jquery.jqplot.min.js', __FILE__), array("jquery"), '1.0.0.1012');
		// CSS
		wp_deregister_style('jqplot');
		wp_enqueue_style('jqplot', plugins_url('/css/jquery.jqplot.min.css', __FILE__), false, '1.0.0.1012');
}
add_action('init', 'rw_jqplot');
?>