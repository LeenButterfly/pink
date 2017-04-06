<?php
/**
 * Template Name: Full Width
 *
 * @package WordPress
 * @subpackage Pink
 * @since Pink
 */


get_header();

?>

<div class="container">
  <div class="row">
    <div class="col-md-12 id="content">

<?php

      if (have_posts()){
        while (have_posts()){
          the_post();


          if (has_post_thumbnail()){
          	get_template_part('content_templates/page','with-featured-image');	
          }else{
          	get_template_part('content_templates/page','');
    	}
    
        }

      }else{
        _e("sorry, Could not find that page for you", "pink");
      }
      ?>
     

    </div>
  
    
  </div>
</div>

<?php

get_footer(); 
?>