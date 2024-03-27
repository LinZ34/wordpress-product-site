<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        コラム一覧
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="user-title">
            <p>PICK  UP</p>
    </div>
    <?php
		$wp_query = new WP_Query([
			'post_type'      => 'diversitycolumn',
            'meta_key'       => 'pickup',
            'meta_value'     => 'no',
            'posts_per_page' => 9,
            'paged' => get_query_var('paged', 1),
		]);
        $pickup_column_query = new WP_Query([
            'post_type'      => 'diversitycolumn',
            'meta_key'       => 'pickup',
            'meta_value'     => 'yes',
            'posts_per_page' => 1,
        ]);
		?>
        <div class="pickup">
        <?php
        if ($pickup_column_query->have_posts()) :
            while ($pickup_column_query->have_posts()) : $pickup_column_query->the_post();
        ?>
      <a href="<?php the_permalink(); ?>" class="pickupitem">
          <div class="pickupdpic">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <div class="pickuptext">
          <h2 class="pickuptitle">
            <?php echo wp_trim_words( get_the_title(), 40, '…' ); ?>
          </h2>
          <div class="pickupcontent">
          <?php echo wp_trim_words( get_the_content(), 160, '…' ); ?>
		  </div>
		  <div class="pickupcontent-sm">
            <?php echo wp_trim_words( get_the_content(), 60, '…' ); ?>
          </div>
          </div>
        </a>
    <?php endwhile; else : ?>
    <p>まだ記事がありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
        </div>
        <div class="user-title-lw">
            <p>コラム一覧</p>
    </div>
		<ul class="columnlist">
    <?php
      if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
      <li class="columnitem">
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
    <?php get_template_part( 'include/c_pager_num' ); ?>
    </div>
    <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>