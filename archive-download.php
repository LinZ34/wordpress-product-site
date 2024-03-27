<?php get_header(); ?>
<main>
    <div class="keyvisual" id="home">
        <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
        <div class="title">
            <div class="titlesm"><span>お役立ち資料</span></div>
            <div class="titlebg">
                DOWNLOAD
            </div>
        </div>
    </div>
      <div class="tbtitle">ピックアップ</div>
      <?php
  $popular_download_query = new WP_Query([
    'post_type'      => 'download',
    'meta_key'       => 'pickup',
    'meta_value'     => 'yes',
    'posts_per_page' => 3,
  ]);
  $download_query = new WP_Query([
    'post_type'      => 'download',
    'posts_per_page' => 9,
    'meta_key'       => 'pickup',
    'meta_value'     => 'no',
  ]);
?>
<div class="upper-bg">
<ul class="upper-download">
  <?php
  if ($popular_download_query->have_posts()) :
    while ($popular_download_query->have_posts()) : $popular_download_query->the_post();
    $download_recommmend = get_field('recommend');
    $recommend_field = get_field_object('recommend');
  ?>
      <li class="up-list">
      <a href="<?php the_permalink(); ?>" class="dwdsingle">
          <div class="dwdpic">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <div class="dwdtext">
          <h2 class="dwdtitle">
            <?php echo wp_trim_words( get_the_title(), 30, '…' ); ?>
          </h2>
          <ul class="dwdlist">
          <?php 
            echo '<div class="recommend">' . $recommend_field['label'] . '</div>';
            foreach($download_recommmend as $item): ?>
                <li><?= $item['list'] ?></li>
              <?php endforeach; ?>
          </ul>
        </div>
        </a>
      </li>
    <?php endwhile; else : ?>
    <p>まだ記事がありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</ul>
    </div>
    <div class="download">
    <p class="lw-title">各種お役立ち資料のダウンロードができます。</p>
    <ul class="lower-download">
  <?php
  if ($download_query->have_posts()) :
    while ($download_query->have_posts()) : $download_query->the_post();
    $download_recommmend = get_field('recommend');
    $recommend_field = get_field_object('recommend');
  ?>
      <li class="lw-list">
      <a href="<?php the_permalink(); ?>" class="acolumn">
          <div class="lw-dwdpic">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <h2 class="lw-dwdtitle">
            <?php echo wp_trim_words( get_the_title(), 30, '…' ); ?>
          </h2>
          <ul class="dwdlist">
          <?php 
            echo '<div class="recommend">' . $recommend_field['label'] . '</div>';
            foreach($download_recommmend as $item): ?>
                <li><?= $item['list'] ?></li>
              <?php endforeach; ?>
          </ul>
        </a>
      </li>
    <?php endwhile; else : ?>
    <p>まだ記事がありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <?php get_template_part('include/contactbtn'); ?>
</main>
<?php get_footer(); ?>