<?php get_header(); ?>
    <main>
    <div class="keyvisual" id="home">
    <img src="<?php img_dir() ?>/pages/pagekv.png" class="pagekv">
    <div class="title">
    <div class="titlesm"><span>ご相談、ご提案、無料デモ</span></div>
    <div class="titlebg">
      お問い合わせ
    </div>
    </div>
    </div>
    <div class="inquiry-content">
    <div class="item">
    <div class="rectangle" style="background-color: #1D97D6">
      <img src="<?php img_dir() ?>/pages/fl.svg">
    </div>
    <div class="pdttitle" style="color: #1D97D6">エアリーフレッシャーズ<br>クラウド</div>
    <p class="description">新卒採用におけるコミュニケーションプラットフォーム 10年連続No.1</p>
    <button class="inqbutton" style="background-color: #1D97D6"><a href="">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #EA8030">
      <img src="<?php img_dir() ?>/pages/dv.svg">
    </div>
    <div class="pdttitle" style="color: #EA8030">エアリーダイバーシティ<br>クラウド</div>
    <p class="description">社内情報格差をゼロにしてエンゲージメントアップ！</p>
    <button class="inqbutton" style="background-color: #EA8030"><a href="<?= HOME_PATH ?>/diversity/inquirys/">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #192C7D">
      <img src="<?php img_dir() ?>/pages/al.svg">
    </div>
    <div class="pdttitle" style="color: #192C7D">エアリー for アルムナイ</div>
    <p class="description">アルムナイ採用の成功には、アクセスされる専用システムの導入を</p>
    <button class="inqbutton" style="background-color: #192C7D"><a href="">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #5D4D92">
      <img src="<?php img_dir() ?>/pages/fb.svg">
    </div>
    <div class="pdttitle" style="color: #5D4D92">エアリー1on1クラウド</div>
    <p class="description">心理的安全性を高めキャリアを成功に導く「Growth Mindset」を組織に根付かせる</p>
    <button class="inqbutton" style="background-color: #5D4D92"><a href="">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #E44468">
      <img src="<?php img_dir() ?>/pages/eg.svg">
    </div>
    <div class="pdttitle" style="color: #E44468">エアリーエンゲージメント<br>クラウド</div>
    <p class="description">サーベイだけで満足してませんか？組織診断が終わったら、次は「課題の改善」へ</p>
    <button class="inqbutton" style="background-color: #E44468"><a href="">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #009F86">
      <img src="<?php img_dir() ?>/pages/ed.svg">
    </div>
    <div class="pdttitle" style="color: #009F86">エアリーエデュケーション<br>クラウド</div>
    <p class="description">人事課題解決に特化したコミュニケーションプラットフォーム大手企業利用社数No.1</p>
    <button class="inqbutton" style="background-color: #009F86"><a href="">お問い合わせ</a></button>
    </div>
    <div class="item">
    <div class="rectangle" style="background-color: #E62E8B">
      <img src="<?php img_dir() ?>/pages/mg.svg">
    </div>
    <div class="pdttitle" style="color: #E62E8B">エアリーマネジメント<br>クラウド</div>
    <p class="description">個人のエンゲージメントを可視化するアセスメントツール</p>
    <button class="inqbutton" style="background-color: #E62E8B"><a href="">お問い合わせ</a></button>
    </div>
    </div>
    <?php get_template_part( 'include/contactbtn' ); ?>
    </main>
<?php get_footer(); ?>