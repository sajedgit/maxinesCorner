<?php  
require_once('stripe-config.php'); 
?>

 <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Health packages</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">
		
		<?php 
		$flag=0;
		$post_args = array( 'post_type' => 'plans', 'posts_per_page' => 8 , 'orderby' => 'date', 'order' => 'ASC', );
		$post_query = new WP_Query( $post_args ); 
		$total_plans= count($post_query->posts);
		$column=ceil(12/$total_plans);
		
		if ( $post_query->have_posts() ) : 
		while ( $post_query->have_posts() ) : $post_query->the_post(); 
		$price = get_post_meta( get_the_ID(), 'Price' , true);
		$feature = get_post_meta( get_the_ID(), 'Feature' );
		//echo "post id======".$post->ID;
		$flag++;
		if($flag%2==0)
			$look="featured";
		else
			$look="general";
		?>

          <div class="col-sm-<?php echo $column; ?> pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content <?php echo $look; ?>">
                <h2><?php the_title(); ?></h2>
                <h3>$<?php echo $price; ?><sup>.00</sup> <span>/ month</span></h3>
				
                <ul>
				  <?php foreach($feature as $value): ?>
                  
					<li><?php echo $value ;?> <i class="fa fa-check icon-success"></i></li>
                	
				  <?php endforeach; ?>				  
                </ul>
				
                <div class="price-bottom">
					<?php /*  <a href="#" class="btn btn-skin btn-lg">Buy Now</a>  */ ?>
					<form action="<?php echo home_url(); ?>/form-submit" method="post">
					<input class="btn btn-skin btn-lg" 
							type="submit" 
							value="Buy Now"
							data-key="<?php echo $stripe['publishable_key']; ?>"
							data-amount="<?php echo $price; ?>00"
							data-currency="usd"
							data-name="<?php the_title(); ?>"
							data-description="Access for a month"
						/>
						<input type="hidden" name="post_id" value="<?php echo $post->ID; ?>">
						<input type="hidden" name="price" value="<?php echo $price; ?>">
					</form> 
				 
                </div>
              </div>
            </div>
          </div>
		    <?php wp_reset_postdata(); ?>
 
			<?php endwhile; // ending while loop ?> 
			<?php else:  ?>
			<p><?php _e( 'Sorry, no plan matched your criteria.' ); ?></p>
			<?php endif; // ending condition ?> 

  

         

		   
		  

        </div>

      </div>
    </section>
	
	
	<script src="https://checkout.stripe.com/v2/checkout.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script>
	$(document).ready(function() {
		$(':submit').on('click', function(event) {
			event.preventDefault();
			var $button = $(this),
				$form = $button.parents('form');
			var opts = $.extend({}, $button.data(), {
				token: function(result) {
					$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
				}
			});
			StripeCheckout.open(opts);
		});
	});
	</script>