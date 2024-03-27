<?php get_header(); ?>
    <main>
    <div class="keyvisual" id="home">
    <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
    <div class="title">
    <div class="titlesm">
    <?php
              $custom_categories = get_the_terms(get_the_ID(), 'column_top_cate');

              if ($custom_categories && !is_wp_error($custom_categories)) {
                foreach ($custom_categories as $custom_category) {
                  echo '<span class="' . $custom_category->slug . '">' . $custom_category->name . '</span>';
                }
              }
            ?>
    </div>
    <div class="titlebg-sg">
    <?php the_title(); ?>
    </div>
    </div>
    </div>
    <div class="column-sg">
      <div class="tbtitle">目次</div>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php
  $post_content = get_the_content();
  $pattern = '/<h2.*?>(.*?)<\/h2>/i';
  preg_match_all($pattern, $post_content, $matches);

  if (!empty($matches[1])) {
    echo '<ul class="contentstb">';
    foreach ($matches[1] as $h2_content) {
        echo '<li>' . $h2_content . '</li>';
    }
    echo '</ul>';
  } 
?>
  <div class="clm-content">
    <?php the_content(); ?>
  </div>
  <?php endwhile; endif; ?>
  <div class="othtitle">その他のコラム</div>
  <ul class="sgcolumns">
    <?php
      $args = [
        'post_type' => 'column', 
      ];
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
      <li class="onecolumn">
        <a href="<?php the_permalink(); ?>" class="acolumn">
          <div class="clmnpic">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <h2 class="clmtitle">
            <?php echo wp_trim_words( get_the_title(), 30, '…' ); ?>
          </h2>
          <p class="clmdate">
            <time datetime="<?php the_time('Y.m.d'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
          </p>
          <div class="clmctg">
            <?php
              $custom_categories = get_the_terms(get_the_ID(), 'column_top_cate');

              if ($custom_categories && !is_wp_error($custom_categories)) {
                foreach ($custom_categories as $custom_category) {
                  echo '<span class="' . $custom_category->slug . '">' . $custom_category->name . '</span>';
                }
              }
            ?>
          </div>
        </a>
      </li>
      <?php endwhile; else: ?>
      <p>まだ記事がありません</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      </li>
    </ul>
    <div class="contentbox_btn">
		  <a href="<?= HOME_PATH ?>/column/" class="a-text">コラム一覧に戻る</a>
		</div>
  </div>
  <?php get_template_part( 'include/contactbtn' ); ?>
    </main>
<?php get_footer(); ?>