<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme00
 */

get_header();
?>
	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<!-- Post Content Column -->
			<div class="col-lg-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-5">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
			<!-- col-lg-8 -->
			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">
			<?php get_sidebar(); ?>
			</div>
		</div>
		<!-- row -->
	</div>
	<!-- container -->
<?php
get_footer();
