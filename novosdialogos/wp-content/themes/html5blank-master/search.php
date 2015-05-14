<?php get_header(); ?>

	<main role="main">
	<div class="wrapper">
		<!-- section -->
		<section class="home-posts sobre-page">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div><!-- wrapper -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
