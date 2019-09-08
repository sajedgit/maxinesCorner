<?php get_header(); ?>
<style>
.span4 img {
    margin-right: 30px;
}
.span4 .img-left {
    float: left;
}
.span4 .img-right {
    float: right;
}
</style>
<section id="" class="home-section   paddingbot-60 ">
   <div class="container">
   <?php while ( have_posts() ) : the_post(); ?>
   <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); ?>
   	<div class="block">
      <div class="row">
        <div class="span4">
          <img class="img-left" src="<?php echo $featured_img_url; ?>"/>
          <div class="content-heading"><h3><?php the_title() ?></h3></div>
          <p><?php the_content() ?></p>
        </div>
     </div>
   </div>
   <?php  endwhile; ?>
</section>
  	

	

<?php get_footer(); ?>