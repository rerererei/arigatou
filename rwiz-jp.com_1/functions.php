<?php
function my_enqueue_styles()
{
    wp_register_style('animate', get_template_directory_uri() . '/animate.min.css', array(), false, 'all');
    wp_enqueue_style('animate');
    wp_register_style('reset', get_template_directory_uri() . '/ress.css', array('animate'), false, 'all');
    wp_enqueue_style('reset');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('reset'), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


function st_enqueue_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', false);
    wp_enqueue_script('wow', get_template_directory_uri() . '/wow.min.js', array('jquery'), false);
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('wow'), false);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');
add_theme_support('post-thumbnails');

function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
  
    // 現在のページ数
    global $paged;
    if(empty($paged)) {
      $paged = 1;
    }
  
    // 全ページ数
    if($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages) {
        $pages = 1;
      }
    }
  
    // ページ数が2ぺージ以上の場合のみ、ページネーションを表示
    if(1 != $pages) {
      echo '<div class="pagenation">';
      echo '<ul>';
      // 1ページ目でなければ、「前のページ」リンクを表示
      if($paged > 1) {
        echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前へ</a></li>';
      }
  
      
  
      // 最終ページでなければ、「次のページ」リンクを表示
      if ($paged < $pages) {
        echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次へ</a></li>';
      }
      echo '</ul>';
      echo '</div>';
    }
  }
