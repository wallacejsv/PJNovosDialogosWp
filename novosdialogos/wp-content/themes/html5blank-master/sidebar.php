<!-- sidebar -->

<div class="sidebarRight">

<aside class="sidebar" role="complementary">


	<?php //get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>



<aside class="sidebar sidebar-facebook">

<div class="fb-page" data-href="https://www.facebook.com/revistanovosdialogos?fref=ts" data-width="250" data-height="265" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/revistanovosdialogos?fref=ts"><a href="https://www.facebook.com/revistanovosdialogos?fref=ts">Revista Novos Diálogos</a></blockquote></div></div>

</aside>


<aside class="sidebar sidebar-facebook sidebar-maisrecentes"> 

	<h3>mais recentes</h3>

<!-- QUETY POST DA SIDEBAR-->
<div class="query-sidebar">

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
   
   <!--<div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>-->
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?></a>...</p></div>

	<span class="authorPostSidebar"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DA SIDEBAR-->




<!-- QUETY POST DA SIDEBAR-->
<div class="query-sidebar">

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
   
   <!--<div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>-->
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>

	<span class="authorPostSidebar"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DA SIDEBAR-->





<!-- QUETY POST DA SIDEBAR-->
<div class="query-sidebar">

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
   
   <!--<div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>-->
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>

	<span class="authorPostSidebar"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DA SIDEBAR-->





<!-- QUETY POST DA SIDEBAR-->
<div class="query-sidebar">

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
   
   <!--<div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>-->
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(60) ?>...</a></p></div>

	<span class="authorPostSidebar"><?php _e( 'por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DA SIDEBAR-->

</aside>

<aside class="sidebar videos-sidebar">

	<h3>Último vídeo</h3>

	<div class="videosSidebar">

		<?php
			$args = array(
				'category_name'=>'videos',
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

			<?php 
			endforeach; 
			else:
			?>
			<p></p>
		    <?php endif; ?>

		</div> <!-- //VideosSidebar -->

</aside>


<aside class="sidebar sidebarTags">

	<h3>Tags</h3>

	<div class="tagsContet">
		<ul>
			<li><?php wp_tag_cloud('number=30&order=asc'); ?></li>
		</ul>
	</div>


</aside>

</div> <!-- //SidebarRight -->



<!-- /sidebar -->