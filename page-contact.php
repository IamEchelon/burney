<?php

    $context = Timber::get_context();
    $context['page_title'] = $post->post_name;
    Timber::render("pages/contact.twig", $context);
