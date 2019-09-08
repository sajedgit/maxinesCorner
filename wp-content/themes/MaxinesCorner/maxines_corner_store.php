<?php /* Template Name: MaxinesCorner Store */ ?>
<?php get_header(); ?>

<?php  require_once('stripe-config.php'); ?>

<style>

/********************* Shopping Demo-6 **********************/
.product-grid6,.product-grid6 .product-image6{overflow:hidden}
.product-grid6{font-family:'Open Sans',sans-serif;text-align:center;position:relative;transition:all .5s ease 0s}
.product-grid6:hover{box-shadow:0 0 10px rgba(0,0,0,.3)}
.product-grid6 .product-image6 a{display:block}
.product-grid6 .product-image6 img{height: 300px;transition: all .5s ease 0s;margin: 0 auto;}
.product-grid6:hover .product-image6 img{transform:scale(1.1)}
.product-grid6 .product-content{padding:12px 12px 15px;transition:all .5s ease 0s}
.product-grid6:hover .product-content{opacity:0}
.product-grid6 .title{font-size:16px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid6 .title a{color:#000}
.product-grid6 .title a:hover{color:#2e86de}
.product-grid6 .price{font-size:18px;font-weight:600;color:#2e86de}
.product-grid6 .price span{color:#999;font-size:15px;font-weight:400;text-decoration:line-through;margin-left:7px;display:inline-block}
.product-grid6 .social{background-color:#fff;width:100%;padding:0;margin:0;list-style:none;opacity:0;transform:translateX(-50%);position:absolute;bottom:-50%;left:50%;z-index:1;transition:all .5s ease 0s}
.product-grid6:hover .social{opacity:1;bottom:20px}
.product-grid6 .social li{display:inline-block}
.product-grid6 .social li a{color:#909090;font-size:16px;line-height:45px;text-align:center;height:45px;width:45px;margin:0 7px;border:1px solid #909090;border-radius:50px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid6 .social li a:hover{color:#fff;background-color:#2e86de;width:80px}
.product-grid6 .social li a:after,.product-grid6 .social li a:before{content:attr(data-tip);color:#fff;background-color:#2e86de;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;border-radius:5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid6 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid6 .social li a:hover:after,.product-grid6 .social li a:hover:before{opacity:1}
@media only screen and (max-width:990px){.product-grid6{margin-bottom:30px}
}

.price-bottom { 
    padding: 32px 0; 
    margin-bottom: -20px;
}
</style>
    
    <section id="about" class="home-section product-section paddingbot-60">
    
			
		<div class="container">
			<h1 class="h1Text text-center">MaxinesCorner Store</h1>
			<div class="row">
			
			<?php
			$post_args = array( 'post_type' => 'products',  'orderby' => 'date', 'order' => 'ASC', );
			$post_query = new WP_Query( $post_args ); 
			if ( $post_query->have_posts() ) : 
			while ( $post_query->have_posts() ) : $post_query->the_post(); 
			$regular_price = get_post_meta( get_the_ID(), 'Regular Price' , true);
			$price = get_post_meta( get_the_ID(), 'Price' , true);
			$product_url = get_post_meta( get_the_ID(), 'product_url' , true);
			$featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); 
			?>
			
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="<?php the_permalink() ?>">
								<img class="img-responsive" src="<?php echo $featured_img_url; ?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
							<div class="price">$<?php echo $price; ?>
								<span>$<?php echo $regular_price; ?></span>
							</div>
						</div>
						<ul class="social">
							 <div class="price-bottom">
								 <a href="<?php echo $product_url; ?>" target="_blank" class="btn btn-skin btn-lg">Buy Now</a>  
								
							 
							</div>
						</ul>
					</div>
				</div>
			  <?php wp_reset_postdata(); ?>
 
			<?php endwhile; // ending while loop ?> 
			<?php else:  ?>
			<p><?php _e( 'Sorry, no products matched your criteria.' ); ?></p>
			<?php endif; // ending condition ?> 
			
			</div>
		</div>
	 
    </section>
	
		




<?php get_footer(); ?>