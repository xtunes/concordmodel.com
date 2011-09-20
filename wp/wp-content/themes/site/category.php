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

				<h1 class="page-title"><?php printf( '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<span><?php the_time('Y年m月j日') ?></span><a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
				   <?php endwhile; endif; ?>
				  				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
