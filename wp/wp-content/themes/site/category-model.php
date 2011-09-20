<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

					<div id="content" role="main">
					<div style="margin:40px auto;width:915px;">
						<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "主推模特", "" ); } ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="left member">
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full');?><h4><?php the_title(); ?></h4></a>
</div>
				   <?php endwhile; endif; ?>
<div class="clear"></div>
				  				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
<?php get_footer(); ?>
