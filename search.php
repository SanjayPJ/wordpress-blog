<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

			<header class="page-header pb-5">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'theme00' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
