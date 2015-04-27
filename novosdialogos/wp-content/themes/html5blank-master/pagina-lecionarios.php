<?php /* Template Name: Pagina lecionarios */ get_header(); ?>

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
</style>

	<main role="main">
		<!-- section -->
<section class="home-posts">










<div id="postswrapper">
   <div class="item-dia">

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->


<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->


<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>2
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->



<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>3
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->



<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>4
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->


<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>5
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->





</div> <!--//item-->

   <div id="loadmoreajaxloader" style="display:none;">

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>6
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<a class="share" href="#"><i class="fa fa-share-alt"></i></a>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>
</div>

<!-- //QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->


<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box query-posts-videos" id="content">

<?php
	$args = array(
		'category_name'=>'lecionarios',
		'numberposts'=>1,
		'offset'=>7
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(30) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	 <span class="author"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

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
<div class="loader-imagem"><center><img class="loader-imagem" src="http://localhost/PJNovosDialogosWp/novosdialogos/wp-content/uploads/2015/04/loading-1.gif"/></center></div>
</div>





</section> <!--//home-query-->
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
