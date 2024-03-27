<?php get_header('product'); ?>
<?php get_template_part( 'include/header-education-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        プレスリリース情報
        </div>
        </div>
    </div>
	 <div class="colorbg">
	 <div class="sectiontitlebg">～新型コロナウイルスに伴う企業の新卒採用・新入社員研修動向を調査～<br>エアリーエデュケーションクラウドを無償提供</div>
	 <div class="press-pic">
		<img src="<?php pdt_img_dir() ?>/education/press01.png">
	 </div>
	 <div class="press-button-container">
	 <div class="contentbox_btn">
				<a href="https://edge-inc.co.jp/news/news_200317.html">調査結果をダウンロードする</a>
	</div>
	<div class="contentbox_btn">
				<a href="<?= HOME_PATH ?>/education/inq/">お申し込みはこちらから</a>
		</div>
	</div>
	</div>
	<div class="colorbg">
	 <div class="sectiontitlebg">コロナ禍における内定者フォロー、新入社員研修の方法とは？</div>
	 <div class="press-pic">
		<img src="<?php pdt_img_dir() ?>/education/press02.png">
	 </div>
	 <div class="contentbox_btn">
				<a href="https://fresher.jp/column/column54/">続きはこちらから</a>
	</div>
	</div>
	<?php get_template_part( 'include/contactbtn-education-child' ); ?>
    </main>
<?php get_template_part( 'include/footer-education' ); ?>
<?php get_footer('product'); ?>