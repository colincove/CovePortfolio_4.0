<?php
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['next_post'] = $post->next;
$context['prev_post'] = $post->prev;
$context['resume'] = get_theme_mod('resume_pdf');
Timber::render( 'templates/single-project.twig', $context );
?>