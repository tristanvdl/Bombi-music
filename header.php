<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=11;IE=Edge"/>
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
		<?php wp_head(); ?>
	</head>
<h1>Header</h1>
<div class="wrapper">

