<link rel="stylesheet" href="<?php css_dir() ?>/bootstrap.css">
<link rel="stylesheet" href="<?php css_dir() ?>/footer.css">
<?php 
function load_styles_based_on_order($parentID, $childOrdersAndFiles) {
    global $post;
    if (is_page() && $post->post_parent == $parentID) {
        $currentOrder = $post->menu_order;
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/footer.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/productheader.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css">';
        foreach ($childOrdersAndFiles as $order => $file) {
            if ($currentOrder == $order) {
                echo '<link rel="stylesheet" href="' . TEMP_DIR . '/' . $file . '" type="text/css">';
                break;
            }
        }
        return true;
    } else {
        return false;
    }
}
$childOrdersAndFilesForDiversity = array(
  1 => 'css/product/dv-case.css',
  2 => 'css/product/dv-reason.css',
  3 => 'css/product/dv-column.css',
  4 => 'css/product/dv-function.css',
  5 => 'css/product/dv-user.css',
  6 => 'css/product/dv-seminar.css',
  7 => 'css/product/dv-download.css',
  8 => 'css/product/dv-thanks.css',
  10 => 'css/product/dv-inquiry.css',
  11 => 'css/product/dv-inquiry-item.css',
  12 => 'css/product/dv-price.css',
);

$childOrdersAndFilesForManagement = array(
  1 => 'css/product/mg-seminar.css',
  2 => 'css/product/mg-usage.css',
  3 => 'css/product/mg-reason.css',
  4 => 'css/product/mg-download.css',
  5 => 'css/product/mg-thanks.css',
  6 => 'css/product/mg-inquiry.css',
  7 => 'css/product/mg-inquiry-item.css',
);

$childOrdersAndFilesForEngagement = array(
  1 => 'css/product/eg-reason.css',
  2 => 'css/product/eg-function.css',
  3 => 'css/product/eg-seminar.css',
  4 => 'css/product/eg-interview.css',
  5 => 'css/product/eg-download.css',
  6 => 'css/product/eg-inquiry.css',
  7 => 'css/product/eg-inquiry-item.css',
  8 => 'css/product/eg-thanks.css',
);
$childOrdersAndFilesForFeedback = array(
  1 => 'css/product/1on1-problem.css',
  2 => 'css/product/1on1-reason.css',
  3 => 'css/product/1on1-function.css',
  4 => 'css/product/1on1-seminar.css',
  5 => 'css/product/1on1-download.css',
  6 => 'css/product/1on1-thanks.css',
  7 => 'css/product/1on1-inquiry.css',
  8 => 'css/product/1on1-inquiry-item.css',
);
$childOrdersAndFilesForEducation = array(
  1 => 'css/product/edu-press.css',
  2 => 'css/product/edu-interview.css',
  3 => 'css/product/edu-download.css',
  4 => 'css/product/edu-thanks.css',
  5 => 'css/product/edu-inquiry.css',
  6 => 'css/product/edu-inquiry-item.css',
);
$childOrdersAndFilesForAlumni = array(
  1 => 'css/product/al-reason.css',
  2 => 'css/product/al-function.css',
  3 => 'css/product/al-price.css',
  4 => 'css/product/al-seminar.css',
  5 => 'css/product/al-inquiry.css',
  6 => 'css/product/al-inquiry-item.css',
  7 => 'css/product/al-download.css',
  8 => 'css/product/al-thanks.css',
);
load_styles_based_on_order(111, $childOrdersAndFilesForDiversity);
load_styles_based_on_order(316, $childOrdersAndFilesForManagement);
load_styles_based_on_order(377, $childOrdersAndFilesForEngagement);
load_styles_based_on_order(447, $childOrdersAndFilesForFeedback);
load_styles_based_on_order(523, $childOrdersAndFilesForEducation);
load_styles_based_on_order(218, $childOrdersAndFilesForAlumni);

  if (is_home() || is_front_page()) {
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topstyle.css?v=1.2">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topheader.css?v=1.0">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css?v=1.2">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
  } 
  else if(is_404()) {
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/pageheader.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-404.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
  } else if(is_page(['thanks-download'])) {
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/pageheader.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-thanks.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
  } else {
    $include_css_post_names = [
      'company',
      'column',
      'download',
      'inquiry',
      'service',
    ];
    $special_page_names = [
      'diversity',
      'management',
      'education',
      'engagement',
      '1on1',
      'education',
      'alumni',
    ];
    $single_page_names = [
      'diversitycase',
      'diversitycolumn',
      'diversityseminar',
      'managementseminar',
      'engagementseminar',
      'engagementdownload',
      '1on1seminar',
      '1on1download',
      'alumniseminar',
    ];
    foreach($include_css_post_names as $name) {
      if(is_page($name)) {
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/pageheader.css?v=1.0">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-' . $name . '.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
      } else if(is_post_type_archive($name)) {
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/pageheader.css?v=1.0">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css?v=1.2">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-' . $name . '.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
      } else if(is_singular($name)) {
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/pageheader.css?v=1.0">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-' . $name . '-single.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css?v=1.2">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/topbottom.css">';
      }
    }
    foreach($special_page_names as $name) {
      if(is_page($name)) {
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/productheader.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css?v=1.2">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/p-' . $name . '.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/bottom-' . $name . '.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/footer.css">'; 
      }
    }
    foreach($single_page_names as $name) {
      if(is_singular($name)) {
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/productheader.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/vendor/slick/slick-theme.css">';
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/footer.css">'; 
        echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/p-' . $name . '-single.css">';
      }
    }
  }
  ?>