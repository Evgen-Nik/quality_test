<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            wp_title( '|', true, 'right' );
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header class="header">
			<nav class="header__navbar">
				<ul class="header__list">
					<li><a href="#" class="header__item text text_fz28 text_fw500 active">Text</a></li>
					<li><a href="#" class="header__item text text_fz28 text_fw500">Text</a></li>
					<li><a href="#" class="header__item text text_fz28 text_fw500">Text</a></li>
				</ul>
			</nav>
			<div class="header__burger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="header__menu">
				<ul class="header__menu-list">
					<li><a href="#" class="header__menu-item text text_fz28 text_fw500">Text</a></li>
					<li><a href="#" class="header__menu-item text text_fz28 text_fw500">Text</a></li>
					<li><a href="#" class="header__menu-item text text_fz28 text_fw500">Text</a></li>
					<li><a href="#" class="header__menu-item text text_fz28 text_fw500">Text</a></li>
				</ul>
				<button data-modal=modal class="btn header__menu-btn">Open pop-up button</button>
			</div>
		</header>