<?php
add_action('wp_enqueue_scripts','style_theme');
add_action('after_setup_theme', 'MyMenu');
add_action('widgets_init','register_my_widgets');
function register_my_widgets(){
    register_sidebar(array(
        'name'          => 'Left Sidebar',
	'id'            => "left_sidebar",
    'description'=>'Описание',
    'class'         => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
    ));
    register_sidebar(array(
        'name'          => 'Top Sidebar',
	'id'            => "top_sidebar",
    'description'=>'Описание',
    'class'         => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
    ));
}

function MyMenu(){
    register_nav_menu('top','main');
    register_nav_menu('bottom','bottom');
    add_theme_support('title-page');
    add_theme_support('post-thumbnails',array('post'));
    add_image_size( 'thumb_post', 1300,500,true);
    add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}
}
function style_theme(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style("default", get_template_directory_uri()."/assets/css/default.css");
    wp_enqueue_style("layout", get_template_directory_uri()."/assets/css/layout.css");
    wp_enqueue_style("media", get_template_directory_uri()."/assets/css/media-queries.css");
    wp_enqueue_style("fonts", get_template_directory_uri()."/assets/css/fonts.css");
}
add_action('wp_footer','style_script');
function style_script(){
    wp_deregister_script('jquery');
    wp_enqueue_script("jquery",get_template_directory_uri()."/assets/js/jquery-1.10.2.min.js");
    wp_enqueue_script('jquery');
    wp_enqueue_script("init",get_template_directory_uri()."/assets/js/init.js",['jquery'],null,true);
    wp_enqueue_script("doubletaptogo",get_template_directory_uri()."/assets/js/doubletaptogo.js",['jquery'],null,true);
   
    // wp_enqueue_script("jquery-migrate-1.2.1.min.js",get_template_directory_uri()."/assets/js/jquery-migrate-1.2.1.min.js");
    wp_enqueue_script("flexslider",get_template_directory_uri()."/assets/js/jquery.flexslider.js",['jquery'],null,true);
    wp_enqueue_script('modernizr',get_template_directory()."/assets/js/modernizr.js",null,null,false);
}
?>