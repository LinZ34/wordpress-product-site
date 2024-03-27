<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
            <?php
              $case_company = get_field('companyname');
              $case_companyintro = get_field('company');
              $case_topic = get_field('topics');
              $case_message = get_field('message');
              $case_intro = get_field('intro');
              $case_companyurl = get_field('companyurl');
              ?>
              <?= $case_company ?>
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="casetitle">
    <?= the_title(); ?>
    </div>
    <div class="introbg">
      <div class="company">
        <div class="companytitle">
          <p>会社紹介</p>
          </div>
        <div class="introtext">
          <h4><?= $case_company ?></h4>
          <p><?= $case_companyintro ?></p>
          <div>URL:&nbsp;<a href="<?= $case_companyurl ?>"><?php echo $case_companyurl; ?></a></div>
        </div>
      </div>
      <div class="topic">
        <div class="topictitle">
          <p>TOPICS</p>
        </div>
        <div class="topictext">
          <?= $case_topic ?>
        </div>
      </div>
    </div>
    <div class="casepagepic">
      <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
    </div>
    <div class="message">
      <div class="msgtext"><?= $case_message ?></div>
    </div>
    <div class="content">
      <div class="intro"><?= $case_intro?></div>
      <?= the_content() ?>
    </div>
    <a href="<?= HOME_PATH ?>/diversity/download" class="download">
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
            <p>導入事例</p>
    </div>
    <ul class="pagelist">
	 <?php
		$dv_case_query = new WP_Query([
			'post_type'      => 'diversitycase',
            'paged' => $paged, 
            'posts_per_page' => 3,
		]);
		?>
		<?php
		if ($dv_case_query->have_posts()) :
			while ($dv_case_query->have_posts()) : $dv_case_query->the_post();
			$case_company = get_field('companyname');
            $case_logo = get_field('companylogo');
		?>
			<li class="caseitem">
			<a href="<?php the_permalink(); ?>" class="casesingle">
				<div class="casepic">
					<?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
				</div>
                <div class="companyname"><?= $case_company ?></div>
				<h2 class="casetitledown">
					<?php echo wp_trim_words( get_the_title(), 40, '…' ); ?>
				</h2>
				<div class="caselogo">
                <?php if ($case_logo) {
                    echo '<img src="' . esc_url($case_logo['url']) . '">';} ?>
				</div>
				</a>
			</li>
			<?php endwhile; else : ?>
			<p>まだ記事がありません</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
    <div class="contentbox_btn">
            <a href="<?= HOME_PATH ?>/diversity/case">事例一覧を見る</a>
        </div>
  </div>
  <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>