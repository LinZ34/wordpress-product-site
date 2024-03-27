<?php

  add_theme_support('post-thumbnails');

  define('TEMP_DIR', esc_url( get_template_directory_uri() ));
  define('HOME_PATH', esc_url( get_home_url() ));
  
  function tempath() {
    echo TEMP_DIR;
  }
  function home_path() {
    echo HOME_PATH;
  }
  function img_dir() {
    echo TEMP_DIR.'/images';
  }
  function pdt_img_dir() {
    echo TEMP_DIR.'/images/product';
  }
  function css_dir() {
    echo TEMP_DIR.'/css';
  }
  function js_dir() {
    echo TEMP_DIR.'/js';
  }
  function vendor_dir() {
    echo TEMP_DIR.'/vendor';
  }
  function wpdocs_theme_add_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
  }
  function cptui_register_my_cpts() {

    /**
     * Post Type: AIRYコラム.
     */
  
    $labels = [
      "name" => esc_html__( "AIRYコラム", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "AIRYコラム", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "AIRYコラム", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "column", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "column", $args );
  
    /**
     * Post Type: AIRY資料ダウンロード.
     */
  
    $labels = [
      "name" => esc_html__( "AIRY資料ダウンロード", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "AIRY資料ダウンロード", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "AIRY資料ダウンロード", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "download", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "download", $args );
  
    /**
     * Post Type: DV事例.
     */
  
    $labels = [
      "name" => esc_html__( "DV事例", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "DV事例", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "DV事例", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "diversitycase", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "diversitycase", $args );
  
    /**
     * Post Type: DVコラム.
     */
  
    $labels = [
      "name" => esc_html__( "DVコラム", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "DVコラム", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "DVコラム", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "diversitycolumn", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "diversitycolumn", $args );
  
    /**
     * Post Type: DVセミナー.
     */
  
    $labels = [
      "name" => esc_html__( "DVセミナー", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "DVセミナー", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "DVセミナー", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "diversityseminar", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "diversityseminar", $args );
  
    /**
     * Post Type: MGセミナー.
     */
  
    $labels = [
      "name" => esc_html__( "MGセミナー", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "MGセミナー", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "MGセミナー", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "managementseminar", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "managementseminar", $args );
  
    /**
     * Post Type: EGセミナー.
     */
  
    $labels = [
      "name" => esc_html__( "EGセミナー", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "EGセミナー", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "EGセミナー", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "engagementseminar", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "engagementseminar", $args );
  
    /**
     * Post Type: EG資料ダウンロード.
     */
  
    $labels = [
      "name" => esc_html__( "EG資料ダウンロード", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "EG資料ダウンロード", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "EG資料ダウンロード", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "engagementdownload", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "engagementdownload", $args );
  
    /**
     * Post Type: 1on1資料ダウンロード.
     */
  
    $labels = [
      "name" => esc_html__( "1on1資料ダウンロード", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "1on1資料ダウンロード", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "1on1資料ダウンロード", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "1on1download", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "1on1download", $args );
  
    /**
     * Post Type: 1on1セミナー.
     */
  
    $labels = [
      "name" => esc_html__( "1on1セミナー", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "1on1セミナー", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "1on1セミナー", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "1on1seminar", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "1on1seminar", $args );
  
    /**
     * Post Type: ALセミナー.
     */
  
    $labels = [
      "name" => esc_html__( "ALセミナー", "custom-post-type-ui" ),
      "singular_name" => esc_html__( "ALセミナー", "custom-post-type-ui" ),
    ];
  
    $args = [
      "label" => esc_html__( "ALセミナー", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "alumniseminar", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
      "show_in_graphql" => false,
    ];
  
    register_post_type( "alumniseminar", $args );
  }
  
  add_action( 'init', 'cptui_register_my_cpts' );
  
  function is_tree($pid) {
    global $post;
    if (is_page() && ($post->post_parent == $pid || is_page($pid))) {
        return true;
    }
    return false;
}
  add_filter('page_template_hierarchy', 'my_page_templates');
  function my_page_templates($templates) {
      global $wp_query;
  
      $template = get_page_template_slug();
      $pagename = $wp_query->query['pagename'];
  
      if ($pagename && ! $template) {
          $pagename = str_replace('/', '-', $pagename);
          $decoded = urldecode($pagename);
  
          if ($decoded == $pagename) {
              array_unshift($templates, "page-{$pagename}.php");
          }
      }
      return $templates;
  }
  add_filter('template_include', 'custom_404_template');
  function custom_404_template($template) {
      $current_page_id = get_queried_object_id();
      if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], 'diversity/') !== false) {
          return get_stylesheet_directory() . '/diversity-404.php';
      } else if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], 'alumni/') !== false) {
          return get_stylesheet_directory() . '/alumni-404.php';
      } else if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], 'management/') !== false) {
        return get_stylesheet_directory() . '/management-404.php';
      }else if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], 'engagement/') !== false) {
        return get_stylesheet_directory() . '/engagement-404.php';
      }else if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], '1on1/') !== false) {
        return get_stylesheet_directory() . '/1on1-404.php';
      }else if (!$current_page_id && strpos($_SERVER['REQUEST_URI'], 'education/') !== false) {
        return get_stylesheet_directory() . '/education-404.php';
      }

      return $template;
  }

  add_action('after_setup_theme', 'wpdocs_theme_add_editor_styles');
  
  function wpdocs_enqueue_styles() {
    wp_enqueue_style('editor-style', get_template_directory_uri() . '/css/editor-style.css');
  }
  
  add_action('wp_enqueue_scripts', 'wpdocs_enqueue_styles');

  function enqueue_scripts_with_ajax() {
    wp_enqueue_script('your-script-handle', get_template_directory_uri() . '/js/your-script.js', array('jquery'), '1.0', true);

    wp_localize_script('your-script-handle', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_with_ajax');
function load_column_content() {
  ob_start(); 
  require_once('ajax-load-column-content.php'); 
  $content = ob_get_clean(); 
  echo $content; 
  die(); 
}

add_action('wp_ajax_load_column_content', 'load_column_content');
add_action('wp_ajax_nopriv_load_column_content', 'load_column_content');