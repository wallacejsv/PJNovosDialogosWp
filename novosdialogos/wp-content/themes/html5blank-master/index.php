<?php get_header(); ?>

	<main role="main">

		<!-- section -->
		<section>

<div id="welcomeHero">
			
		<div id="slideshow-main">
			<ul>
				<li class="p1 active">
					<a href="#">
						
<!-- QUETY POST DO SLIDER CENTRO-->
<div class="query-slider-centro">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-slider-centro"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>


<span class="opacity"></span>
						<span class="content">
						<h1>
							<div class="titulo-query-slider-centro"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>
						</h1>
						<p><div class="resumo-query-slider-centro"><p><?php wp_limit_post(100,'...',true);?></p></div></p>
						<div class="autor-slider-centro"><?php the_author_posts_link(); ?></div>
						</span>
	

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER CENTRO-->
						
					</a>
				</li>

				<li class="p2">
					<a href="#">

<!-- QUETY POST DO SLIDER CENTRO-->
<div class="query-slider-centro">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-slider-centro"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>


<span class="opacity"></span>
						<span class="content">
						<h1>
							<div class="titulo-query-slider-centro"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>
						</h1>
						<p><div class="resumo-query-slider-centro"><p><?php wp_limit_post(100,'...',true);?></p></div></p>
						<div class="autor-slider-centro"><?php the_author_posts_link(); ?></div>
						</span>
	

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER CENTRO-->
					</a>
				</li>


				<li class="p3">
					<a href="#">


<!-- QUETY POST DO SLIDER CENTRO-->
<div class="query-slider-centro">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>2
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-slider-centro"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>


<span class="opacity"></span>
						<span class="content">
						<h1>
							<div class="titulo-query-slider-centro"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>
						</h1>
						<p><div class="resumo-query-slider-centro"><p><?php wp_limit_post(100,'...',true);?></p></div></p>
						<div class="autor-slider-centro"><?php the_author_posts_link(); ?></div>
						</span>
	

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER CENTRO-->
						
					</a>
				</li>
			</ul>										
		</div>
				
		<div id="slideshow-carousel">				
			  <ul id="carousel" class="jcarousel jcarousel-skin-tango">

				<li><a href="#" rel="p1"></a> <!-- P1 PEQUENO -->

<!-- QUETY POST DO SLIDER PEQUENO-->
<div class="query-slider">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>

	<div class="titulo-query-slider"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(25) ?></a></p></div>

<div class="autor-slider-pequeno"><?php the_author_posts_link(); ?></div>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER PEQUENO-->

				</li> <!-- //P1 PEQUENO -->

		
				<!-- P2 PEQUENO -->
				<li><a href="#" rel="p2"></a>



<!-- QUETY POST DO SLIDER PEQUENO-->
<div class="query-slider cor-query-sliderpequeno">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>

	<div class="titulo-query-slider"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(25) ?></a></p></div>

<div class="autor-slider-pequeno"><?php the_author_posts_link(); ?></div>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER PEQUENO-->



				</li>
				<!-- //P2 PEQUENO -->

				
				<!-- P3 PEQUENO -->
				<li><a href="#" rel="p3"></a>

<!-- QUETY POST DO SLIDER PEQUENO-->
<div class="query-slider">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>2
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>

	<div class="titulo-query-slider"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(25) ?></a></p></div>

<div class="autor-slider-pequeno"><?php the_author_posts_link(); ?></div>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DO SLIDER PEQUENO-->

				</li> <!-- //P3 PEQUENO -->

			  </ul>
		</div>
		
		<div class="clear"></div>
		
	</div>	

		</section>
		<!-- /section -->


<div class="articulista-texto">
	<h3>articulistas</h3>
</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <!--<img src="..." alt="...">-->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="secao-autor">
			<div class="author-bio-box2"><?php if ( function_exists( 'get_author_bio_box' ) ) echo get_author_bio_box(); ?></div>
		</div> <!-- //secao-autor -->

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>	

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
      <!--<img src="..." alt="...">-->


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="secao-autor">
			<div class="author-bio-box2"><?php if ( function_exists( 'get_author_bio_box' ) ) echo get_author_bio_box(); ?></div>
		</div> <!-- //secao-autor -->

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>	

      <div class="carousel-caption">
        ...
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>















<!-- -------------------------------------------------------------- HOME QUERY SEM MODAL DESATIVADO --------------------------------------------------------------- -->

<!--<section class="home-posts">-->

<!-- QUETY POST 

		<div class="querypost-posts-home" id="examplePopup1">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?> "><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>"><?php  title_lenght(40) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>

 #END QUETY POST -->



<!-- QUETY POST 
		<div class="querypost-posts-home">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?> "><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>"><?php  title_lenght(40) ?></a></p></div>

	  <div class="resumo-query-home"><p><?php wp_limit_post(100,'...',true);?></p></div>
	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>

 #END QUETY POST -->

<!--</section>--> <!--// home-query -->


<!-- -------------------------------------------------------------- //HOME QUERY SEM MODAL DESATIVADO --------------------------------------------------------------- -->





<section class="home-posts">









<div id="postswrapper">
   <div class="item-dia">

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>2
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>3
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>4
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>5
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>6
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>7
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(80) ?></a></p></div>

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
<?php get_sidebar(); ?>

	</main>


<!--<a onclick="history.pushState('teste','Titulo de teste','http://localhost/PJNovosDialogosWp/novosdialogos/alex-teste/'); return false;" title="UpInside Tecnologia" id="Ola" href="http://localhost/PJNovosDialogosWp/novosdialogos/alex-teste/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','http://localhost/PJNovosDialogosWp/novosdialogos/alex-teste/']);" rel="shadowbox">UpInside</a>-->  


<?php  get_footer(); ?>