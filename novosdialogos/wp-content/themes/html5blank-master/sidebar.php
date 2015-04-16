<!-- sidebar -->

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
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>0
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(100) ?></a></p></div>

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
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>1
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(100) ?></a></p></div>

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
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>2
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(100) ?></a></p></div>

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
		'category_name'=>'alexandre-alex, edu-andre, josa-andrade, aloha',
		'numberposts'=>1,
		'offset'=>3
		);
 
	$my_posts = get_posts($args);
 
	if( $my_posts ):
	foreach( $my_posts as $post ) :	setup_postdata($post); ?>


<?php if ( has_post_thumbnail()) : ?>
   
   <div class="img2-sibebar"><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php the_post_thumbnail(array(870,420)); ?></a></div>
   
 <?php endif; ?>
	
	<div class="titulo-query-home titulo-query-sidebar"><p><a href="<?php the_permalink(); ?>" onclick="history.pushState('teste','Titulo de teste','<?php the_permalink(); ?>'); return false;" type="button" data-toggle="modal" data-target="#myModal"><?php  title_lenght(100) ?></a></p></div>

	<?php 
	endforeach; 
	else:
	?>
	<p></p>
    <?php endif; ?>

</div>
<!-- //QUETY POST DA SIDEBAR-->

</aside>



<!-- /sidebar -->