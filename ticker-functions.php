<?php
/*
Plugin Name: Z News Ticker
Plugin URI: http://imwebdeveloper.tk/plugins/z-news-ticker/
Description: This is a special plugin for showing news ticker as headlines. You can view the latest headlines (title) from page, post, custom post, category or custom taxonomy. Z News Ticker is fully customizable using simple shortcode.
Author: Zakrai Babu
Version: 1.2.3
Author URI: http://imwebdeveloper.tk/
License: GGPLv2 or later
*/

/*Link a Plugin Script That Depends on jQuery*/
/*********************************************/
function my_news_ticker_js() {
	wp_enqueue_script(
		'news_ticker_js',
		plugins_url( '/js/jquery.ticker.min.js' , __FILE__ ),
		array( 'jquery' ),
		'1.2.3',
		false
	);
}
add_action( 'wp_enqueue_scripts', 'my_news_ticker_js' );


/*Link a Plugin Style*/
/*********************/
function my_news_ticker_css() {
	wp_enqueue_style(
		'myPluginStylesheetName',
		plugins_url( '/css/style.css', __FILE__ ),
		array(),
		'1.2.3',
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'my_news_ticker_css' );


/*Shortcode For News Ticker:*/
/****************************/
function ticker_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'category'	=> '',
		'id'		=> '',
		'count'		=> '99999',
		'type'		=> 'post',
		'speed'		=> '3000',
		'typespeed'	=> '50',
		'text'		=> 'Latest News',
		'txtcolor'	=> '#FFFFFF',
		'bgcolor'	=> '#985BEA',
		'pause'		=> 'true',
		'finish'	=> 'true',
		'cursor1'	=> '_',
		'cursor2'	=> '-',

		), $atts ) );
	
	$q = new WP_Query( array( 
		'posts_per_page'	=> $count,
		'post_type'			=> $type,
		'category_name'		=> $category,
		'order' 			=> 'DESC'
		) );

	$list = '
		<script>
			jQuery(document).ready( function() {
				jQuery("#tickerID-'.$id.'").ticker({
					itemSpeed:		'.$speed.',
					cursorSpeed:	'.$typespeed.',
					pauseOnHover:	'.$pause.',
					finishOnHover:	'.$finish.',
					cursorOne:		"'.$cursor1.'",
					cursorTwo:		"'.$cursor2.'",
					fade:			true,
					fadeInSpeed:	600,
					fadeOutSpeed:	300
				});
			});
		</script>
		<div id="tickerID-'.$id.'" class="ticker">
			<strong style="color: '.$txtcolor.'; background-color: '.$bgcolor.'">'.$text.':</strong>
			<ul>
	';
	while ( $q -> have_posts() ) : $q -> the_post();
	//$idd = get_the_ID();
	$list .= '
		<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>
	';
	endwhile;
	$list .= '
			</ul>
		</div>
	';
	wp_reset_query();
	return $list;
}
add_shortcode( 'ticker', 'ticker_shortcode' );