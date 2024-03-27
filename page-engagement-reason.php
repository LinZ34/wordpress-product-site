<?php get_header('product'); ?>
<?php get_template_part( 'include/header-engagement-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        エアリーエンゲージメントクラウドが<br>
        選ばれる理由
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="sectiontitle">
        ビジネスチャットの課題
        </div>
        <div class="introbg">
            <p>コミュニケーションの効率化やDX化のみを目的にシンプルなビジネスチャットを導入すると、</p>
            <p>会社や上司に対する愚痴や不満、悪口の温床となり、業務効率化や生産性向上とは逆効果になります</p>
            <p>従業員<span>エンゲージメントは下がり</span>、<span>退職率も悪化</span>してしまいます</p>
        </div>
        <div class="sectiontitle">
            その解決策は？
        </div>
        <div class="leadingto">
            <img src="<?php img_dir() ?>/product/engagement/point.svg" class="arrow">
            <img src="<?php img_dir() ?>/product/engagement/logoeg.svg" class="arrowlogo">
        </div>
        <ul class="reason_list">
				<li>
					<figure class="reason_img">
						<img src="<?php pdt_img_dir() ?>/engagement/reason-sp.png">
					</figure>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>01</span></p>
                    <p class="reason_subtitle">ストレスなく業務利用できるシンプルな機能設計</p>
                    </div>
                    <div class="reason_p">
                    <p>ビジネス利用の際に必要なチャットの機能は限られています。</p>
                    <p>利用ユーザーに徹底的にヒアリングした過不足ない機能群で双方向のコミュニケーション、会社や部署、チームといったグループにおける情報共有も気軽に実施できます。</p>
                    <p>スマートフォンアプリもご用意しており、アルバイト学生から小売業の現場スタッフ、再雇用者に至るまで幅広い年代、雇用形態の方々にご利用いただいております。</p>
					</div>
                </div>
				</li>
				<li>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>02</span></p>
                    <p class="reason_subtitle">経営と現場の距離を近付けるための機能が満載</p>
                    </div>
                    <div class="reason_p">
                    <p>経営者が現場の課題を理解し、現場のスタッフの行動への感謝や称賛の意を示すことができます。</p>
                    また距離感が近く、“人となり”を理解している人の言葉の方が理解しやすいため経営者の考えや価値観に触れる機会を増やすことで、ビジョンや経営層からのメッセージが腹落ちしやすくなります。</p>
				    </div>
                </div>
                <figure class="reason_img">
                    <img src="<?php pdt_img_dir() ?>/engagement/reason-pc.png">
                </figure>
				</li>
			</ul>
            <div class="contentbox_btn">
				<a href="<?= HOME_PATH ?>/engagement/function">機能一覧を見る</a>
			</div>
        </div>
        <div class="colorbg">
	 <div class="sectiontitlebg">事例インタビュー</div>
	    <div class="casecontainer">
				<div class="casepic">
					<img src="<?php pdt_img_dir() ?>/engagement/case-eg-top.png">
				</div>
				<div class="casetext">
				<h2 class="casetitle">
					「4年連続「エンゲージメント日本一」の企業が取り組む社内コミュニケーション
				</h2>
				<div class="casecontent">
					昭和44年（1969年）の創業以来、地域密着型の総合食料品スーパーマーケットとして関西地区に15店舗を構える。梅原一嘉社長のもと、「日本一楽しいスーパー」を目指し「日本一エンゲージメントが高い企業」としても注目される。2019年より「エアリーエンゲージメントクラウド」をナイトクルー（学生アルバイト）向けに提供開始。約2年間の運用状況、ならびに今後の展望についてお話を伺いました。
				</div>
				</div>
		</div>
		<div class="contentbox_btn">
			<a href="<?= HOME_PATH ?>/engagement/case">インタビューページへ</a>
		</div>
        
     </div>
     <div class="casecontainer-lw">
        <div class="caseitem-lw">
            <div class="caseitem-pic">
                <img src="<?php pdt_img_dir() ?>/engagement/case1.png">
            </div>
            <p class="caseitem-text">
                <span>日本最大級のテーマパークにおけるV字回復に貢献！</span><br>
                同社を題材にした書籍にもエアリーを活用した実例が掲載
            </p>
        </div>
        <div class="caseitem-lw">
            <div class="caseitem-pic">
                <img src="<?php pdt_img_dir() ?>/engagement/case2.png">
            </div>
            <p class="caseitem-text">
                <span>日本最大の上場直前の社風改革推進に貢献！</span><br>
                公的企業から民営企業へのシフトをエアリーが支援
            </p>
        </div>
    </div>
    <?php get_template_part( 'include/contactbtn-engagement-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-engagement' ); ?>
<?php get_footer('product'); ?>