<?php

require "customize.php";

function cove_setup()
{
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list'
	) );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'link', 'gallery'
	) );
    add_action( 'admin_footer', 'catlist2radio' );
    function catlist2radio(){
        echo '<script type="text/javascript">';
        echo 'jQuery("#categorychecklist input, #categorychecklist-pop input, .cat-checklist input")';
        echo '.each(function(){this.type="radio"})</script>';
        echo ".first().prop('checked', true);";
    }
}

add_action( 'customize_register', 'mytheme_customize_register' );
add_action( 'wp_head', 'cove_customize_css');
add_action( 'after_setup_theme', 'cove_setup' );

function cove_category_img_src()
{
    if(in_category( 'technical' ))
    {
        return get_template_directory_uri()."/img/technical-icon.svg";
    }
    else if(in_category( 'asside' ))
    {
        return get_template_directory_uri()."/img/opinion-icon.svg"; 
    }
    else if(in_category( 'art' ))
    {
        return get_template_directory_uri()."/img/sketchbook-icon.svg"; 
    }
    else if(in_category( 'writting' ))
    {
        return get_template_directory_uri()."/img/sketchbook-icon.svg"; 
    }
     return get_template_directory_uri()."/img/sketchbook-icon.svg"; 
}
function cove_scripts_basic()
{
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    // Register the script like this for a theme:
    wp_register_script( 'cove-general-script', get_template_directory_uri() . '/js/script.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'cove-general-script' );
}
add_action( 'wp_enqueue_scripts', 'cove_scripts_basic' );
function cove_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'cove-general-style', get_template_directory_uri() . '/css/style.css', array(), '20120208', 'all' );
    wp_register_style( 'cove-grid', get_template_directory_uri() . '/css/grid.css', array(), '20120208', 'all' );
    wp_register_style( 'cove-reset', get_template_directory_uri() . '/css/reset.css', array(), '20120208', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'cove-reset' );
    wp_enqueue_style( 'cove-general-style' );
    wp_enqueue_style( 'cove-grid' );
    
}
add_action( 'wp_enqueue_scripts', 'cove_styles_with_the_lot' );

function cove_posted_on() {

	// Set up and print post meta information.023
	printf( '<time class="entry-date" datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}
function cove_meta_tags() 
{
    $t = get_the_tags($post->ID);
    
    if(is_array($t))
    {
         foreach ($t as &$tag)
         {
        $tag_link = get_tag_link($tag->term_id);
        printf('<a href = "%1$s">%2$s</a>  ', 
                $tag_link,
                $tag -> name
            );
        }
    }
}
function cove_comments()
{
  comments_popup_link( 'leave a comment', 'comment (1)', 'comments (%)');
}

?>