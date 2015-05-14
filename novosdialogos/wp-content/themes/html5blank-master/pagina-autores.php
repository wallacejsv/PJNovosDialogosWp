<?php /* Template Name: Pagina autores */ get_header(); ?>

<head>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=898554820177112";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</head>

<style>
	.sidebar-maisrecentes {
//clear: both;
}

footer {
	display: block !important;
  	background: #0077a4;
  	margin-top: 50px;
}
</style>

	<main role="main">
		<!-- section -->
		<section>
<div class="wrapper">			
		<section class="home-posts sobre-page">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="texto-page"><?php the_content(); ?></div>

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>
			

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
		
		
		
		</section>
		
<?php get_sidebar(); ?>
</div><!-- wrapper -->
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
