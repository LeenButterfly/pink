

<article class="post">
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