<?php

namespace Roots\Sage\Assets;

/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/styles/main.css
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/scripts/modernizr.js
 * 2. /theme/assets/scripts/main.js
 */

class JsonManifest {
  private $manifest;

  public function __construct($manifest_path) {
    if (file_exists($manifest_path)) {
      $this->manifest = json_decode(file_get_contents($manifest_path), true);
    } else {
      $this->manifest = [];
    }
  }

  public function get() {
    return $this->manifest;
  }

  public function getPath($key = '', $default = null) {
    $collection = $this->manifest;
    if (is_null($key)) {
      return $collection;
    }
    if (isset($collection[$key])) {
      return $collection[$key];
    }
    foreach (explode('.', $key) as $segment) {
      if (!isset($collection[$segment])) {
        return $default;
      } else {
        $collection = $collection[$segment];
      }
    }
    return $collection;
  }
}

function asset_path($filename) {
  $dist_path = get_template_directory_uri() . DIST_DIR;
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;

  if (empty($manifest)) {
    $manifest_path = get_template_directory() . DIST_DIR . 'assets.json';
    $manifest = new JsonManifest($manifest_path);
  }

  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $directory . $manifest->get()[$file];
  } else {
    return $dist_path . $directory . $file;
  }
}

function assets() {
  wp_enqueue_style('bootstrap', asset_path('styles/bootstrap.min.css'), false, null);
  wp_enqueue_style('grayscale', asset_path('styles/grayscale.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('jquery_js', asset_path('scripts/jquery.js'), [], null, true);
  wp_enqueue_script('jquery_easing', asset_path('scripts/jquery.easing.min.js'), ['jquery_js'], null, true);
  wp_enqueue_script('bootstrap', asset_path('scripts/bootstrap.min.js'), ['jquery_js'], null, true);
  wp_enqueue_script('grayscale', asset_path('scripts/grayscale.js'), ['jquery_js'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
