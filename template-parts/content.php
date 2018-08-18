<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme00
 */

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
            
			Posted on <?php the_date(); ?> at <?php the_time(); ?> by   <a href="#"><?php the_author(); ?></a>
			<div>
				<?php the_tags('<span class="badge badge-light">', '</span><span class="badge badge-light ml-1">', '</span>') ?>
			</div>
          </p>
			</div><!-- .entry-meta -->
			
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php 
	// theme00_post_thumbnail(); 
	?>

	<!-- Preview Image -->
	<img class="img-fluid rounded" src="<?php the_post_thumbnail_url() ?>" alt="">

	<div class="pt-1 text-justify"><?php the_excerpt(); ?></div>
	<hr>

</article><!-- #post-<?php the_ID(); ?> -->
