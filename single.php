<?php

get_header();

      if (have_posts()){
        while (have_posts()){
          the_post();

          if (has_post_thumbnail()){
          	get_template_part('content_templates/article','with-featured-image');	
          }else{
          	get_template_part('content_templates/article','');
    	}
        }

      }else{
        _e("sorry, Could not find that post for you", "pink");
      }
      



get_footer(); 