<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        <?php the_title(); ?>
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="back">
    <a href="<?= HOME_PATH ?>/diversity/seminar/">セミナー一覧に戻る</a>
    </div>
    <div class="content">
    <?php
      $seminar_summary = get_field('summary');
      $seminar_content = get_field('description');
      $seminar_instructor = get_field('lecturer');
      $seminar_form = get_field('hubspot');
      $seminar_time = get_field('seminartime');
      $seminar_addtext = get_field('addtext');
    ?>
    <div class="seminarpic">
        <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
    </div>
    <div class="seminarsection">
    <div class="semianrtitle"><span>開催概要</span></div>
      <table class="summarytable">
        <tbody>
          <tr>
            <th class="left-cell">日時</th>
            <td class="right-cell"><?= $seminar_time ?></td>
          </tr>
          <?php
            foreach ($seminar_summary as $summary) {
              if (isset($summary['item']) && isset($summary['content'])) {
                      echo '<tr>';
                      echo '<th class="left-cell">' . $summary['item'] . '</th>';
                      echo '<td class="right-cell">' . $summary['content'] . '</td>';
                      echo '</tr>';
                  }
              }
            ?>
        </tbody>
      </table>
    </div>
    <div class="seminarsection">
    <?php
      $seminar_recommend = get_field('recommend');
      $recommend_field = get_field_object('recommend');
    ?>
    <?php
    $recommend_outputted = false;
    foreach ($seminar_recommend as $recommend) {
        if (!empty($recommend['list'])) {
            if (!$recommend_outputted) {
                echo '<div class="semianrtitle"><span>こんな方にオススメ</span></div>';
                echo '<ul class="recommendlist">';
                $recommend_outputted = true;
            }
            echo '<li>' . $recommend['list']. '</li>';
        }
    }
    if ($recommend_outputted) {
      echo '<div>' . $seminar_addtext . '</div>';
      echo '</ul>';
  }
    ?>
    </div>
    <div class="seminarsection">
    <div class="semianrtitle"><span>セミナー概要</span></div>
      <div class="seminarcontent"><?= $seminar_content ?></div>
    </div>
    <div class="seminarsection">
    <div class="semianrtitle"><span>講師</span></div>
      <?php foreach($seminar_instructor as $item): ?>
            <div class="lec-container">
              <div class="lec-left">
              <img src="<?= $item['lecturerpic']['url'] ?>">
              </div>
              <div class="lec-right">
              <div class="lecturer">
                <div class="lec-company"><?= $item['companyname'] ?></div>
                <span class="lec-title"><?= $item['title'] ?></span>
                <span class="lec-name"><?= $item['name'] ?></span>
              </div>
                <div class="lec-intro"><?= $item['lecturerintro'] ?></div>
              </div>
            </div>
          <?php endforeach; ?>
    </div>
    <div class="seminarsection">
      <div class="semianrtitle"><span>注意事項</span></div>
      <div class="privacy-text">
        <p>・本サービスは法人向けのサービスとなりますため、個人やフリーアドレスによるお問い合わせはお断りさせていただきます。<br>
        ・本サービスと同業もしくは競合企業と弊社が判断させていただく場合など、ご対応をお断りさせていただくことがございます。<br>
        ・競合調査等の確認のため、弊社よりご連絡させていただくことがございますので、固定電話のお電話番号でのご登録をお願いいたします。</p>
      </div>
    </div>
    <div class="seminarsection">
    <div class="semianrtitle"><span>お申し込みフォーム</span></div>
      <?= $seminar_form ?>
    </div>
            <?php
            $hubspot_pattern = '/\[hubspot-form[^\]]*\]/';
            preg_match($hubspot_pattern, $post_content, $hubspot_matches);
            if (!empty($hubspot_matches)) {
                echo '<div class="hubspot">' . $hubspot_matches[0] . '</div>';
            }
            ?>
    </div>
    </div>
  <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>