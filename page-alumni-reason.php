<?php get_header('product'); ?>
<?php get_template_part( 'include/header-alumni-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
            <p class="sub_title_en">Reason</p>
			<p class="sub_title_jp">選ばれる理由</p>
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="sectiontitle">
        アルムナイ採用における課題
        </div>
        <div class="introbg">
            <p>ミスマッチの防止や採用コスト・教育コストの観点からアルムナイ採用やカムバック採用が注目される</p>
            <p>一方で制度だけを作り、アルムナイとのコンタクトが取れずに形骸化するケースが多い</p>
            <p>接点継続と、自社のことや採用ポジションを知ってもらう工夫が必要</p>
        </div>
        <div class="sectiontitle">
            その解決策は？
        </div>
        <div class="leadingto">
            <img src="<?php img_dir() ?>/product/alumni/down.svg" class="arrow">
            <img src="<?php img_dir() ?>/product/alumni/logoal.svg" class="arrowlogo">
        </div>
        <ul class="reason_list">
				<li>
					<figure class="reason_img">
						<img src="<?php pdt_img_dir() ?>/alumni/reason_01.png">
					</figure>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>01</span></p>
                    <p class="reason_subtitle">会社の様子や求人情報をアプリから閲覧、 必要なプッシュ通知のみを発報</p>
                    </div>
                    <div class="reason_p">
                    <p>一度、自身が退職した会社に日常的に関心を持つ方はほとんどいません。見てもらうきっかけづくりは、アプリのプッシュ通知になります。</p>
                        プッシュ通知の頻度が高すぎても、アプリ自体を削除される可能性があり、適切な頻度でプッシュ通知を出して、定期的に自身のプロフィール（転職の意向の有無）を更新してもらい、「転職意向あり」にステータスが変わったら、本人の居住地や専門性、在職時の職種にあった求人をプッシュ通知で送ります。</p>
					</div>
                </div>
				</li>
				<li>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>02</span></p>
                    <p class="reason_subtitle">手軽な発信、細かい管理の両立が持続可能な運用につながる</p>
                    </div>
                    <div class="reason_p">
                    <p>会社の情報発信は、添付ファイルや動画、写真など様々な形式を用いて、手軽に簡単な操作で行うことができるため、運用の負荷は最小化できます。</p>
                        一方で、OB/OGや最終選考辞退者の専門性、職種、希望する働き方、居住地から通える事業所の範囲などを細かく管理でき、それぞれの属性の組み合わせによって求人情報の送付先を変えられるなど、こまやかな管理、運用が可能です。</p>
                        継続して運用していただき、成果が出る仕組みになっているからこそ、多くの企業に選ばれています。</p>
				    </div>
                </div>
                <figure class="reason_img">
                    <img src="<?php pdt_img_dir() ?>/alumni/reason_02.png">
                </figure>
				</li>
			</ul>
            <div class="contentbox_btn">
				<a href="<?= HOME_PATH ?>/alumni/function">機能一覧を見る</a>
			</div>
        </div>
	 <div class="sectiontitlebg">導入効果</div>
     <div class="reason_container">
        <div class="reason_box">
            <img src="<?php pdt_img_dir() ?>/alumni/reasons_sa.png" alt="慢性的な人手不足の中、優秀な人材を見つけられない" class="reason_box_img">
			<span class="reason_normal">当初登録数       50名未満</span>
			<img src="<?php pdt_img_dir() ?>/alumni/pointdown.svg" class="pointdown">
			<span class="reason_normal">5年目登録数</span><span class="reason_strong">350-400</span<span class="reason_normal">名</span><br>
			<span class="reason_normal">累計採用数</span><span class="reason_strong">26</span<span class="reason_normal">名</span><br>
        </div>
        <div class="reason_box">
            <img src="<?php pdt_img_dir() ?>/alumni/reasons_sb.png" alt="カムバック制度を作ったが形骸化して活用されていない" class="reason_box_img">
            <span class="reason_normal">当初登録数       50名未満</span>
			<img src="<?php pdt_img_dir() ?>/alumni/pointdown.svg" class="pointdown">
            <span class="reason_normal">4年目登録数</span><span class="reason_strong">100-150</span<span class="reason_normal">名</span><br>
			<span class="reason_normal">累計採用数</span><span class="reason_strong">12</span<span class="reason_normal">名</span><br>
        </div>
        <div class="reason_box">
            <img src="<?php pdt_img_dir() ?>/alumni/reasons_sc.png" alt="接点継続と、自社のことや採用ポジションを知ってもらう工夫が必要" class="reason_box_img">
			<span class="reason_normal">当初登録数       50名未満</span>
			<img src="<?php pdt_img_dir() ?>/alumni/pointdown.svg" class="pointdown">
            <span class="reason_normal">3年目登録数</span><span class="reason_strong">50-100</span<span class="reason_normal">名</span><br>
			<span class="reason_normal">累計採用数</span><span class="reason_strong">2</span<span class="reason_normal">名</span><br>
        </div>
    </div>
		</div>
		<div class="contentbox_btn">
			<a href="<?= HOME_PATH ?>/alumni/price">料金プランを見る</a>
		</div>
    <?php get_template_part( 'include/contactbtn-alumni-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-alumni' ); ?>
<?php get_footer('product'); ?>