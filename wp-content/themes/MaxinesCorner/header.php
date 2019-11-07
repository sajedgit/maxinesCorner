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
  
  <style>
.fa {
 padding: 5px;
font-size: 20px;
width: 31px;
text-align: center;
text-decoration: none;
margin: 0px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>
	
	<?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom"  <?php body_class(); ?>> 
 <div id="wrapper">  
 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation"> 
	 <!--  <div class="top-area">        <div class="container">          <div class="row">            <div class="col-sm-6 col-md-6">              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>            </div>            <div class="col-sm-6 col-md-6">              <p class="bold text-right">Call us now +62 008 65 001</p>            </div>          </div>        </div>      </div>-->  
	 <div class="container navigation">    
		 <div class="navbar-header page-scroll">       
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">   
			 <i class="fa fa-bars"></i>                </button>   
			 <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">   
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_thumb.png" height="85" alt=""   />     
			 </a>   
		 </div>  
		 
		 
	<div class="social_icon" style="float: right;margin: -15px 15px;">
		<a href="http://www.facebook.com/maxinescorner" class="fa fa-facebook"></a>
		<a href="https://twitter.com/maxinescorner" class="fa fa-twitter"></a>
		<a href="https://www.youtube.com/c/maxinescorner" class="fa fa-youtube"></a>
		<a href="http://www.instagram.com/maxinescorner" class="fa fa-instagram"></a>
		 
		 
	 </div> 
		 <!-- navbar-menus -->		
		 <?php if(is_page()):	
		   get_sidebar( 'page-menu' ); 	
		 elseif(is_single()):	
		  get_sidebar( 'single-menu' ); 
		 else:
		  get_sidebar( 'menu' );    
		 endif;					
		 ?>     
	 <!-- /.navbar-menus -->
	 </div>   
	 <!-- /.container -->    
 </nav>

 