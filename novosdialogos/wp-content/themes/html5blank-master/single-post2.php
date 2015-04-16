<?php
/*
Single Post Template: [single-post2]
Description: A description e opcional. Escreva se quiser!
*/
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>



			<!-- header -->
			<header class="header clear" role="banner">
				<div class="centro-header">

					<!-- nav -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">sobre</a></li>
	<li><a href="#">artigos</a></li>
	<li><a href="#">autores</a></li>
	<li><a href="#">videos</a></li>
	<li><a href="#">podcast</a></li>
	<li><a href="#">lecionários</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default nav-bar-right">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav navbar-right">
     	<form class="navbar-form navbar-left" role="search">
        <?php get_template_part('searchform'); ?>
      </form>
      </ul>

  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



					<!-- /nav -->
					
					<!-- logo -->
					<div class="logo2">
						<a href="<?php echo home_url(); ?>">
							<img src="http://localhost/PJNovosDialogosWp/novosdialogos/wp-content/uploads/2015/04/LOGOTIPO.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					
				</div> <!-- //centro-header -->
			</header>
			<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">


<style>

.redes-sociais, nav.navbar.navbar-default.nav-bar-right {display:none}

.nav {
	text-align: center;
  	margin: 0 auto;
  	float: none;
  	padding-left: 75px;
  	padding-right: 75px;
}

.nav li {
	text-align: center;
}

.navbar-default {
	width: 100%;
}

.logo2 {
	text-align: center;
  	clear: both;
  	margin-bottom: 38px;
}

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
			
			<!-- botão de curtir a pagina -->
				<div class="fb-like" data-href="http://facebook.com/revistanovosdialogos" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			<!-- //botao de curtir a pagina -->

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

<?php get_footer(); ?>