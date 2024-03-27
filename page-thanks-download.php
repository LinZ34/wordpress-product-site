<?php get_header(); ?>
<main>
    <div class="keyvisual" id="home">
    <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
    <div class="title">
    <div class="titlebg">
    資料申込が完了しました!
    </div>
    <div class="titlesm">資料ダウンロードのご請求ありがとうございます !</div>
    </div>
    </div>
    <div class="content">
    <div class="text">
      <h1>この度は弊社サービスへのお問い合わせありがとうございます。</h1>
      <p>ご登録いただきましたメールアドレスに受付完了メールをお送りいたしました。<br>
      <b>資料をダウンロードできるURL</b>を記載しておりますので、ご確認くださいませ。</p>
    </div>
    <div class="img">
      <img src="<?php img_dir() ?>/pages/thanks.png">
    </div>
  </div>
  <div class="buttons">
		  <a href="<?= HOME_PATH ?>/" class="a-text">TOPページへ</a>
  </div>
  <?php get_template_part('include/contactbtn'); ?>
</main>
<?php get_footer(); ?>