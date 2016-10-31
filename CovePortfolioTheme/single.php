<?php
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['resume'] = get_theme_mod('resume_pdf');
Timber::render( 'templates/single-project.twig', $context );
?>