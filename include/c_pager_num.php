<div class="c-pager-num u-text-1">
  <?php global $wp_rewrite; $paginate_base = get_pagenum_link(1); if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
    $paginate_format = '';
    $paginate_base = add_query_arg('paged','%#%');
  } else {
    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/','paged');;
    $paginate_base .= '%_%';
  }

  $queried_object = get_queried_object();
  $categoryname = $queried_object->labels->name ;

  if($wp_query->max_num_pages > 1){

    if($paged != 0) {
      echo '<a class="first page-numbers" href="'.get_pagenum_link(1).'"></a>';
    }

    echo paginate_links(array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 1,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '',
      'next_text' => '',
    ));

    if($wp_query->max_num_pages != $paged) {
      echo '<a class="last page-numbers" href="'.get_pagenum_link($wp_query->max_num_pages).'"></a>';
    }

  } else { ?>
    <span class="page-numbers">1</span>

  <?php } ?>
</div>

