<?php
//justera length på excerpt
function pink_excerpt_lenght($length){
	return 25;
}
add_filter('excerpt_length','pink_excerpt_lenght',999);

//excerpt more knapp
function pink_excerpt_more( $more ) {
    return sprintf( '<br /><a class="read-more btn btn-pink" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'pink' )
    );
}
add_filter( 'excerpt_more', 'pink_excerpt_more' );

//klassar som passar sidor med eller utan bilder
function pink_body_classes($classes){
	$id= get_queried_object_id();
	if (has_post_thumbnail($id)){
			$classes[]= 'has-freatured-image';
	}else{
			$classes[]= 'no-freatured-image';
	}
	return $classes;
}
add_filter('body_classes','pink_body_classes');