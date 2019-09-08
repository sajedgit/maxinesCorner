<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <!-- css -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css" rel="stylesheet" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bodybg/bg4.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo esc_url( get_template_directory_uri() ); ?>/color/pink.css" rel="stylesheet">
  <link id="t-colors" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
	
	<?php wp_head(); ?>
</head><body id="page-top" data-spy="scroll" data-target=".navbar-custom"  <?php body_class(); ?>>  <div id="wrapper">    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">    <!--  <div class="top-area">        <div class="container">          <div class="row">            <div class="col-sm-6 col-md-6">              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>            </div>            <div class="col-sm-6 col-md-6">              <p class="bold text-right">Call us now +62 008 65 001</p>            </div>          </div>        </div>      </div>-->      <div class="container navigation">        <div class="navbar-header page-scroll">          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">                    <i class="fa fa-bars"></i>                </button>          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_thumb.png" height="85" alt=""   />                </a>        </div>        <!-- navbar-menus -->			<?php if(is_page()):				    get_sidebar( 'page-menu' ); 				  else:					get_sidebar( 'menu' );                  endif;								?>        <!-- /.navbar-menus -->				      </div>      <!-- /.container -->    </nav>

 