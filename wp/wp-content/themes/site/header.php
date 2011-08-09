<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
 <link rel="stylesheet" href="/css/style.css?v=2">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" charset="utf-8"> 
				var galleryLoaded=function(){
					jQuery('#slider').after(jQuery('<a id="content-down-arrow" href="#"></a><a id="content-up-arrow" href="#"></a>'));
					jQuery('#content-up-arrow').hide();
				 	jQuery('#content-down-arrow').hide();
					var pane=jQuery('.nivo-controlNav');
					var contentHeight=pane.children().size()*92;
				 	if(contentHeight>pane.height()){
				 		jQuery('#content-down-arrow').show();
				 		jQuery('#content-up-arrow').show();
				 		jQuery('#content-up-arrow').click(function(e){
				 			pane.scrollTop(pane.scrollTop()+50)
				 			return false;
				 		});
				 		jQuery('#content-down-arrow').click(function(e){
				 			pane.scrollTop(pane.scrollTop()-50)
				 			return false;
				 		});
				 	}
				}
				  
				jQuery(function($){
	var href='/img/'+location.href.replace(/(https|http):\/\/[^\/*]*\//,'');
  jQuery('img.category').each(function(){
    var src=jQuery(this).attr('src');
		jQuery(this).attr('src',href+src);
  });
});
			</script> 
</head>

<body <?php body_class(); ?>>
<div class="container">
	<div id="header">
			<div class="logo">
				<img src="/images/logo.jpg">
			</div>
		<div class="clear"></div>
		<div class="mainnav">
			<div id="access" role="navigation">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
			<div class="clear"></div>
		</div>
	</div><!-- #header -->

