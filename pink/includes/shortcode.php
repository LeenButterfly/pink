<?php

function map_short_code( $atts ){
	echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2228.5513259348913!2d12.692768915761565!3d56.04375708063219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465232355d79f64d%3A0x6e427ab2305acf5e!2sHelsingborg+Central+Station!5e0!3m2!1sen!2sse!4v1491556389814" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
add_shortcode('google_map', 'map_short_code');

