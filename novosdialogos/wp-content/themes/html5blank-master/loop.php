<style type="text/css">

footer {
	display: block !important;
  	background: #0077a4;
  	margin-top: 50px;
}

</style>


<main role="main">
		<!-- section -->
		<section class="home-posts sobre-page">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail 
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
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

		<?php //edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Nada encontrado ', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

		</section>
		<!-- /section -->
</main>
