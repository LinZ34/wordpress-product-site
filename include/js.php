<script src="<?php vendor_dir() ?>/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php vendor_dir() ?>/jquery/jquery-migrate-3.3.1.min.js"></script>


<?php 
    $loaded_pageheader = false; 
 if (is_front_page()) {
    echo '<script src="' . TEMP_DIR . '/js/main.js?v=1.2"></script>';
    echo '<script src="' . TEMP_DIR . '/vendor/slick/slick.min.js"></script>';
  } 
  else if(is_404()) {
    echo '<script src="' . TEMP_DIR . '/js/pageheader.js"></script>';
  } 
  else {
    $include_js_post_names = [
      'company',
      'column',
      'service',
      'download',
      'inquiry',
      'product',
    ];
    foreach ($include_js_post_names as $name) {
        if (is_page($name) || (in_array($name, ['product']) && !$loaded_pageheader)) {
            echo '<script src="' . TEMP_DIR . '/js/pageheader.js"></script>';
            $loaded_pageheader = true; 
        }
        if (in_array($name, ['product'])) {
            echo '<script src="' . TEMP_DIR . '/js/bootstrap.min.js"></script>';
            echo '<script src="' . TEMP_DIR . '/vendor/slick/slick.min.js"></script>';
            echo '<script src="' . TEMP_DIR . '/js/product/p-diversity.js"></script>';
        }
        else if (is_post_type_archive($name)) {
            if ($name === 'column') {
                echo '<script src="' . TEMP_DIR . '/js/p-column.js"></script>';
            }
            if ($name === 'download') {
                echo '<script src="' . TEMP_DIR . '/js/p-download.js"></script>';
            }
        } else if (is_singular($name)) {
            echo '<script src="' . TEMP_DIR . '/js/p-' . $name . '.js"></script>';
        }
    }
}
?>