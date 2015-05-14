<?php /* Template Name: Pagina artigos */ get_header(); ?>

<head>


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

span.author {
  float: left;
  margin: 0px 0px 10px 0px;
  width: 100%;	
}

.query-posts-videos {
	margin-bottom: 40px;
}

</style>

	<main role="main">
		<!-- section -->
<div class="wrapper">
<section class="home-posts">






<div class="artigos">

<div id="postswrapper">
   <div class="item-dia">

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'post',
		'numberposts'=>200,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(150) ?></a></p></div>
	  <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
	  <div class="resumo-query-home"><p><?php wp_limit_post(200,'...',true);?></p></div>

	  <a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><div class="excerpt-euthorbusca ver-completo">Leia mais</div></a>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->



</div> <!--//load-->

<!--<div class="loader-imagem"><center><img class="loader-imagem" src="http://localhost/PJNovosDialogosWp/novosdialogos/wp-content/uploads/2015/04/loading-1.gif"/></center>
</div>-->



</div>



</div><!-- //artigos -->

</section> <!--//home-query-->
		<!-- /section -->
		
<?php get_sidebar(); ?>
</div><!-- wrapper -->

	</main>
<?php get_footer(); ?>
