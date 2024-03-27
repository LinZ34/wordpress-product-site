<?php get_header('product'); ?>
<?php get_template_part( 'include/header-education-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        無料体験・トライアルのご依頼
        </div>
        </div>
    </div>
    <div class="back">
        <a href="<?= HOME_PATH ?>/education/inquirys/">お問い合わせ一覧に戻る</a>
        </div>
    <div class="download-container">
        <div class="download-left">
            <div class="download-cover">
            <img src="<?php pdt_img_dir() ?>/education/edu-product.png">
            </div>
            <div class="download-notice">
					<p class="download-privacy-title">注意事項</p>
					<p class="download-privacy-text">・本サービスは法人向けのサービスとなりますため、個人やフリーアドレスによるお問い合わせはお断りさせていただきます。<br>
						・本サービスと同業もしくは競合企業と弊社が判断させていただく場合など、ご対応をお断りさせていただくことがございます。<br>
						・競合調査等の確認のため、弊社よりご連絡させていただくことがございますので、固定電話のお電話番号でのご登録をお願いいたします。</p>
				</div>
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
      </div>

        <div class="download-right">
        <p class="download-privacy-title">お問い合わせフォーム</p>
        <p class="download-thanks">
        この度は弊社サービスへのお問い合わせありがとうございます。弊社担当から折り返しご連絡いたします。
        </p>
                <div class="form">
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
				<script>
				  hbspt.forms.create({
					portalId: "6399170",
					formId: "33efac63-7ec7-4d80-b36b-1592147b807b"
				});
				</script>
                </div>
        </div>
    </div>

    <?php get_template_part( 'include/contactbtn-education-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-education' ); ?>
<?php get_footer('product'); ?>