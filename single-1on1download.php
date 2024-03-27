<?php get_header('product'); ?>
<?php get_template_part( 'include/header-1on1-child' ); ?>
<?php
  $download_form = get_field('form');
?>
<main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        <?php the_title(); ?>
        </div>
        </div>
    </div>
    <div class="back">
    <a href="<?= HOME_PATH ?>/1on1/downloads/">資料一覧に戻る</a>
    </div>
    <div class="download-container">
        <div class="download-left">
            <div class="download-cover">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
            </div>
            <?php
              $download_recommmend = get_field('recommend');
              $recommend_field = get_field_object('recommend');
              ?>
            <ul class="dwdlist">
          <?php 
            echo '<div class="recommend">' . $recommend_field['label'] . '</div>';
            foreach($download_recommmend as $item): ?>
                <li><?= $item['list'] ?></li>
              <?php endforeach; ?>
          </ul>
                <div class="download-notice">
					<p class="download-privacy-title">注意事項</p>
					<p class="download-privacy-text">・本サービスは法人向けのサービスとなりますため、個人やフリーアドレスによるお問い合わせはお断りさせていただきます。<br>
						・本サービスと同業もしくは競合企業と弊社が判断させていただく場合など、ご対応をお断りさせていただくことがございます。<br>
						・競合調査等の確認のため、弊社よりご連絡させていただくことがございますので、固定電話のお電話番号でのご登録をお願いいたします。</p>
				</div>
      </div>

        <div class="download-right">
            <div class="download-privacy">
					<p class="download-privacy-title">個人情報の取り扱いについて</p>
							<p class="download-privacy-text">ご記入いただいた個人情報は以下の目的で利用させていただきます。
								<br> - サービスの資料提供
								<br> - サービスの情報提案および案内などの営業活動
								<br> - お問い合わせ対応
								<br>当社では、ご記入いただいた情報を適切に管理し、法令等による場合を除き、ご本人の同意なく第三者に開示、提供することはありません。</p>
							<p class="download-privacy-text">
								送信前に「<a href="https://edge-inc.co.jp/policy.html" target="_blank" class="download-pvlink">プライバシーポリシー</a>」をお読みいただき、 同意をお願いいたします。<br>
								(<a href="https://edge-inc.co.jp/individual.html" target="_blank" class="download-pvlink">個人情報保護方針</a>も合わせてお読みください。)
							</p>
				</div>
                <div class="form"><?= $download_form ?></div>
            <?php
            $hubspot_pattern = '/\[hubspot-form[^\]]*\]/';
            preg_match($hubspot_pattern, $post_content, $hubspot_matches);
            if (!empty($hubspot_matches)) {
                echo '<div class="hubspot">' . $hubspot_matches[0] . '</div>';
            }
            ?>
        </div>
    </div>
    <?php get_template_part( 'include/contactbtn-1on1-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-1on1' ); ?>
<?php get_footer('product'); ?>