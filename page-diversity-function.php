<?php get_header('product'); ?>
<?php get_template_part( 'include/header-diversity-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        エアリーダイバーシティクラウドの<br>
        機能一覧
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="pagetitle">
            休業者フォロー専用に設計されたシステムで、課題解決に導く
        </div>
        <div class="logotitle">
            <img src="<?php img_dir() ?>/product/diversity/logodv.svg">
            <span>の主な機能</span>
        </div>
        <ul class="function-list">
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/diversity/f01.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/diversity/f01-sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">おしらせ・提出物・アンケート</p>
                <span class="function-line"></span>
                <div class="function-p">
                制度変更や法律改正などの必ず見てもらいたい重要な連絡や、決まった書式での提出書類、イベントの出欠確認や保育園入園の目処など、すべてスマートフォンアプリのプッシュ通知で見逃すことなく確認・回答され、集計も１クリックです。
                </div>
            </div>
            </li>
            <li>
            <div class="function-text">
                <p class="function-title">チャット</p>
                <span class="function-line"></span>
                <div class="function-p">
                    ビジネスチャットの利用が一般的になる中、LINE等に慣れた社員にも使いやすく、マニュアルや説明がなくとも簡単にやり取りができます。
                </div>
            </div>
            <figure class="function-img">
                <img src="<?php pdt_img_dir() ?>/diversity/f02.png">
            </figure>
            <figure class="function-img-sp">
                <img src="<?php pdt_img_dir() ?>/diversity/f02-sp.png">
            </figure>
            </li>
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/diversity/f03.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/diversity/f03-sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">タイムライン形式</p>
                <span class="function-line"></span>
                <div class="function-p">
                    最新情報が上に出てくる仕様のため、先輩社員からの情報発信や復職に役立つ情報、よくある質問を掲載しておけば、休業者が知りたい情報を最新順に掲載できます。<br>
                    過去のデータは、検索することもできるため不安解消のためのデータを蓄積できます。
                </div>
            </div>
            </li>
            <li>
            <div class="function-text">
                <p class="function-title">スターボタン</p>
                <span class="function-line"></span>
                <div class="function-p">
                    先輩情報や同じ休業中の社員の投稿に対して、気軽にリアクションできるように、あえて「星マーク」を押して、「見たよ」という表現ができるようにしました。
                </div>
            </div>
            <figure class="function-img">
                <img src="<?php pdt_img_dir() ?>/diversity/f04.png">
            </figure>
            <figure class="function-img-sp">
                <img src="<?php pdt_img_dir() ?>/diversity/f04-sp.png">
            </figure>
            </li>
            <li>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/diversity/f05.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/diversity/f05-sp.png">
                </figure>
            <div class="function-text">
                <p class="function-title">スマートフォンアプリ</p>
                <span class="function-line"></span>
                <div class="function-p">
                    アプリがあることで、すぐに情報を確認でき、ログイン頻度を高めることができます。またプッシュ通知により確認事項の見逃しを防止し、管理業務の工数削減にもつながります。
                </div>
            </div>
            </li>
            <li>
                <div class="function-text">
                    <p class="function-title">RPA機能（オプション）<br>
                        システムによる自動おしらせ通知機能</p>
                    <span class="function-line"></span>
                    <div class="function-p">
                        出産予定日や復職日など、一人ひとり違う日付を元に管理する必要のある煩雑な業務は全て自動化して、システムに自動連絡させることができます。<br>
                        現在サービス利用中・サービス検討中企業の6割以上から「個別対応を自動化できないか」というご要望を反映した機能で、ご担当者の事務連絡業務のさらなる効率化を目指します
                    </div>
                </div>
                <figure class="function-img">
                    <img src="<?php pdt_img_dir() ?>/diversity/f06.png">
                </figure>
                <figure class="function-img-sp">
                    <img src="<?php pdt_img_dir() ?>/diversity/f06-sp.png">
                </figure>
                </li>
        </ul>
        <div class="contentbox_btn">
            <a href="<?= HOME_PATH ?>/diversity/user">利用者ごとの便利な機能</a>
        </div>
	 </div>
    <?php get_template_part( 'include/contactbtn-diversity-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-diversity' ); ?>
<?php get_footer('product'); ?>