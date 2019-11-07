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




#respond { 
background: #fbfbfb;
padding:0 10px 0 10px;
}
  
/* Highlight active form field */
  
#respond input[type=text], textarea {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid #DDDDDD;
}
   
   
#respond input[type=text]:focus,
input[type=email]:focus, 
input[type=url]:focus,
textarea:focus {
box-shadow: 0 0 5px rgba(81, 203, 238, 1);
margin: 5px 1px 3px 0px;
border: 2px solid rgba(81, 203, 238, 1);
}
#author, #email { 
font-family: "Open Sans", "Droid Sans", Arial;
font-style:italic;
color:#1d1d1d; 
letter-spacing:.1em;
} 
  
#url  { 
color: #1d1d1d;
font-family: "Luicida Console", "Courier New", "Courier", monospace; 
}
#submit {
background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
background-color:#44c767;
-moz-border-radius:28px;
-webkit-border-radius:28px;
border-radius:28px;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:17px;
padding:16px 31px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
} 
  
#submit:hover {
background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
background-color:#5cbf2a; 
}
#submit:active { 
position:relative;
top:1px;
}



input
{
	width:320px;
}
label
{
	width:100px;
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
   <?php	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
   <?php  endwhile; ?>
</section>
  	

	

<?php get_footer(); ?>