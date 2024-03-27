<?php get_header('product'); ?>
<?php get_template_part( 'include/header-engagement-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        エアリーエンゲージメントクラウド<br>
        資料一覧
        </div>
        </div>
    </div>
      <?php
  $download_query = new WP_Query([
    'post_type'      => 'engagementdownload',
    'posts_per_page' => 9,
  ]);
?>
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
            <?php echo wp_trim_words( get_the_title(), 40, '…' ); ?>
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
    <p>まだ資料がありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
      </ul>
      <div class="contentbox_btn">
				<a href="http://localhost:8888/wordpress/engagement/demo">無料デモお問い合わせ</a>
			</div>
    </div>
    <?php get_template_part( 'include/contactbtn-engagement-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-engagement' ); ?>
<?php get_footer('product'); ?>