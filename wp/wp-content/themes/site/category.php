<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<h1 style="font-size:18px;margin:20px 0 0 50px"><?php printf( '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<div style="margin:40px auto;width:915px;">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink() ?>"><span><?php the_time('Y年m月j日') ?></span><h4><?php the_title(); ?></h4></a>
				   <?php endwhile; endif; ?>
				  				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				 </div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
