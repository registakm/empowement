<?php
/*  remove wp_head
/* ------------------------------------ */
remove_action('wp_head','wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

/*  add custom navigation
/* ------------------------------------ */
add_theme_support( 'menus' );
register_nav_menu('gnav', 'グローバルナビゲーション' );
if ( ! function_exists( 'my_navigation_filter' ) ) {
  function my_navigation_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
}
add_filter('nav_menu_item_id', 'my_navigation_filter', 100, 1);
add_filter('page_css_class', 'my_navigation_filter', 100, 1);

/*  IE js header
/* ------------------------------------ */
if ( ! function_exists( 'ie_js_header' ) ) {
  function ie_js_header () {
    $html = '';
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/ie/html5.js' ) . '"></script>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/ie/selectivizr.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
    echo $html;
  }
  
}
add_action( 'wp_head', 'ie_js_header' );

/*  get parent category info
/* ------------------------------------ */
function get_parent_category ($tax = 'category') {
  global $post;
  $parent_cat = 0;
  if (is_single()) {
    $cat_info = get_the_terms( $post -> ID, $tax );
    $cat_parent_id = array_shift($cat_info) -> category_parent;
    // get_term($cat_parent_id);
    if ($cat_parent_id != 0) {
      $parent_cat = get_term($cat_parent_id, $tax);
    }
    return $parent_cat;
  }
}

/*  get category info
/* ------------------------------------ */
function get_category_info ($tax = 'category') {
  global $post;
  $cat = 0;
  if (is_single()) {
    $cat_info = get_the_terms( $post -> ID, $tax );
    if ($cat_info) {
      $cat = array_shift($cat_info);
    }
  }
  return $cat;
}

/*  get ancestor page
/* ------------------------------------ */
function get_page_ancestor() {
  global $post;
        /* Get an array of Ancestors and Parents if they exist */
  $parents = get_post_ancestors( $post -> ID );
  $id = ($parents) ? $parents[count($parents)-1]: $post -> ID;
  $parent = get_page($id);
  $class = $parent -> post_name;
  // if ($anc) {
  //   $obj -> ID = $anc;
  //   $obj -> post_title = get_post($anc) -> post_title;
  // } else {
  //   $obj -> ID = $post->ID;
  //   $obj -> post_title = $post -> post_title;
  // };
}

/*  get category information
/* ------------------------------------ */
function apt_category_info($tax='category') {
  global $post;
  $cat = get_the_terms($post->ID, $tax);
  $obj = new stdClass;
  if ($cat) {
    $cat = array_shift($cat);
    $obj->name = $cat->name;
    $obj->slug = $cat->slug;
  } else {
    $obj->name = '';
    $obj->slug = '';
  }
  return $obj;
}

/*  create breadcrumb
/* ------------------------------------ */
function set_breadcrumb() {
  if (!is_home()) {
      echo '<a href="'.home_url().'">Home</a>';
  }
  if (is_category() || is_single()) {
      echo " &gt; ";
      $cat = get_the_category();
      echo get_category_parents($cat[0], true, ' &gt; ');
      the_title();
  } elseif (is_page()) {
  echo " &gt; ";
  global $post;
  $ancestors = get_post_ancestors($post -> ID);
      foreach (array_reverse($ancestors) as $parid) {
        $title = get_page($parid) -> post_title;
        echo '<a href="'.get_page_link($parid).'" title="'.$title.'">'.$title.'</a> &gt; ';
      }
  the_title();
  }
}

/*  custom post type
/* ------------------------------------ */
add_action('init', 'register_post_type_and_taxonomy' );
function register_post_type_and_taxonomy () {
  register_post_type(
    'product',
    array(
      'labels' => array(
        'name' => '製品情報',
        'add_new_item' => '製品情報の追加',
        'edit_item' => '製品情報の編集'
        ),
      'public' => true,
      'supports' => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      ),
    )
  );
  register_taxonomy(
    'product_name',
    'product',
    array(
      'labls' => array(
        'name' => '商品名',
        'add_new_item' => '商品名を追加',
        'edit_item' => '商品名の編集',
      ),
      'hierarchical' => true,
      'show_admin_column' => true,
    )
  );
}
?>