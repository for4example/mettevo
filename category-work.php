<?php get_header();?>





<div class="wrapper-content__block-works">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="block-works">
                <div class="block-works__img filter-img">
                    <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="image_works">
                </div>
                <div class="block-works__content">
                    <h2 class="title title_color block-works__title"><?php the_title(); ?></h2>
                    <p class="block-works__text text"><?php the_excerpt(); ?> </p>
                    <a href="<?php echo get_post_permalink(); ?>" class="block-works__link link_decor"><?php the_field('work-name_link', 'options' ); ?></a>
                </div>
            </div>
           


            <?php endwhile; else :  endif; ?>
            </div>

            <?php
    if( get_field('section-clients_on_off', 'options') ) {
      ?>
            <div class="block-clients">
            <div class="section1"></div>
            <div class="section2">
                <div class="text"><?php the_field('clients_subtitle', 'options' ); ?></div>
                <div class="title title_color"><?php the_field('clients_title', 'options' ); ?></div>
            </div>
        </div>
        <?php 
     } 
      ?>
        
<?php get_footer();?>