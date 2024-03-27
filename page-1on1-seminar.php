<?php get_header('product'); ?>
<?php get_template_part( 'include/header-1on1-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        セミナー一覧
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="user-title">
            <p>受付中のセミナー</p>
    </div>
    <?php
      $today = date("Ymd");
      $seminar_query = new WP_Query([
        'post_type' => '1on1seminar',
        'meta_query' => array(array(
          'key' => 'seminardate',
          'value' => $today,
          'compare' => '>=',
        ))
      ]);

      $wp_query = new WP_Query([
        'post_type' => '1on1seminar',
        'posts_per_page' => 9,
        'paged' => get_query_var('paged', 1),
        'meta_query' => array(array(
          'key' => 'seminardate',
          'value' => $today,
          'compare' => '<',
        ))
      ]);
    ?>
        <div class="semianropen">
        <ul class="seminarpagelist">
          <?php 
          if($seminar_query->have_posts()):
          while($seminar_query->have_posts()): $seminar_query->the_post(); 
          $seminar_time = get_field('seminartime');
          ?>
            <li class="item">
              <a href="<?= get_post_permalink() ?>" class="itemlink">
                <div class="itempic">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="itemcontent">
                  <div class="status"></div>
                  <h3 class="seminartitle"><?php echo wp_trim_words( get_the_title(), 50, '…' ); ?></h3>
                  <p class="datetitle">開催日時</p>
                  <p class="date"><?= $seminar_time ?></p>
                </div>
              </a>
            </li>
            <?php endwhile; else : ?>
            <p class="notexist">受付中のセミナーはありません。</p>
            <?php endif; ?>
        </ul>
        </div>
        <div class="user-title">
            <p>受付終了のセミナー</p>
        </div>
        <div class="seminarclose">
        <ul class="seminarpagelist">
          <?php 
          if($wp_query->have_posts()):
          while($wp_query->have_posts()): $wp_query->the_post(); 
          $seminar_time = get_field('seminartime');
          ?>
            <li class="item">
              <a href="<?= get_post_permalink() ?>" class="itemlink">
                <div class="itempic">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="itemcontent">
                  <div class="statusclose"></div>
                  <h3 class="seminartitle"><?php echo wp_trim_words( get_the_title(), 50, '…' ); ?></h3>
                  <p class="datetitle">開催日時</p>
                  <p class="date"><?= $seminar_time ?></p>
                </div>
              </a>
            </li>
            <?php endwhile; else : ?>
            <p class="notexist">受付終了のセミナーはありません。</p>
            <?php endif; ?>
        </ul>
        </div>
    <?php get_template_part( 'include/c_pager_num' ); ?>
    </div>
    <?php get_template_part( 'include/contactbtn-1on1-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-1on1' ); ?>
<?php get_footer('product'); ?>