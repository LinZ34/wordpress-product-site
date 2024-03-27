<?php get_header('product'); ?>
<?php get_template_part( 'include/header-1on1-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        エアリー1on1クラウドが<br>
        選ばれる理由
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="pagetitle">
            <img src="<?php img_dir() ?>/product/1on1/logo1on1.svg">
            多岐に渡る 1on1 の課題にワンストップでサービス提供
        </div>
        <ul class="reason_list">
				<li>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>01</span></p>
                    <p class="reason_subtitle">主体性を持って1on1に参加してもらう仕組み</p>
                    </div>
                    <h4 class="solutions_text_subtl">実施頻度やテーマ・トピックを部下が選択</h4>
						<div class="solutions_text_content">
							<ul>
								<li>1on1への要望を伝える</li>
								<li>適切な進め方を自ら考える</li>
							</ul>
						</div>
                </div>
                <figure class="reason_img">
						<img src="<?php pdt_img_dir() ?>/1on1/reason-ss01.png">
					</figure>
				</li>
                <div class="reason-addtext">
                音声を取得して上司側の改善ポイントを客観性を持って把握することができます。<br>
                1on1中、リアルタイムに「発話割合」や「部下の発言に被せている」などがわかるため終わってから振り返るのではなく、1on1中に理想の形に近づけることができます。<br>
                上司側への改善だけでなく、部下が全く発話していない場合に部下側への主体参加を促すメッセージも出すため、1on1を上司・部下の共同作業として認識してもらえる仕組みを実装しています。
                </div>
				<li>
                <figure class="reason_img">
                    <img src="<?php pdt_img_dir() ?>/1on1/reason-ss02.png">
                </figure>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>02</span></p>
                    <p class="reason_subtitle">主観に頼る評価だけだと改善点は把握できない</p>
                    </div>
                    <h4 class="solutions_text_subtl">スマホアプリから手軽にアクセス</h4>
						<div class="solutions_text_content">
                            <span>音声から取得するデータに主観は入らない</span>
							<p>部下の忖度や遠慮がある前提で設計されたシステムのため、どんな状態の1on1であっても改善実感を持てます</p>
						</div>
                </div>
				</li>
                <div class="reason-addtext">
                音声を取得して上司側の改善ポイントを客観性を持って把握することができます。<br>
                1on1中、リアルタイムに「発話割合」や「部下の発言に被せている」などがわかるため終わってから振り返るのではなく、1on1中に理想の形に近づけることができます。<br>
                上司側への改善だけでなく、部下が全く発話していない場合に部下側への主体参加を促すメッセージも出すため、1on1を上司・部下の共同作業として認識してもらえる仕組みを実装しています。
                </div>
                <li>
				<div class="reason_text">
                    <div class="reason_section">
                    <p class="reason_title">にできること<span>03</span></p>
                    <p class="reason_subtitle">全体像を把握することが第一歩</p>
                    </div>
							<p>音声による客観評価だけでなく、主観評価や頻度、ログなどを一元管理できる仕組みとしてダッシュボードを実装しています。<br>
                                自社の状況を客観的に把握し、どういったポイントで躓いているのか？や次にどんな施策をするべきなのか？を適切に判断することができます。<br>
                                個別性の高い1on1を管理、評価するためにはこうした仕組みの導入が必要不可欠です。
                            </p>
                        <div class="solutions_text_content">
                        <div class="solutions_text_add">多くの1on1を支援する専任のカスタマーサクセス部門の担当者が今後の方針や改善点などについてサポートすることが可能です</div>
                        </div>
                </div>
                <figure class="reason_img">
						<img src="<?php pdt_img_dir() ?>/1on1/reason-ss03.png">
					</figure>
				</li>
			</ul>
            <div class="contentbox_btn">
				<a href="<?= HOME_PATH ?>/1on1/function">機能一覧を見る</a>
			</div>
        </div>
        <div class="colorbg">
	 <div class="sectiontitlebg">エアリー1on1クラウド資料ダウンロード</div>
	    <div class="casecontainer">
        <?php
			$download_query = new WP_Query([
				'post_type'      => '1on1download',
				'posts_per_page' => 1,
			]);
		?>
		<?php
		if ($download_query->have_posts()) :
			while ($download_query->have_posts()) : $download_query->the_post();
			$download_recommmend = get_field('recommend');
			$recommend_field = get_field_object('recommend');
		?>
				<div class="casepic">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
				</div>
				<div class="casetext">
				<h2 class="casetitle">
                <?php echo wp_trim_words( get_the_title(), 40, '…' ); ?>
				</h2>
				<ul class="dwdlist">
				<?php 
					echo '<div class="recommend">' . $recommend_field['label'] . '</div>';
					foreach($download_recommmend as $item): ?>
						<li><?= $item['list'] ?></li>
					<?php endforeach; ?>
				</ul>
				</div>
                <?php endwhile; else : ?>
			<p>まだ資料がありません</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		</div>
		<div class="contentbox_btn">
			<a href="<?= HOME_PATH ?>/1on1/downloads">資料ダウンロード</a>
		</div>
     </div>
    <?php get_template_part( 'include/contactbtn-1on1-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-1on1' ); ?>
<?php get_footer('product'); ?>