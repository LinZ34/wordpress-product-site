<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        <?php the_title(); ?>
        <div class="titletime">
        <time datetime="<?php the_time('Y.m.d'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
        </div>
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="back">
    <a href="<?= HOME_PATH ?>/diversity/columns/">コラム一覧に戻る</a>
    </div>
    <div class="content">
      <?= the_content() ?>
    </div>
    <a href="<?= HOME_PATH ?>/diversity/downloads" class="download">
      <div class="container-up">
      <div class="left">
      <p>無料<br>配布中</p>
      </div>
      <div class="middle">
        <p>男性育休取得率63％に向上！その秘訣とは！</p>
        <p>コネクシオ様インタビュー完全版</p>
      </div>
      </div>
      <div class="container-lw">
      <div class="right">
      こちらから<br>ダウンロード
      </div>
      <div class="right-sm">
      こちらからダウンロード
      </div>
      <div class="rightpic">
      </div>
      </div>
    </a>
    <div class="user-title">
            <p>関連コラム</p>
    </div>
    <ul class="pagelist">
    <?php
		$wp_query = new WP_Query([
			'post_type'      => 'diversitycolumn',
            'meta_key'       => 'pickup',
            'meta_value'     => 'no',
            'posts_per_page' => 3,
		]);
		?>
    <?php
      if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
      <li class="caseitem">
        <a href="<?php the_permalink(); ?>" class="columnsingle">
          <div class="columnpic">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
		  <div class="clmtext">
          <h2 class="clmtitle">
            <?php echo wp_trim_words( get_the_title(), 30, '…' ); ?>
          </h2>
          <p class="clmdate">
            <time datetime="<?php the_time('Y.m.d'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
          </p>
		  </div>
        </a>
      </li>
      <?php endwhile; else: ?>
      <p>まだ記事がありません</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
		</ul>
  </div>
  <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>