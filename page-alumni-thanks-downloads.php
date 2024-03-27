<?php get_header('product'); ?>
<?php get_template_part( 'include/header-alumni-child' ); ?>
<main>
<div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        資料ダウンロードのご請求誠にありがとうございます !
        </div>
        </div>
    </div>
    <div class="content">
    <div class="thankstext">
      <h1>この度は弊社サービスへのお問い合わせありがとうございます。</h1>
      <p>ご登録いただきましたメールアドレスに受付完了メールをお送りいたしました。<br>
      <b>資料をダウンロードできるURL</b>を記載しておりますので、ご確認くださいませ。</p>
    </div>
    <div class="img">
      <img src="<?php img_dir() ?>/product/alumni/thanks-al.png">
    </div>
  </div>
  <div class="buttons">
		  <a href="<?= HOME_PATH ?>/alumni/" class="a-text">TOPページへ</a>
  </div>
  <?php get_template_part( 'include/contactbtn-alumni-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-alumni' ); ?>
<?php get_footer('product'); ?>