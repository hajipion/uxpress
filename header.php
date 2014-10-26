<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0">
	<meta property="og:image" content="<?php bloginfo('url'); ?>/images/share.png" />
	<title><?php wp_title(); ?></title>
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<link href="<?php bloginfo('template_url'); ?>/mobile.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 0px) and (max-width: 400px)" >
	<link href="<?php bloginfo('template_url'); ?>/tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 401px) and (max-width: 800px)" >
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 801px)">
	<link rel="icon" sizes="16x16 32x32 48x48 128x128 256x256" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png"/>
	<link rel="alternate" type="application/rss+xml" title="WordBless RSS Feed" href="<?php bloginfo('url'); ?>/feed/" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
</head>
<body>
	<div class="white-filter"></div>
	<nav class="main-nav">
		<div class="nav-cat"></div>
	</nav>
	<header class="mainvisual">
		<a href="<?php bloginfo('url'); ?>" class="logo-area">
			<h1 class="logo-mark"><?php wp_title(); ?></h1>
		</a>
		<aside class="header-icons">
			<a href="<?php bloginfo('url'); ?>/profile.html" class="icon-profile">このブログについて</a>
			<a href="https://www.facebook.com/uxpress.jp" target="_blank" class="icon-facebook">Facebookページ</a>
			<a href="https://twitter.com/hajipion/" target="_blank" class="icon-twitter">Twitterアカウント</a>
			<a href="https://github.com/hajipion/" target="_blank" class="icon-github">GitHubアカウント</a>
			<a href="<?php bloginfo('url'); ?>/feed/" target="_blank" class="icon-rss">このブログのRSS</a>
		</aside>
	</header>
<?php wp_head(); ?>