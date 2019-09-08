<?php /* Template Name: Form Submit Template */ ?>
<?php get_header(); ?>


    
    <section id="about" class="home-section  paddingbot-60 ">
      <div class="container marginbot-50">
        <div class="row">
          
					  
			<?php
			  require_once(ABSPATH . 'stripe-config.php');


			  $token  = $_POST['stripeToken'];
			  $email  = $_POST['stripeEmail'];
			  $post_id  = $_POST['post_id'];
			  $price  = $_POST['price'];
			  $price_stripe  = $price."00";

			  $customer = \Stripe\Customer::create([
				  'email' => $email,
				  'source'  => $token,
			  ]);

			   $charge = \Stripe\Charge::create([
				  'customer' => $customer->id,
				  'amount'   => $price_stripe,
				  'currency' => 'usd',
			  ]); 
			  
			

			  
				if ( $charge->status =="succeeded") 
				{
					echo "<h1 style='color:green;' class='text-center'>Successfully charged $". $price."! from your account</h1>";
					echo "<p style='color:#000;'  class='text-center'><a href='$charge->receipt_url'>Here is Your <b>Receipt</b></a></p>";
					echo "<p style='color:#000;'   class='text-center'><a href='https://www.calculator.net/calorie-calculator.html'>Calorie Calculator</a></p>";
					$query_pdf_args = array(
							'post_type' => 'attachment',
							'post_mime_type' =>'application/pdf',
							'post_status' => 'inherit',
							'numberposts' => 1,
							'posts_per_page' => -1,
							'post_parent'   => $post_id
						);
					$query_pdf = new WP_Query( $query_pdf_args );
					//print_r($query_pdf);
					foreach ( $query_pdf->posts as $file):
						echo "<p  style='color:#000;'   class='text-center'><a href='$file->guid'>Please Download Your <b>PDF</b></a></p>";
					endforeach;
            
				}
			?>
		  
        </div>
      </div>

      

    </section>



<?php get_footer(); ?>