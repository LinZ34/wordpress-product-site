<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ7JDPM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="topheader" id="navbar">
	<div class="header-wrapper">
	<div class="header_items">
		<div class="logo">
			<a href="<?= HOME_PATH ?>/education/">
			<img src="<?php pdt_img_dir() ?>/education/logoedu.svg" alt="エアリーエデュケーションクラウド">
			</a>
		</div>
		<div class="header_menu">
			<nav class="header_menu_nav">
				<ul class="header_menu_navlist">
				<li class="header_menu_listitem">
    			<a href="<?= HOME_PATH ?>/education/" class="text">Home</a></li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/education#reason" class="text">選ばれる理由</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/education/interview/" class="text<?php echo (is_tree(get_page_by_path('education')->ID) && is_page('interview')) ? ' current' : '' ?>">企業インタビュー</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/education/pressrelease/" class="text<?php echo (is_tree(get_page_by_path('education')->ID) && is_page('pressrelease')) ? ' current' : '' ?>">プレスリリース情報</a>
				</li>
				</ul>
			</nav>
			<ul class="header_menu_btn">
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/education/downloads/" class="a-button1">資料ダウンロード</a></li>
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/education/inquirys/" class="a-button2">お問い合わせ</a></li>
			</ul>
		</div>
		<div class="header_menu_btn_wrapper">
		<ul class="header_menu_btn1">
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/education/downloads/" class="a-button1">資料ダウンロード</a></li>
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/education/inquirys/" class="a-button2">お問い合わせ</a></li>
		</ul>
		<button class="navbar-toggler navbar-light b1" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			  </div>
		</button>
		</div>
	</div>
	<div class="navlist">
		<ul class="navlist_ul" id="collapsibleNavbar">
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/education/">Home</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/education#reason">選ばれる理由</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/education/interview">企業インタビュー</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/education/pressrelease">プレスリリース情報</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/education/downloads/">資料ダウンロード</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/education/inquirys/">お問い合わせ</a></li>
		</ul>
	</div>
	</div>
</header>