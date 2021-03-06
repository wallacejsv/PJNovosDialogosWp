<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <!-- CSS SASS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css-sass/estilo.css"> 

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
        
        
        
<!-- 1 POST QUANDO CLICA NO QUERY DA HOME E ABRE EM MODAL -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"> <!-- CONTEUDO QUERY DENTRO DO MODAL -->
        
	

carregando ...


      </div> <!-- //CONTEUDO QUERY DENTRO DO MODAL -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- // 1 POST QUANDO CLICA NO QUERY DA HOME E ABRE EM MODAL -->


        

	</head>
	<body <?php body_class(); ?>>



			<!-- header -->
			<header class="header clear" role="banner">
				
				<div class="centro-header">

				

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="http://localhost/PJNovosDialogosWp/novosdialogos/wp-content/uploads/2015/04/LOGOTIPO.png" alt="Logo" class="logo-img">
						</a>
					</div>
						
					<!-- /logo -->

<div class="redes-sociais">
  <div class="c-redes">
          <ul>
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
          </ul>
</div>
        </div>

					<!-- nav -->

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



<nav class="navbar navbar-default">
  <div class="container-fluid menu-principal">
   
    <div class="collapse navbar-collapse menu01" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/">home <span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/sobre/">sobre</a></li>
        <li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/artigos/">artigos</a></li>
		<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/autores/">vozes</a></li>
		<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/videos/">videos</a></li>
		<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/podcast/">podcast</a></li>
		<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/lecionarios/" class="ultimo-me">lecionário</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle ultimo-menu" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
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
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





					<!-- /nav -->
				</div> <!-- //centro-header -->
			</header>
			<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
      </div>
    <!-- /wrapper --> 