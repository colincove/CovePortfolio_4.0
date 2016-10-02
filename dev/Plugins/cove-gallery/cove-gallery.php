<?php
/**
 * @package Cove Gallery
 * @version 0.1
 */
/*
Plugin Name: Cove Gallery
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Generate all the galleries used in Colin Cove's website . 
Author: Colin Cove
Version: 0.1
Author URI: http://coveportfolio.com
*/
function cove_gallery( $atts, $content = null ) {
	if(!isset($atts["type"])){
		$atts['type']=1;
	} 
	$context = array('atts' => $atts, 'content' => $content, 'images' => array());
	$ids = explode(',', $atts['ids']);
	foreach ($ids as &$id)
	{
		array_push($context['images'],
				   array(
					   'thumbnail' => wp_get_attachment_image_url($id, 'thumbnail'),
					   'medium' => wp_get_attachment_image_url($id, 'medium'),
					   'large' => wp_get_attachment_image_url($id, 'large')
						));
	}
	return Timber::compile( 'templates/gallery-'.$atts['type'].'.twig', $context );
}
add_shortcode( 'gallery', 'cove_gallery' );

add_action('print_media_templates', function(){

  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-cove-gallery-setting">
    <label class="setting">
      <span><?php _e('Layout'); ?></span>
      <select data-setting="type">
        <option value="0"> 3 Mobile </option>
        <option value="1"> 1 Large </option>
		 <option value="2"> 2 Medium </option>
		 <option value="3"> 1 Ghost Image </option>
		 <option value="4"> Gallery </option>
      </select>
    </label>
	<label class="setting">
      <span><?php _e('Align'); ?></span>
      <select data-setting="align">
        <option value="0"> Left </option>
        <option value="1"> Right </option>
      </select>
    </label>
	<label class="setting">
      <span><?php _e('Title'); ?></span>
	  <input type="text" data-setting="title"/>
    </label>
	<label class="setting">
      <span><?php _e('Caption'); ?></span>
	  <textarea data-setting="caption"/>
    </label>
  </script>

  <script>

    jQuery(document).ready(function(){

      // add your shortcode attribute and its default value to the
      // gallery settings list; $.extend should work as well...
      _.extend(wp.media.gallery.defaults, {
        type: '0', 
		  title: 'Gallery',
		  caption: '', 
		  align: 0
      });

      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('cove-gallery-setting')(view);
        }
      });

    });

  </script>
  <?php

});
?>



