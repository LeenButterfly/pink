<?php
get_header();

?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9 id="content">

      <?php
      if (have_posts()){
        while (have_posts()){
          the_post();
          ?>

           <article class="post">
              <header>
                <h1 class="the-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h1>
              </header>
              <main class="the content">
                <?php the_excerpt(); ?>
              </main>
            </article>

          <?php
        }

      }else{
        _e("sorry, there are not posts for you here", "pink");
      }
      ?>

    </div>
    <div class="col-sm-12 col-md-4 col-lg-3" id="sidebar1">
    <?php get_sidebar(); ?>
    

    </div>
  </div>
</div>

<?php 
get_footer(); 
?>
    