<?php

  register_nav_menus (array(
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

register_sidebar( array(
  'name' => 'サイドバー'
));

function my_custom_post_type() {
    register_post_type('company_series',
        array(
            'labels' => array(
                'name' => __('連載ページ'),
                'singular_name' => __('連載ページ')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'company-post'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('category'), // ←ここがポイント
        )
    );
}
add_action('init', 'my_custom_post_type');

function my_company_pickup_post_type() {
    register_post_type('company_pickup',
        array(
            'labels' => array(
                'name' => __('企業ピックアップ'),
                'singular_name' => __('企業ピックアップ')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'company-pickup'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('category'), // ← カテゴリを使えるようにする
        )
    );
}
add_action('init', 'my_company_pickup_post_type');
