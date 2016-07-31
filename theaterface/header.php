<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>
		<?php if ( is_home() ) { // トップページ ?>
			<?php bloginfo( 'name' ); ?>
			<?php } else { // その他 ?>
			<?php wp_title( '' ); ?> | <?php bloginfo( 'name' ); ?>
		<?php } ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/TapSuggest.css">
</head>
<body>

	<div class="wrapper--index">

		<header class="header header--index">
			<h1 class="logo">
				<a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt=""></a>
			</h1>
			<div class="menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/menu.png" alt=""></div>
		</header>