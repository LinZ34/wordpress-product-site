<?php get_header('product'); ?>
<?php get_template_part( 'include/header-education-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        お問い合わせ
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="user-title">
            <p>注意事項</p>
        </div>
        <div class="inq-notice">
            <p class="notice-text">
                ・本サービスは法人向けのサービスとなりますため、個人やフリーアドレスによるお問い合わせはお断りさせていただきます。<br>
                ・本サービスと同業もしくは競合企業と弊社が判断させていただく場合など、ご対応をお断りさせていただくことがございます。<br>
                ・競合調査等の確認のため、弊社よりご連絡させていただくことがございますので、固定電話のお電話番号でのご登録をお願いいたします。</p>
        </div>
        <div class="inq-list">
            <div class="inq-item">
                <div class="inqpic">
                    <img src="<?php pdt_img_dir() ?>/education/edu-inq.png">
                </div>
                <p class="inqtext">サービス紹介ご依頼</p>
                <button class="inqbutton">
                    <a href="<?= HOME_PATH ?>/education/inq/">フォームへ進む</a></button>
            </div>
            <div class="inq-item">
                <div class="inqpic">
                    <img src="<?php pdt_img_dir() ?>/education/edu-demo.png">
                </div>
                <p class="inqtext">無料体験のお申込み</p>
                <button class="inqbutton">
                    <a href="<?= HOME_PATH ?>/education/demo/">フォームへ進む</a></button>
            </div>
            <div class="inq-item">
                <div class="inqpic">
                    <img src="<?php pdt_img_dir() ?>/education/edu-coverage.png">
                </div>
                <p class="inqtext">協業・講演依頼・取材など</p>
                <button class="inqbutton">
                    <a href="<?= HOME_PATH ?>/education/coverage/">フォームへ進む</a></button>
            </div>
            <div class="inq-item">
                <div class="inqpic">
                    <img src="<?php pdt_img_dir() ?>/education/edu-proposal.png">
                </div>
                <p class="inqtext">その他弊社へのお問い合わせ・ご提案</p>
                <button class="inqbutton">
                    <a href="<?= HOME_PATH ?>/education/proposal/">フォームへ進む</a></button>
            </div>
        </div>
        <div class="inq-notice">
            <p class="inq-contact">連絡先：TEL:03-5759-0332（平日10:00〜18:00）</p>
            <p class="inq-contact-text">弊社への営業は<a href="<?= HOME_PATH ?>/education/inq/" class="inq-form">【フォーム】</a>から概要をお送りください。担当にて検討させていただきます。
                <br>なお、直接お電話にて営業のあった企業様とのお取引は今後控えさせていただきます。</p>
        </div>
        <div class="contentbox_btn">
            <a href="<?= HOME_PATH ?>/education/downloads">資料ダウンロード</a>
        </div>
    </div>
    <?php get_template_part( 'include/contactbtn-education-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-education' ); ?>
<?php get_footer('product'); ?>