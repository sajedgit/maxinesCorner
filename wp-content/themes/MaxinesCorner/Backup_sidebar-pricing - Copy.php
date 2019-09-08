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

          <div class="col-sm-6 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Get Healthy Meal Plan</h2>
                <h3>$103<sup>.00</sup> <span>/ month</span></h3>
                <ul>
                  <li>10 minute phone call <i class="fa fa-check icon-success"></i></li>
                  <li>Calorie Calculator <i class="fa fa-check icon-success"></i></li>
                  <li>Estimate calorie intake Daily <i class="fa fa-check icon-success"></i></li>    
				  <li>Food Measurement  <i class="fa fa-check icon-success"></i></li>          
				  <li>Food List  <i class="fa fa-check icon-success"></i></li>             
				  <li>Workout routine <i class="fa fa-check icon-success"></i></li>        
				  <li>Guidelines for weight loss<i class="fa fa-check icon-success"></i></li>     
				  <li>Guidelines for weight gain  <i class="fa fa-check icon-success"></i></li>     
				  <li>Over 1,000 foods to choose from <i class="fa fa-check icon-success"></i></li>				  
               <?php  /*  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li> */ ?>
                </ul>
                <div class="price-bottom">
                 <?php /*  <a href="#" class="btn btn-skin btn-lg">Buy Now</a> */ ?>
				  
				  
				 <form action="<?php echo home_url(); ?>/form-submit" method="post">
					<input class="btn btn-skin btn-lg" 
							type="submit" 
							value="Buy Now"
							data-key="<?php echo $stripe['publishable_key']; ?>"
							data-amount="2000"
							data-currency="usd"
							data-name="Get Healthy Meal Plan"
							data-description="Access for a month"
						/>
					</form> 
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
				  
				  
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Personalized meal plan 52 Days </h2>
                <h3>$203<sup>.00</sup> <span>/ month</span></h3>
                <ul>
                  <li>30 minute phone call <i class="fa fa-check icon-success"></i></li>   
				  <li>Personalized Weekly meal plan <i class="fa fa-check icon-success"></i></li>   
				  <li>BMI (Body Mass Index)  <i class="fa fa-check icon-success"></i></li>     
				  <li>BMR (Basal Metabolic Rate) <i class="fa fa-check icon-success"></i></li>   
				  <li>Meal Plan Summary <i class="fa fa-check icon-success"></i></li>      
				  <li>Macros count (breakdown) <i class="fa fa-check icon-success"></i></li>   
				  <li>Micros count (breakdown)  <i class="fa fa-check icon-success"></i></li>  
				  <li>Recipes  <i class="fa fa-check icon-success"></i></li>            
				  <li>Weekly shopping list  <i class="fa fa-check icon-success"></i></li>  
				  <li>Weekly meal plan summary  <i class="fa fa-check icon-success"></i></li>
            		
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Buy Now</a>
                </div>
              </div>
            </div>
          </div>

         
		

		   
		  

        </div>

      </div>
    </section>