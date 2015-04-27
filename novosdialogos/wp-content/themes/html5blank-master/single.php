<?php get_header(); ?>

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

.logo, .redes-sociais, nav.navbar.navbar-default.nav-bar-right {display:none}

.navbar-default {
margin-bottom: 25px;
}

main {
margin-top:20px;
margin-bottom:25px;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>li>a {
  margin-right: 14px;
  font-size: 11px;
}

.artidos-plugin-author {
	display:none;
}

</style>

	<main role="main">

	<!-- section -->
	<section class="secao-conteudo-singlepost">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<!-- post title -->
			<h1 class="titulo-singlepost">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
			
			<!-- Data do post -->
				<div class="data-singlepost"><?php the_time('j \d\e F \d\e Y') ?></div>
			<!-- //Data do post -->

			<!-- post thumbnail -->
			<div class="img-singlepost"><?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				
			<?php endif; ?></div>
			<!-- /post thumbnail -->




			<!-- post details 
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			 post details -->


			<div class="texto-content-post"><?php the_content(); // Dynamic Content ?></div>

			<!--<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>-->

			<!--<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>-->

			<!--<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->

			<!--<?php edit_post_link(); // Always handy to have Edit Post Links available ?>-->

			 <?php //comments_template(); ?>




<div class="fb-comments" data-href="http://localhost/PJNovosDialogosWp/novosdialogos/?p=<?php the_ID(); ?>" data-numposts="5" data-colorscheme="light"></div>


<div class="close"><a href="http://localhost/PJNovosDialogosWp/novosdialogos/"><span aria-hidden="true">&times;</span></a></div>
<!--onClick="window.location = 'http://localhost/PJNovosDialogosWp/novosdialogos/'; window.location.reload(true);"-->


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


	</section>
	<!-- /section -->

	</main>


<?php //get_sidebar(); ?>

<?php //get_footer(); ?>