<?php get_header(); ?>
<main>
    <div class="keyvisual" id="home">
    <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
    <div class="title">
    <div class="titlebg">
        404 Not Found
    </div>
    <div class="titlesm">ページが見つかりません</div>
    </div>
    </div>
    <div class="content">
    <div class="text">
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
      <img src="<?php img_dir() ?>/pages/404.png">
    </div>
  </div>
  <div class="buttons">
		  <a href="<?= HOME_PATH ?>/" class="a-text">TOPページへ</a>
      <a href="<?= HOME_PATH ?>/" class="a-text">サービス一覧を見る</a>
  </div>
  <?php get_template_part('include/contactbtn'); ?>
</main>
<?php get_footer(); ?>