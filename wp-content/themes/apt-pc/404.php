<!DOCTYPE html>
<html lang="ja">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<title>404 Not Found | <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/404.css" />
</head>
<body>
	<div id="outside">
		<div id="wrapper_page">
			<h1><img src="<?php echo get_template_directory_uri(); ?>/images/404/img_404_logo.png" alt="<?php bloginfo('name'); ?>">404 Not Found</h1>
			<h2>お探しのページは見つかりませんでいた。</h2>
			<p>このページはありません。</p>
			<p class="large"><a href="<?php echo esc_url(home_url('/')); ?>" class="large"><?php bloginfo('name'); ?>TOPへ</a></p>
		</div>
	</div>
</body>
</html>