<!-- Section: post -->
    <section id="post" class="home-section paddingtop-140">

	<div class="container">
	
<?php
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'weight-loss-tips',
		'posts_per_page' => 6,
	);
	$arr_posts = new WP_Query( $args );
	 
	if ( $arr_posts->have_posts() ) :
	 
		while ( $arr_posts->have_posts() ) :
			$arr_posts->the_post();
			
			$post_id=get_the_ID();
			$category=get_the_category($post_id); 
			$category_name=$category[0]->cat_name; 
			
			?>
			
			
				<div class="well">
				  <div class="media">
					<a class="pull-left" href="#">
						<img class="media-object"  src="<?php echo get_the_post_thumbnail_url($post_id, ''); ?>" style="width:250px;">
					</a>
					<div class="media-body">
						<p class="post_category"><?php  echo $category_name=$category[0]->cat_name;  ?></p>
						<h4 class="media-heading"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
					  <p  class="post_details"> 	<?php the_excerpt(); ?></p>
					 <!-- <ul class="list-inline list-unstyled">
						<li><span><i class="glyphicon glyphicon-calendar"></i> 1 days, 3 hours </span></li>
					
						</ul>-->
				   </div>
				</div>
			  </div>
		  
		  
			<?php
		endwhile;
	endif;	

?>
		
		

	 
	
	
		  
  
		  
   
</div>
	
	</section>
	<!-- Section: end post -->
	
	