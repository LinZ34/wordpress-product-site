<?php get_header('product'); ?>
<?php get_template_part( 'include/header-alumni-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
            <p class="sub_title_en">Function</p>
			<p class="sub_title_jp">機能一覧</p>
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="pagetitle">
            カムバック採用の成功のために設計されたシステムで、課題解決に導く
        </div>
        <div class="logotitle">
            <img src="<?php img_dir() ?>/product/alumni/logoal.svg">
            <span>の主な機能</span>
        </div>
        <ul class="function-list">
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/alumni/f01.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/alumni/f01_sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">おしらせ・提出物・アンケート</p>
                <span class="function-line"></span>
                <div class="function-p">
                必ず見てもらいたい重要な連絡や転職意向のある方への求人票送付はおしらせ機能を使います。<br>
                定期的なアンケート実施も改めて閲覧してもらうきっかけとして有効です。<br>
                おしらせ・提出物・アンケートはプッシュ通知が飛ぶため、見逃す心配もありません。
                </div>
            </div>
            </li>
            <li>
            <div class="function-text">
                <p class="function-title">チャット</p>
                <span class="function-line"></span>
                <div class="function-p">
                選考に進む場合やエントリー後のやりとりなどはチャットで実施できます。一限管理しているしいステムのため、やりとりが分散したり対応漏れを防止することができます。
                </div>
            </div>
            <figure class="function-img">
                <img src="<?php pdt_img_dir() ?>/alumni/f02.png">
            </figure>
            <figure class="function-img-sp">
                <img src="<?php pdt_img_dir() ?>/alumni/f02_sp.png">
            </figure>
            </li>
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/alumni/f03.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/alumni/f03_sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">タイムライン形式</p>
                <span class="function-line"></span>
                <div class="function-p">
                会社の情報やイベントの案内など、最新のものが上に出てくる仕組みのため、久しぶりにログインしても最新の情報を閲覧することができます。
                </div>
            </div>
            </li>
            <li>
            <div class="function-text">
                <p class="function-title">プロフィール登録機能</p>
                <span class="function-line"></span>
                <div class="function-p">
                転職意向の有無やアルムナイか最終選考辞退者かといったオファーを出す上で重要な項目から、現在の居住地や在籍時の職種、専門領域なども登録することが可能です。
                </div>
            </div>
            <figure class="function-img">
                <img src="<?php pdt_img_dir() ?>/alumni/f04.png">
            </figure>
            <figure class="function-img-sp">
                <img src="<?php pdt_img_dir() ?>/alumni/f04_sp.png">
            </figure>
            </li>
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/alumni/f05.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/alumni/f05_sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">スマートフォンアプリ</p>
                <span class="function-line"></span>
                <div class="function-p">
                    アプリがあることで、すぐに情報を確認できます。またプッシュ通知により、アクセスの間隔が空いている利用者のログインを自然に促すことができます。
                </div>
            </div>
            </li>
            <li>
                <div class="function-text">
                    <p class="function-title">フォローサポート</p>
                    <span class="function-line"></span>
                    <div class="function-p">
                    アルムナイ採用に関する豊富な実績と知見があり、収益化ができているサービスのため事業撤退のリスクもありません。15年、5,400社以上の人事サービス実績をもとに具体的な運用支援を実施します。
                    </div>
                </div>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/alumni/f06.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/alumni/f06_sp.png">
                </figure>
                </li>
        </ul>
	 </div>
    <?php get_template_part( 'include/contactbtn-alumni-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-alumni' ); ?>
<?php get_footer('product'); ?>