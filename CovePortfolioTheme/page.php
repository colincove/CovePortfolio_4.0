<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['is_front_page'] = is_front_page();
$context['resume'] = get_theme_mod('resume_pdf');
if(is_front_page()){
	$context['projects'] = Timber::get_posts(array( 'posts_per_page' => 20, 'category_name' => 'project', 'post_status' => 'public' ));
	$context['smallprojects'] = Timber::get_posts(array( 'posts_per_page' => 20, 'category_name' => 'small-project', 'post_status' => 'public' ));
}else{
	$context['posts'] = Timber::get_posts(array( 'posts_per_page' => 20, 'category_name' => 'uncategorized' ));
}

Timber::render( array( 'templates/page-' . $post->post_name . '.twig', 'page.twig' ), $context );
?>