<?php get_header(); ?>


  
  
    
  
      <!-- Section: about -->
    <section id="about" class="home-section bg-gray paddingbot-60 gray_css">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading">
                
				
				   <?php
					// Start the loop.
					while ( have_posts() ) : the_post();

					?>
					
						<a href="<?php the_permalink() ?>">
						<h1 class="post-headline"><?php the_title(); ?></h1>
						</a>
						<p>   <?php echo the_content(); ?> </p>
					<?php

						// End of the loop.
					endwhile;
					?>
				
				
              </div>
            </div>
            
          </div>
        </div>
      </div>

      

    </section>
 

 
<?php get_footer(); ?>
