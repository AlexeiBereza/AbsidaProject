<?php get_header(); ?>

<div class="about blue-white-page">
    <div class="wrapper">
        <div class="blue-white-page__container blue-white-page__small-at-medium">
            <div class="about__content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="section-title section-title--blue"><?php the_title(); ?></h1>
                <div class="headline-separator"></div>
                <div class="about__text">
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>