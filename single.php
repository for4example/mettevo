<?php get_header();?>
<div class="btn_circle block-main__message"></div>
<div class="container_page ">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="text news__text block_margin">
        <?php the_content();?>
    </div>
    <?php  endwhile; else :  endif; ?>


    <!-- block-other-news -->
    <div class="block-other-news block_margin">
        <div class="slider__nav">
            <h3 class="text_big text_blue ">You may also like:</h3>
            <div class=" btn_slider before prev-slide"></div>
            <div class="btn_slider before next-slide"> </div>
        </div>
        <div class="block-other-news__slider">
            <?php
          $id= get_the_ID();
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 99,
    'post__not_in'=>array($id),
    'category_name'    => 'news',
);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <div>
                <a href="<?php  the_permalink();?>" class="other-news-card  border-radius">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="other-news-card__img">
                    <div class="other-news-card__text text_big text_blue"><?php the_title();?></div>
                </a>
            </div>
            <?php
endwhile;
    wp_reset_query();
?>
        </div>

    </div>

</div>
<script>
jQuery(document).ready(function($) {
    $('.block-other-news__slider').slick({
        dots: false,
        infinite: true,
        adaptiveHeight: true,
        prevArrow: $(".prev-slide"),
        nextArrow: $(".next-slide"),
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 650,
            settings: {
                dots: true,
                slidesToShow: 1,
            }
        }]
    });
});
</script>
<?php get_footer();?>