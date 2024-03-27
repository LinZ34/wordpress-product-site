<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ7JDPM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="topheader" id="navbar">
	<div class="header-wrapper">
	<div class="header_items">
		<div class="logo">
			<a href="<?= HOME_PATH ?>/diversity/">
				<img src="<?php pdt_img_dir() ?>/diversity/logodv.svg" alt="エアリーダイバーシティクラウド">
			</a>
		</div>
		<div class="header_menu">
			<nav class="header_menu_nav">
				<ul class="header_menu_navlist">
				<li class="header_menu_listitem">
    			<a href="<?= HOME_PATH ?>/diversity/" class="text">Home</a></li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/diversity/reason/" class="text<?php echo (is_tree(get_page_by_path('diversity')->ID) && is_page('reason')) ? ' current' : '' ?>">選ばれる理由</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/diversity/function/" class="text<?php echo (is_tree(get_page_by_path('diversity')->ID) && is_page('function')) ? ' current' : '' ?>">機能一覧</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/diversity/case/" class="text<?php echo (is_tree(get_page_by_path('diversity')->ID) && is_page('case')) ? ' current' : '' ?>">ご利用事例</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/diversity/seminar/" class="text<?php echo (is_tree(get_page_by_path('diversity')->ID) && is_page('seminar')) ? ' current' : '' ?>">セミナー一覧</a>
				</li>
				<li class="header_menu_listitem">
				<a href="<?= HOME_PATH ?>/diversity/columns/" class="text<?php echo (is_tree(get_page_by_path('diversity')->ID) && is_page('columns')) ? ' current' : '' ?>">コラム一覧</a>
				</li>

				</ul>
			</nav>
			<ul class="header_menu_btn">
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/diversity/downloads/" class="a-button1">資料ダウンロード</a></li>
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/diversity/inquirys/" class="a-button2">お問い合わせ</a></li>
			</ul>
		</div>
		<div class="header_menu_btn_wrapper">
		<ul class="header_menu_btn1">
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/diversity/downloads/" class="a-button1">資料ダウンロード</a></li>
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/diversity/inquirys/" class="a-button2">お問い合わせ</a></li>
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
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/">Home</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/reason/">選ばれる理由</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/function/">機能一覧</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/case/">ご利用事例</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/seminar/">セミナー一覧</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/diversity/columns/">コラム一覧</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/diversity/downloads/">資料ダウンロード</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/diversity/inquirys/">お問い合わせ</a></li>
		</ul>
	</div>
	</div>
</header>