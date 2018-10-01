<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="keywords" content="Детский приют, центр, милосердия, милосердие, центр милосердия, приют для пожилых">
	<meta name="description" content="Официальный сайт приюта Центр Милосердия. Лучший способ увидеть будущее - создать его!">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body>
<header class="site-header">
	<div class="social">
		<div class="wrapper">
			<div class="social__contacts">
				<ul>
				<li><i class="fas fa-envelope"></i> veramiloserdiya@mail.ru</li>
				<li><i class="fas fa-phone-square"></i> 8-958-643-91-68</li>
				</ul>
			</div>
			<div class="social__media">
				<ul>
				<li>Социальные сети: <i class="fab fa-vk network"></i> <i class="fab fa-instagram network"></i></li>
				<li><a href="<?php echo URLROOT; ?>/pages/feedback">Форма обратной связи <i class="fas fa-comment network"></i></a></li>
				</ul>
			</div>      
		</div>
	</div>
	<div class="gradient-line"></div>
	<div class="site-header__menu-icon">
		<div class="site-header__menu-icon__middle"></div>
	</div>
		<div class="site-header__menu-content">
			<nav class="primary-nav">
				<ul>
				<li class="color-dots-1 <?php if ($data['section'] == 'index') { echo 'primary-nav__menu-item-selected'; } ?>"><a href="<?php bloginfo('url'); ?>" class="primary-nav__menu-item primary-nav__item-1">Главная</a></li>
				<li class="color-dots-2 <?php if ($data['section'] == 'events') { echo 'primary-nav__menu-item-selected'; } ?>"><a href="<?php echo URLROOT; ?>/events" class="primary-nav__menu-item primary-nav__item-2">Новости центра</a></li>
				<li class="color-dots-3 <?php if ($data['section'] == 'children') { echo 'primary-nav__menu-item-selected'; } ?>"><a href="<?php echo URLROOT; ?>/children" class="primary-nav__menu-item primary-nav__item-3">Наши подопечные</a></li>
				<li class="color-dots-4 <?php if ($data['section'] == 'help-us') { echo 'primary-nav__menu-item-selected'; } ?>"><a href="<?php echo URLROOT; ?>#help-us" class="primary-nav__menu-item primary-nav__item-4">Как нам помочь</a></li>
				<li class="color-dots-5 <?php if ($data['section'] == 'docs') { echo 'primary-nav__menu-item-selected'; } ?>"><a href="<?php echo URLROOT; ?>/pages/docs" class="primary-nav__menu-item primary-nav__item-5">Документы</a></li>
				<li class="color-dots-6"><a href="<?php echo URLROOT; ?>#footer" class="primary-nav__menu-item primary-nav__item-6">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>