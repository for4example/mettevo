<?php get_header();?>


<div class="wrapper-content__block-news">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="block-news">
    <div class="block-news__img filter-img">
        <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="image_news">
    </div>
    <div class="block-news__content">
        <h2 class="block-news__title title title_color"><?php the_title(); ?> </h2>
        <p class="block-news__text text"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_post_permalink(); ?>" class="block-news__link  link_decor"><?php the_field('blog-name_link', 'options' ); ?></a>
    </div>
</div>
<?php endwhile; else :  endif; ?>


</div>

<?php get_footer();?>
