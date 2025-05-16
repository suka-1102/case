<?php

  register_nav_menus (array(
      'mypage' => 'button',
      'Menu'=> 'メニュー'
  ));

   add_theme_support('post_thumbnails');
  add_theme_support('menus');

  function my_script() {
    wp_enqueue_script(
      'myscript',
      get_template_directory_uri() . '/script.js',
      array(),
      false,
      true
    );
  }
  add_action('wp_enqueue_scripts','my_script');

  function post_has_archive($args,$post_type) {
    if('post'==$post_type) {
      $args['rewrite']=true;
      $args['has_archive']='posts';
    }
    return $args;
  }
  add_filter('register_post_type_args','post_has_archive',10,2);