<?php
/**
 * The template for displaying all single posts.
 *
 * @package llorix-one-lite
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div class="content-wrap">
	<div class="container">

		<div id="primary" class="content-area 
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
echo 'col-md-8';
} else {
				echo 'col-md-12';}
?>
">
			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
the_post();
?>

				<?php get_template_part( 'content', 'single' ); ?>
				
				<?php the_post_navigation(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				?>

			<?php
			endwhile; // end of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
