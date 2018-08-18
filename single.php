<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<?php
		while (have_posts() ) :
			the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( ' <h1>', '</h1>' );
			else :
				the_title( ' <h2 class="text-judgify"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<!-- Author -->
				<p>
					Posted on
					<?php the_date(); ?> at
					<?php the_time(); ?> by
					<a href="#">
						<?php the_author(); ?>
					</a>
					<div>
						<?php the_tags('<span class="badge badge-light">', '</span><span class="badge badge-light ml-1">', '</span>') ?>
					</div>
				</p>
			</div>
			<!-- .entry-meta -->
			<?php endif; ?>
			</header>
			<!-- .entry-header -->

			<?php 
			// theme00_post_thumbnail(); 
			?>

			<!-- Preview Image -->
			<img class="img-fluid rounded" src="<?php the_post_thumbnail_url() ?>" alt="">

			<div class="pt-2 text-justify">
				<?php the_content(); ?>
			</div>
			<hr>
			
			</article>
			<!-- #post-<?php the_ID(); ?> -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			endwhile; // End of the loop.
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
// get_sidebar();
get_footer();