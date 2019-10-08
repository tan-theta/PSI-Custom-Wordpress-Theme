<?php 

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer1' => __( 'Footer Menu 1'),
	'footer2' => __( 'Footer Menu 2'),
	'sitemap' => __( 'Site-Map'),
	'office' => __( 'Office Stationery'),
	'filing' => __( 'Filing System'),
	'school' => __( 'School Stationery'),
	'general' => __( 'General Stationery'),
));

// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 200, 140, true);
	add_image_size('medium-thumbnail', 250, 150, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));


add_action( 'pre_get_posts', 'search_by_cat' );

function search_by_cat()
{
    if ( is_search() )
    {
        $cat = empty( $_GET['cat'] ) ? '' : (int) $_GET['cat'];
        add_query_arg( 'cat', $cat );
    }
}



// Add Widget Areas
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'sidebar2',
    'id' => 'sidebar2',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 1',
    'id' => 'home1',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 2',
    'id' => 'home2',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 3',
    'id' => 'home3',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 4',
    'id' => 'home4',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 5',
    'id' => 'home5',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Home 6',
    'id' => 'home6',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Site-Map',
    'id' => 'sitemap',
    'before_widget' => '<div class = "caption">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class = "title">',
    'after_title' => '</h2>',
  )
);


/*Short Codes*/

function image_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
    'name' => '',
    'align' => 'center',
    'ext' => 'png',
    'path' => '/wp-content/uploads/',
    'url' => ''
    ), $atts ) );
    $file=ABSPATH."$path$name.$ext";
    if (file_exists($file)) {
        $size=getimagesize($file);
        if ($size!==false) $size=$size[3];
        $output = "<img src='".get_option('siteurl')."$path$name.$ext' alt='$name' $size align='$align' class='align$align' />";
        if ($url) $output = "<a href='$url' title='$name'>".$output.'</a>';
        return $output;
    }
    else {
        trigger_error("'$path$name.$ext' image not found", E_USER_WARNING);
        return '';
    }
}
add_shortcode('image','image_shortcode');


add_filter('wp_nav_menu_items', 'do_shortcode');


?>