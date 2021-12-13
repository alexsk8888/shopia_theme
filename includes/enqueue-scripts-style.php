<?php
if (!defined("ABSPATH")) {
  exit();
}


function shopia_scripts() {
	wp_enqueue_style( 'shopia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'shopia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'shopia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shopia_scripts' );



function so_scripts()
{
  wp_enqueue_script("so-navigation",get_template_directory_uri() . "/assets/js/navigation.js",[],_S_VERSION, true);
  wp_enqueue_script("so-cutomizer",get_template_directory_uri() . "/assets/js/customizer.js",[],_S_VERSION, true);

  if (is_singular() && comments_open() && get_option("thread_comments")) {
    wp_enqueue_script("comment-reply");
  }
}
add_action("wp_enqueue_scripts", "so_scripts");



function so_style_pages()
{
  wp_enqueue_style("so-main-page", get_template_directory_uri() . "/assets/css/front-page.css", [], null, "all" );

}
add_action("wp_enqueue_scripts", "so_style_pages");


