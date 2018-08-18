<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme00
 */

?>

<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
	<p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
	</div>
	<!-- /.container -->
</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo bloginfo('template_directory') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_directory') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
	$( "input[type=search]" ).addClass( "form-control w-100" );
	$("#search-2 input[type=submit]").addClass( "btn btn-secondary w-100" );
	$("label").css("display", "block");
	$("#search-2 .card").addClass( "p-2" );
	$(".reply").addClass( "text-right" );
	$(".comment-form-comment textarea").addClass( "form-control" );
	$(".submit").addClass( "btn btn-secondary" );
	$("#respond").addClass( "border" );
	</script>
</body>
</html>
