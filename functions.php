<?php

if (!defined('WP_ENVIRONMENT_TYPE')) {
    define('WP_ENVIRONMENT_TYPE', 'production'); 
}

define('VITE_ASSETS_DIR', get_template_directory_uri() . '/public/build/');
define('VITE_MANIFEST_PATH', get_template_directory() . '/public/build/manifest.json');
define('VITE_LIVE_URL', 'http://localhost:5173/');

add_filter( 'theme_file_path', 'wp_normalize_path' );
add_filter('wp_script_attributes', function($attributes){
if (isset($attributes['id']) && strpos($attributes['id'], 'vite-') === 0) {
			$attributes['type'] = 'module';
		}
		return $attributes;
});

function vite_asset(string $path): string
{

    if (WP_ENVIRONMENT_TYPE === 'local') {
        return VITE_LIVE_URL. $path;
    }

    if (!file_exists(VITE_MANIFEST_PATH)) {
         trigger_error( 'No manifest.json found in /public/build folder. Please run `npm run build` first', \E_USER_WARNING );
        return '';
    }

    static $manifest = json_decode(file_get_contents(VITE_MANIFEST_PATH), true);
    
    if (!isset($manifest[$path]['file'])) {
         trigger_error( esc_html($path).' not found in manifest.json: ', \E_USER_WARNING );
        return '';
    }

    return VITE_ASSETS_DIR . $manifest[$path]['file'];
}


function theme_enqueue_assets() {

     if (WP_ENVIRONMENT_TYPE === 'local') {
        wp_enqueue_script('vite-hmr', VITE_LIVE_URL.'src/reload.js', [], null, true);
        wp_enqueue_script('vite-client', VITE_LIVE_URL.'@vite/client', [], null, true);
    }

    wp_enqueue_style('theme-app', vite_asset('src/css/app.css'), [], null);
	wp_enqueue_script('theme-app', vite_asset('src/js/app.js'), [], null, true);

}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');


function theme_editor_assets() {

    wp_enqueue_script(
        'theme-editor',
        vite_asset('src/js/editor.js'),
        ['wp-blocks', 'wp-dom-ready', 'wp-edit-post'],
        null,
        true
    );

    wp_enqueue_style(
        'theme-editor',
        vite_asset('src/css/editor.css'),
        [],
        null
    );
}
add_action('enqueue_block_editor_assets', 'theme_editor_assets');


add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('align-wide');
