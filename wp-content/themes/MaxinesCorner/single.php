<?php get_header(); ?>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom"  <?php body_class(); ?>>


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <!--  <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>-->
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
         <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_thumb.png" height="85" alt=""   />
                </a>
        </div>

        <!-- navbar-menus -->
			<?php get_sidebar( 'menu' ); ?>
        <!-- /.navbar-menus -->
		
		
      </div>
      <!-- /.container -->
    </nav>

  <section id="post" class="home-section paddingtop-80">

	<div class="container">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		 //echo get_the_post_thumbnail_url($post_id, ''); 
		    the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
			
			//echo get_the_excerpt();
			echo the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		

			// End of the loop.
		endwhile;
		?>
     </div>
    </section>
 
 
 	<!-- Section: video -->
	<?php get_sidebar( 'video' ); ?>
	<!-- /Section: video -->
 

	<!-- Section: Contact -->
	<?php get_sidebar( 'contact' ); ?>
	<!-- /Section: contact -->

    <!-- Section: about -->
    <section id="about" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">About</h2>
                <p>Maxine is a certified nutritionist, married, and mother of two children. YouTube Creator, Host, Video Producer, as well as the founder and CEO of MAXINESCORNER, LLC. She has always been an advocate for clean eating and healthy lifestyle. She believe health and wellness has to be a lifestyle in order to achieve the balance of your mind, body, and spiritual well-being!</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      

    </section>
    <!-- /Section: about -->




    <!-- Section: pricing -->
     <?php get_sidebar( 'pricing' ); ?>
    <!-- /Section: pricing -->

 <?php get_footer(); ?> 

 