<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="content" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
			

			</div><!-- #content -->
				<div class="clear"></div>
		
<?php get_footer(); ?>
