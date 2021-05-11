<?php
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails', array('styles'));

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_home()) {
    $query->set('posts_per_page', '3');
  }
}
add_action('pre_get_posts', 'change_posts_per_page');


add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('styles', [
    'labels' => [
      'name'          => 'Styles',
      'singular_name' => 'styles',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'editor', 'thumbnail')
    )
  ]);
}
function custom_template_include($template)
{
  if (is_single() && in_category('styles')) {
    $new_template = locate_template(array('single-styles.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);

function post_has_archive($args, $post_type)
{

  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
