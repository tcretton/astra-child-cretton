<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child - cretton.info
 * @since 1.0.0
 */

/**
* Define Constants
*/
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
* Mudar logo tela de login WP
*/
function my_custom_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
	return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return 'Cretton informatica - Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Box Info */
function info_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'Sobre', 'info_theme_info');
}

add_action('wp_dashboard_setup', 'info_add_dashboard_widgets' );

function info_theme_info() {
echo "<ul>
	<li>
		<strong>Desenvolvido por:</strong> Cretton Info
	</li>
	<li>
		<strong>Licença:</strong> MIT
	</li>
	<li>
		<strong>Site:</strong> <a href='https://www.cretton.info' target='_blank'>https://www.cretton.info</a>
	</li>
	<li>
		<strong>e-mail:</strong> <a href='mailto:cretton.info@gmail.com'>contato@cretton.info</a>
	</li>
</ul>";
}