<?php

function zweig_support() {
	add_theme_support( 'automatic-feed-links');
	add_theme_support( 'menus' );
	add_theme_support( 'post-formats', array( 'quote' ) );
	add_theme_support( 'html5', array ('comment-list','comment-form','search-form'));
}

add_action('after_setup_theme','zweig_support');

/* Filter Title to add Site title & Description */

function zweig_title ( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( bloginfo('name'), 'zweig' ) . ' | ' . get_bloginfo( 'description' );
  }
  else {
  	return __( $title . ' | ' . get_bloginfo('name'), 'zweig');
  }
}

add_filter( 'wp_title', 'zweig_title' );

/* Enqueue scripts */

function zweig_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'zweig-styles', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option('thread_comments') ) {wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'zweig_scripts' );

/* Footer widgets */

function zweig_footer() {

	register_sidebar(array(
		'name'=> 'Footer Area One',
		'id' => 'footer-one',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name'=> 'Footer Area Two',
		'id' => 'footer-two',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name'=> 'Footer Area Three',
		'id' => 'footer-three',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

add_action('widgets_init','zweig_footer');

/* Read more */

function zweig_excerpt_more($more) {
  global $post;
  return '<a href="'. get_permalink($post->ID) . '" class="read-more">' . 'Read more &raquo;' . '</a>';
}

add_filter('excerpt_more', 'zweig_excerpt_more');

/* Block image size to content */

if ( ! isset( $content_width ) ) $content_width = 900;

/* Add editor styles */

function zweig_add_editor_styles() {
    add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}

add_action( 'init', 'zweig_add_editor_styles' );

/* Theme Customizer Options */

function zweig_customize_register( $wp_customize ) {

	/* Declare the first color setting */
	$wp_customize->add_setting( 'zweig_color', array(
    'default'        => '#d43b1d',
    'sanitize_callback' => 'maybe_hash_hex_color',
	) );

	/* Declare the first control */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
	    'label'   => __( 'Primary Color', 'zweig' ),
	    'section' => 'colors',
	    'settings'   => 'zweig_color',
	) ) );

	/* Declare the second color setting */
	$wp_customize->add_setting( 'zweig_hover', array(
    'default'        => '#f1a799',
    'sanitize_callback' => 'maybe_hash_hex_color',
	) );

	/* Declare the first control */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'hover_color',
			array(
	    'label'   => __( 'Secondary Color', 'zweig' ),
	    'section' => 'colors',
	    'settings'   => 'zweig_hover',
	) ) );

}

add_action( 'customize_register', 'zweig_customize_register' );


/* Generate css */

function zweig_customizer_css() {
    ?>
    <style type="text/css">
      a { color: <?php echo get_theme_mod( 'zweig_color' ); ?>; }
      a:hover, a:active, a:focus {color: <?php echo get_theme_mod( 'zweig_hover' ); ?>;}
      input[type=submit] {
      	background-color:<?php echo get_theme_mod( 'zweig_color' ); ?>;
      }

			input[type=submit]:hover,
			input[type=submit]:active,
			input[type=submit]:focus {
				background-color:<?php echo get_theme_mod( 'zweig_hover' ); ?>
			}

			input[type=text]:active,
			input[type=text]:focus,
			input[type=email]:active,
			input[type=email]:focus,
			input[type=url]:active,
			input[type=url]:focus,
			input[type=search]:active,
			input[type=search]:focus,
			input[type=password]:active,
			input[type=password]:focus,
			textarea:focus,
			textarea:active {
				border:1px <?php echo get_theme_mod( 'zweig_color' ); ?> solid;
			}
    </style>
    <?php
}
add_action( 'wp_head', 'zweig_customizer_css' );