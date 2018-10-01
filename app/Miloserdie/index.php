<?php get_header(); ?>

<div class="large-hero">
    <div class="large-hero__text-content" id="slider">
        <figure>
          <img src="wp-content/themes/miloserdie/assets/images/logo1.jpg">
          <img src="wp-content/themes/miloserdie/assets/images/hero-image1.jpg">
          <img src="wp-content/themes/miloserdie/assets/images/hero-image3.jpg">
          <img src="wp-content/themes/miloserdie/assets/images/hero-image4.jpg">
          <img src="wp-content/themes/miloserdie/assets/images/children-play.jpeg">
        </figure>
      <div class="pop-up-motto">
        <span class="pop-up-motto__item-1">Лучший способ увидеть будущее -</span>
        <span class="pop-up-motto__item-2">создать его!</span>
      </div>
    </div>
  </div>
  <div class="mini-menu">
    <div class="wrapper">
      <div class="row">
        <div class="row__medium-3 mini-menu__item">
          <h2><a href="<?php echo URLROOT; ?>/projects">НАШИ ПРОЕКТЫ</a></h2>
        </div>
        <div class="row__medium-3 mini-menu__item">
            <h2><a href="<?php echo URLROOT; ?>/pages/docs">ДОКУМЕНТЫ</a></h2>
        </div>
        <div class="row__medium-3 mini-menu__item">
            <h2><a href="<?php echo URLROOT; ?>/#help-us">ПОМОЩЬ</a></h2>
        </div>
        <div class="row__medium-3 mini-menu__item">
            <h2><a href="<?php echo URLROOT; ?>/pages/about">О НАС</a></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="our-mission page-section page-section-no-b-until-medium">
    <div class="wrapper wrapper--no-padding-until-medium">
      <div class="our-mission__tab-large">
        <div class="our-mission__tab-content">
          <h1 class="section-title section-title--blue">Наша Миссия</h1>
          <div class="headline-separator"></div>
          <?php foreach($data['missions'] as $mission) : ?>
          <div class="our-mission__goal">
            <img src="<?php echo URLROOT; ?>/public/assets/images/icons/<?php echo $mission->img; ?>" alt="" class="our-mission__img">
            <div class="our-mission__content">
              <h2 class="our-mission__title"><?php echo $mission->title; ?></h2>
              <p class="our-mission__text"><?php echo $mission->content; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  
<div id="children" class="page-section page-section-no-b-until-large page-section__our-children">
  <div class="wrapper wrapper--no-padding-until-large">
    <h2 class="section-title section-title--blue">Наши подопечные</h2>
    <div class="headline-separator"></div>
    <div class="row row--gutters row--equal-height-at-small row--gutters-small row--t-padding">
    <?php $i = 1; $x = 1; $num = count($data['children']); ?>
    <?php foreach($data['children'] as $child) : ?>
      <div class="row__medium-6 our-children__container">
        <div class="our-children color-box-<?php echo $x; ?>">
          <div class="our-children__photo">
              <img src="<?php echo URLROOT; ?>/public/assets/images/children/<?php echo $child->img; ?>" alt=""></img>
          </div>
          <div class="our-children__content">
            <h3 class="our-children__name"><?php echo $child->name; ?></h3>
            <div class="content-separator"></div>
            <ul>
                <?php if($child->age) { echo '<li>Возраст: ' . $child->age . '</li>'; } ?>
                <?php if($child->height) { echo '<li>Рост: ' . $child->height . '</li>'; } ?>
                <?php if($child->hobbies) { echo '<li>Увлечения: ' . $child->hobbies . '</li>'; } ?>
            </ul>
          </div>
        </div>
      </div>
      <?php
      $x++;
      if ($x == 5) {$x = 1;}
      if ($i % 2 == 0 && $i < $num) {
        $newLine = '</div><div class="row row--gutters row--equal-height-at-small row--gutters-small">';
        echo $newLine; 
      } else if ($i > $num) {
        $divEnd = '</div>';
        echo $divEnd;
      } 
      $i++;?>
    <?php endforeach; ?>
    </div>
    <a href="<?php echo URLROOT; ?>/children">
        <div class="news__more">
          <img src="wp-content/themes/miloserdie/assets/images/icons/balloons.svg" alt="">
          <h3>Все дети</h3>
        </div>
      </a>
  </div>
</div>
<div id="news" class="news">
    <div class="wrapper wrapper--b-margin">
      <h2 class="section-title section-title--blue">Последние новости центра</h2>
      <div class="headline-separator"></div>
      <div class="row row--gutters">
        <div class="row row--gutters row--equal-height-at-medium row--t-padding generic-content-container">
            <?php $i = 1; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="row__medium-4">
            <div class="news__tab color-box-<?php echo $i; ?>">
              <div class="news__photo">
                <img src="" alt="">
              </div>
              <div class="news__content">
                <div class="news__title">
                  <h2><?php echo the_title(); ?></h2>
                </div>
                <div class="content-separator"></div>
                <div class="news__text">
                  <p><?php echo the_content(); ?></p>
                </div>
              </div>
              <a href="">
                <div class="btn btn__right btn--green">Узнать больше</div>
              </a>
            </div>
          </div>
            <?php $i++; ?>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
      </div>
      <a href="<?php echo URLROOT; ?>/events">
        <div class="news__more">
          <img src="wp-content/themes/miloserdie/assets/images/icons/calendar.svg" alt="">
          <h3>Все новости</h3>
        </div>
      </a>
    </div>
  </div>

  <div id="help-us" class="help-us page-section page-section--no-b-padding-until-medium">
    <div class="wrapper help-us__content">
      <div class="help-us__section-title">
        <img class="help-us__title-icon" src="wp-content/themes/miloserdie/assets/images//icons/star.svg" alt="">
        <h2 class="section-title section-title--blue help-us__main-title">Как Вы можете нам помочь</h2>
      </div>
        <div class="headline-separator"></div>
      <div class="row row--gutters generic-content-container row--t-padding help-us__container">
        <div class="row__medium-4">
          <div class="help-us__section">
            <img class="help-us__img" src="wp-content/themes/miloserdie/assets/images/icons/volunteer.svg" alt="">
            <div class="help-us__description">
              <h2 class="help-us__title">Станьте волонтером</h2>
              <p class="help-us__text">Что вы можете сделать доброго:<br/>- Центру требуются волонтеры: логопеды, репетиторы, организаторы мероприятий для детей, так же нужна  помощь в ремонтных работах.</p>
              <a href="<?php echo URLROOT; ?>/pages/volunteer">
                <div class="btn btn--orange">Подробнее</div>
              </a>
            </div>
          </div>
        </div>
        <div class="row__medium-4">
          <div class="help-us__section">
              <img class="help-us__img" src="wp-content/themes/miloserdie/assets/images/icons/coin.svg" alt="">
            <div class="help-us__description">
              <h2 class="help-us__title">Перечислите деньги</h2>
              <p class="help-us__text"><span>Наш расчетный счет:</span><br/>
              40703810940000003396</p>
              <a href="<?php echo URLROOT; ?>/pages/donation">
                <div class="btn btn--orange">Подробнее</div>
              </a>
            </div>
          </div>
        </div>
        <div class="row__medium-4">
          <div class="help-us__section">
              <img class="help-us__img" src="wp-content/themes/miloserdie/assets/images/icons/social-care.svg" alt="">
            <div class="help-us__description">
              <h2 class="help-us__title">Прочая помощь</h2>
              <p class="help-us__text">Мы будем благодарны за любую оказанную помощь!</p>
              <a href="<?php echo URLROOT; ?>/pages/other_help">
                <div class="btn btn--orange">Подробнее</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>