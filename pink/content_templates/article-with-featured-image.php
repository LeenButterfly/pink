

<article class="post with-freatured-image">
	<div class="with-freatured-image style="background-image: url(<?php the_post_thumbnail_url('page-featured-image'); ?>);"></div>
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
		</div>
	</div>
</article>