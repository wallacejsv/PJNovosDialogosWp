<?php get_header(); ?>

<style>
footer {
	display: block !important;
  	background: #0077a4;
  	margin-top: 50px;
}
</style>

	<main role="main">
		<!-- section -->
		<section class="home-posts sobre-page">

	<div class="sobre-author-busca">

		<?php if (have_posts()): the_post(); ?>

			<!--<h1><?php _e( 'Autor ', 'html5blank' ); echo get_the_author(); ?></h1>-->


		<?php if ( get_the_author_meta('description')) : ?>

		<div class="avatar-author"><?php echo get_avatar(get_the_author_meta('user_email')); ?></div>

			<h2 class="sobre-author"><?php _e( 'Sobre ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

	</div> <!-- /sobre-author-busca -->

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail 
				<div class="imagem-post-author">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				</div>
				 /post thumbnail -->

					<!-- post title -->
					<h2 class="titulo-singlepost-author">
						<a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->

				<!-- Data do post -->
				<div class="data-singlepost"><?php the_time('j \d\e F \d\e Y') ?></div>
				<!-- //Data do post -->

				<div class="excerpt-euthorbusca"><?php wp_limit_post(180,'...',true);?></div>

				<a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><div class="excerpt-euthorbusca ver-completo">Leia mais</div></a>

				<br class="clear">

				<?php edit_post_link(); ?>

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

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
