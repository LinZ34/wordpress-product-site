<?php get_header('product'); ?>
<?php get_template_part( 'include/header-alumni-child' ); ?>
<main>
<div class="keyvisual" id="home">
    <div class="title">
    <div class="titlebg">
    ページが見つかりません
    </div>
    </div>
</div>
    <div class="content">
    <div class="text-404">
      <h1>お探しのページは、以下のいずれかの理由により、見つかりませんでした。</h1>
      <ul class="list">
        <li>URLが間違っている</li>
        <li>ページのURLが変更されている</li>
        <li>こちらの都合により、ページの掲載を中止した</li>
      </ul>
      <p>直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認ください。</p>
      <p>ブラウザの再読込みを行ってもこのページが表示される場合は、トップページに戻り目的のページを お探しください。</p>
    </div>
    <div class="img">
      <img src="<?php img_dir() ?>/product/alumni/404-al.png">
    </div>
  </div>
  <div class="buttons">
		  <a href="<?= HOME_PATH ?>/alumni" class="a-text">TOPページへ</a>
  </div>
  <?php get_template_part( 'include/contactbtn-alumni' ); ?>
    </main>
    <?php get_template_part( 'include/footer-alumni' ); ?>
<?php get_footer('product'); ?>
<?php
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/bottom-alumni.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/footer.css">'; 
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/productheader.css">';
    echo '<link rel="stylesheet" href="' . TEMP_DIR . '/css/product/al-404.css">';
?>