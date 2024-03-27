<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ7JDPM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="topheader" id="navbar">
	<div class="header-wrapper">
	<div class="header_items">
		<div class="logo">
			<a href="<?= HOME_PATH ?>/management/">
				<img src="<?php pdt_img_dir() ?>/management/logomg.svg" alt="エアリーマネジメントクラウド">
			</a>
		</div>
		<div class="header_menu">
			<nav class="header_menu_nav">
				<ul class="header_menu_navlist">
				<li class="header_menu_listitem">
    			<a href="<?= HOME_PATH ?>/management/" class="text<?php echo is_tree(get_page_by_path('management')->ID) ? ' current' : '' ?>">Home</a>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/management/reason/" class="text<?php echo (is_tree(get_page_by_path('management')->ID) && is_page('usage')) ? ' current' : '' ?>">診断結果の活用</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/management/function/" class="text<?php echo (is_tree(get_page_by_path('management')->ID) && is_page('reason')) ? ' current' : '' ?>">診断の論拠</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/management/seminar/" class="text<?php echo (is_tree(get_page_by_path('management')->ID) && is_page('seminar')) ? ' current' : '' ?>">セミナー一覧</a>
				</li>
				</ul>
			</nav>
			<ul class="header_menu_btn">
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/management/downloads/" class="a-button1">資料ダウンロード</a></li>
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/management/inquirys/" class="a-button2">お問い合わせ</a></li>
			</ul>
		</div>
		<div class="header_menu_btn_wrapper">
		<ul class="header_menu_btn1">
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/management/downloads/" class="a-button1">資料ダウンロード</a></li>
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/management/inquirys/" class="a-button2">お問い合わせ</a></li>
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
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/management/">Home</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/management/usage">診断結果の活用</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/management/reason">診断の論拠</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/management/seminar">セミナー一覧</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/management/downloads/">資料ダウンロード</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/management/inquirys/">お問い合わせ</a></li>
		</ul>
	</div>
	</div>
</header>