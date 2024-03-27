<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        ご利用料金
        </div>
        </div>
    </div>
    <div class="contentbody">
            <div class="sectiontitle">
            <p>ご利用料金</p>
            <span>メーカー・サービス業・金融機関・地方自治体・商社など、<br>業種業態を問わず多くのお客様にご利用いただいております。</span>
			</div>
        <div class="inq-notice">
            <p class="notice-question">
                利用料金は一括請求ですか？月額請求ですか？</p>
                <p class="notice-text">
                1年間の契約となり、ご契約いただいたプランにてサービス開始初月に一括請求となります。<br>
                別途月額お支払いプランもございますので、詳しくはお問い合わせください。<br>
                <br>
                お電話でのお問い合わせ：03-5779-0332　カスタマーサクセス本部
                <br>
                メールでのお問い合わせ：
                <button class="inqbutton">
                    <a href="<?= HOME_PATH ?>/diversity/inq/">フォームへ進む</a></button></p>
        </div>
        <div class="sectiontitle"><span>詳しいご料金は、お気軽にお問い合わせください<br>
            ダウンロード資料には詳細な料金プランをご紹介しています</span>
			</div>
        <a href="<?= HOME_PATH ?>/diversity/downloads" class="download">
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
    </div>

    <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>