<?php

   if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
    }

    $context = Timber::get_context();
    $args = array(
        'post_type' => 'post',
    );
    $context['blogs'] = Timber::get_posts($args);
    $context['page_title'] = $post->post_name;
    $context['posts'] = Timber::get_posts();
    Timber::render( "pages/main.twig", $context );
