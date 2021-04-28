<?php get_header();?>
<div class="btn_circle"></div>
<div class="container_page main-news section-hidden block_margin">
    <?php $idPost =  get_field('id_post', 'option'); ?>
    <?php $args = array(
        'p' => $idPost
    );
    $the_query = new WP_Query( $args); ?>
    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
    <div href="<?php echo get_post_permalink(); ?>" class="main-news__content">
        <a href="<?php echo get_post_permalink(); ?>">
            <div class="main-news__time text"> <?php echo do_shortcode('[rt_reading_time]'); ?> min read </div>

            <h1 class="main-news__title title text-stroke_blue"><?php the_title(); ?> </h1>
            <p class="main-news__text text"><?php the_excerpt(); ?></p>
        </a>
        <a href="javascript:void(0)" onclick="openForm()"
            class="block-main__message link__text btn_basic btn_message "><span
                class="text"><?php the_field('name-link_mess', 'options'); ?></span></a>
        <div class="scroll"> </div>
    </div>
    <a href="<?php echo get_post_permalink(); ?>" class="block-main__link-image border-radius">
        <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="block-main__image border-radius.">
    </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata();?>
</div>

<div class="block-news container_page">
    <?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 99,
    'post__not_in'=>array($idPost),
    'category_name'    => 'news',
);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        ?>

    <a href="<?php echo get_post_permalink(); ?>" class="news">
        <div class="square text"> Read</div>
        <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="news__image border-radius">
        <div class="news__content">
            <h2 class="news__title title text-stroke_blue"><?php the_title(); ?> </h2>
            <p class="news__text text"><?php the_excerpt(); ?></p>
        </div>
    </a>
    <?php
endwhile;
    wp_reset_query();
    the_posts_navigation(); ?>
</div>

<script>
jQuery(document).ready(function($) {
    $('.news').on('mousemove', function(e) {
        $('.square').offset({
            top: parseInt(e.pageY - $('.square').height() / 2),
            left: parseInt(e.pageX - $('.square').width() / 2)
        });
    });
});
</script>
<?php get_footer();?>