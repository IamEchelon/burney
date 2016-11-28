<?php

    $context = Timber::get_context();
    $context['page_title'] = $post->post_name;
    $context['posts'] = Timber::get_posts();
    Timber::render( "pages/about.twig", $context );
