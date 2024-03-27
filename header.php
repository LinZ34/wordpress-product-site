<!DOCTYPE HTML>
<html lang="jp">
<head>
    <meta charset="UTF-8">
	<title>airy.net｜新卒採用・働き方改革・人財育成・ダイバーシティ推進・大学キャリアを支援する情報発信サイト</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MJL7SXW');</script>
    <!-- End Google Tag Manager -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="description"  content="新卒採用・働き方改革・人財育成・ダイバーシティ推進・大学キャリアを支援する情報発信サイト" />
	<meta name="keywords" content="新卒採用,働き方改革,人財育成,ダイバーシティ推進,大学キャリア" />
    <meta property="og:type" content="blog">
    <meta property="og:title" content="airy">
    <meta property="og:description" content="新卒採用・働き方改革・人財育成・ダイバーシティ推進・大学キャリアを支援する情報発信サイト">
    <meta property="og:image" content="/wp-content/themes/airy-site/screenshot.jpg">
    <meta property="og:url" content="https://airy.net">
    <meta property="og:site_name" content="airy">
    <meta property="fb:app_id" content="143810416025459">
	<meta name="google-site-verification" content="qdvcdHYIkpugh844TEms7ZKCPPbSHiOCjQhjRdrU4ds" />
	<link rel="stylesheet" href="https://use.typekit.net/eua4opi.css">
	<?php get_template_part( 'include/css' ); ?>
    <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>><?php wp_body_open(); ?>
    <header class="topheader">
	<div class="header_items">
		<div class="topheader_menu">
			<nav class="header_menu_nav">
				<ul class="header_menu_navlist">
					<li class="header_menu_listitem"><a href="<?= HOME_PATH ?>/" class="a-text<?= is_home() || is_front_page() ? ' current': '' ?>">ホーム</a></li>
					<li class="header_menu_listitem"><a href="<?= HOME_PATH ?>/company/" class="a-text<?= is_page('company') ? ' current' : '' ?>">会社概要</a></li>
					<li class="header_menu_listitem"><a href="<?= HOME_PATH ?>/service/" class="a-text<?= is_page('service') ? ' current' : '' ?>">サービス一覧</a></li>
					<li class="header_menu_listitem"><a href="<?= HOME_PATH ?>/column/" class="a-text<?= get_post_type() === 'column' ? ' current' : '' ?>">コラム一覧</a></li>
				</ul>
			</nav>
			<ul class="header_menu_btn">
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/inquiry/" class="a-button1">お問い合わせ</a></li>
				<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/download/" class="a-button2">資料ダウンロード</a></li>
			</ul>
		</div>
		<div class="header_menu_btn_wrapper">
		<ul class="header_menu_btn1">
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/inquiry/" class="a-button1">お問い合わせ</a></li>
			<li class="header_menu_btnitem"><a href="<?= HOME_PATH ?>/download/" class="a-button2">資料ダウンロード</a></li>
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
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/">Home</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/company/">会社概要</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/service/">サービス一覧</a></li>
			<li class="navlist_button"><a href="<?= HOME_PATH ?>/column/">コラム一覧</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/inquiry/">お問い合わせ</a></li>
			<li class="buttoninner navlist_button"><a href="<?= HOME_PATH ?>/download/">資料ダウンロード</a></li>
		</ul>
	</div>
    </header>