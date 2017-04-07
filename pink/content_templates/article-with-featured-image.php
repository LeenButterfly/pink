

<article class="post with-featured-image">
	<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('post-featured-image'); ?>);"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			    <header>
			        <h1 class="the-title"> <?php the_title(); ?> </h1>
			        <h4 class="meta">
			        <span class="date"><?php the_date(); ?></span>
			        <span class="author"><?php the_author(); ?> </span>
			    </header>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main class="the content">
			        <?php the_content(); ?>
			    </main>
			</div>
			<div class="col-md-3" id="sidebar1">
		      <?php get_sidebar(); ?>
		    </div>
		</div>
	</div>
</article>