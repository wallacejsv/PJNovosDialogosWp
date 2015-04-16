<?php get_header(); ?>

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

</style>

	<main role="main">

	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->


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


<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'novosdialogos';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>




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