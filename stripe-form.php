<?php  
require_once('wp-load.php');
require_once('stripe-config.php'); 
?>

<?php /* <form action="<?php echo home_url(); ?>/form-submit" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a month"
          data-amount="2000" 
		  data-value="fsfas"
          data-locale="auto"></script>
		  
	<input type="hidden" value="Get Healthy Meal Plan" name="plan">	  
</form> */?>

<form action="<?php echo home_url(); ?>/form-submit" method="post">
<input 
        type="submit" 
        value="Pay with Card"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-amount="2000"
        data-currency="us"
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