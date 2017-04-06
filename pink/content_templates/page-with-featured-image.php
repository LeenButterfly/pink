
<article class="page with-featured-image">
	<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('page-featured-image'); ?>);"></div>
	    <header>
	        <h1 class="the-title"> <?php the_title(); ?> </h1>
	    </header>
		<main class="the content">
	        <?php the_content(); ?>
	    </main>
</article>
