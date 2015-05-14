<?php get_header(); ?>

	<main role="main">
	<!-- wrapper -->
		<div class="wrapper">
		<!-- section -->
		<section>

			<!--<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>-->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		</div><!-- //wrapper -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
