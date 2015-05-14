<?php get_header(); ?>

<style>
	.abh_tab_content {
		  background: transparent !important;
	}
	
	.abh_tab_content .abh_image img {
		  max-width: 70px !important;
  		  height: 70px;
	}
	.abh_box {
		  margin-top: -35px;
	}
	
	.abh_tab_content .abh_text .abh_description {
		display:none;
	}
	
	.nome-author-plugin {
  		  width: 105px !important;
  		float: right !important;
 		 margin: -65px 22px 10px 0 !important;
 		 text-align: left !important;
 		   line-height: 15px;
	}
	
	.nome-author-plugin a {
  		color: #fff;
  		font-size: 14px;
	}
	.abh_tab_content .abh_image {
		width:80px !important;
		margin-right: 10px !important;
	}
	
	.abh_tab_content .abh_social {
		display: none;
	}

</style>

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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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

<div class="fundo-full-articulistas">
<div class="wrapper">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

    <div class="item active">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="1"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="7"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="8"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="9"]'); ?></div>	
			
		</div> <!-- //secao-autor -->


      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="10"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="11"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="12"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="13"]'); ?></div>
			
		</div> <!-- //secao-autor -->

      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    
    
        <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="14"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="15"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="16"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="17"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="18"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="19"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="20"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="21"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="22"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="23"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="24"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="25"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="26"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="27"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="28"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="29"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="30"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="31"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="32"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="33"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 
    

    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="34"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="35"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="36"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="37"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="38"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="39"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="40"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="41"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="42"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="43"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="44"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="45"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="46"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="47"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="48"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="49"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 



    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="50"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="51"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="51"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="53"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div> 


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="54"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="55"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="56"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="57"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="58"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="59"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="60"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="61"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="62"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="63"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="64"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="65"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="66"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="67"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="68"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="69"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="70"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="71"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="72"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="73"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="74"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="75"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="76"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="77"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>


    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="78"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="79"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="80"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="81"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>



    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="82"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="83"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="84"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="85"]'); ?></div>
			
		</div> 

      <div class="carousel-caption">
        ...
      </div>
    </div>



    <div class="item">
     
		<div class="secao-autor">
			
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="86"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="87"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="88"]'); ?></div>
			<div class="author-bio-box2"><?php echo do_shortcode('[starbox  id="89"]'); ?></div>
			
		</div> 

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

</div>
    <!-- /wrapper --> 
</div> <!-- fundo articulistas -->


















<div class="wrapper">

<section class="home-posts">









<div id="postswrapper">
   <div class="item-dia">

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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
		'category_name'=>'post',
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


   <div id="loadmoreajaxloader" style="display:none;"> <!----------- DISPLAAAAAAAAAAAAY - SO ABRE QUANDO DESCE --> 

<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'post',
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
		'category_name'=>'post',
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


<!-- QUETY POST DA HOME - SEM TER CLICADO NO QUERY -->
<div class="querypost-posts-home box" id="content">

<?php
	$args = array(
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>8
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>9
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>10
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>11
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>12
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>13
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>14
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>15
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>16
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>17
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>18
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
		'category_name'=>'post',
		'numberposts'=>1,
		'offset'=>19
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

<div class="loader-imagem"><center><img class="loader-imagem" src="http://localhost/PJNovosDialogosWp/novosdialogos/wp-content/uploads/2015/04/loading-1.gif"/></center>
</div>

</div>  <!-- //postswrapper -->








</section> <!--//home-query-->
<?php get_sidebar(); ?>
</div>
    <!-- /wrapper --> 



	</main>




<?php  get_footer(); ?>