<?php /* Template Name: Development 
Template Post Type: post, page
*/ ?>
<?php get_header();?>
<div class="container_page">
    
    <?php


if( have_rows('content') ):

    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'section1' ): ?>

    <div class="block-accordion block_margin">
    <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">

        <div class="block-accordion__container ">
            <div class="header-accordion">
                <h2 class="title  text-stroke_white"><?php the_sub_field('block-accordion__title'); ?></h2>
                <?php $img = get_sub_field('block-accordion__icon'); ?>
                <div class="circle">
                    <div class='circular'>
                        <svg viewBox='0 0 100 100'>
                            <path d='M 0,50 a 50,50 0 1,1 0,1 z' id='circle' />
                            <text>
                                <textPath xlink:href='#circle'>
                                    <?php  the_sub_field('circle__text'); ?>
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <span class="header-accordion__circle"
                        style="background: url('<?php echo $img['url']; ?>') center no-repeat;"></span>
                </div>
            </div>
            <div class="block-accordion__content">
                <?php 
            $i = 0;
            if( have_rows('accordion') ): while ( have_rows('accordion') ) : the_row();
            $i++;
            ?>
                <button class="accordion text_big text_blue"><span class="text_big"><?php echo $i; ?>.</span>
                    <?php  the_sub_field('items_accordion'); ?></button>
                <div class="panel">
                    <div>

                        <?php $img = get_sub_field('content_img');
                         ?>
                        <img src="<?php if( !empty( $img ) ):  echo $img['url']; endif; ?>"
                            alt="<?php if( !empty( $img ) ):  echo $img['alt'];  endif; ?>"
                            class="panel__img border-radius">
                        <div class="text_big"> <?php  the_sub_field('content_accordion'); ?></div>
                    </div>
                </div>
                <?php  endwhile; else : endif; ?>
            </div>
        </div>
        <img class="bg-sc bg-sc-sec" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/222.png" alt="">

        <h2 class="title_extralarge">
            <?php the_sub_field('block-accordion__title_extralarge'); ?>
        </h2>
    </div>
    <?php
elseif( get_row_layout() == 'section2' ): 
?>
    <div class="block-we-can block_margin">
    <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">
        <h2 class="title__margin title text-stroke_white"><?php the_sub_field('block-we-can__title'); ?></h2>
        <div class="block-we-can__content">
            <?php if( have_rows('block-we-can__content') ): while ( have_rows('block-we-can__content') ) : the_row(); ?>
            <div class="card-we-can ">
                <div class="card-we-can_front border-radius">
                    <h3 class="text_big text_blue card-we-can__title"> <?php the_sub_field('card-we-can__title'); ?>
                    </h3>
                </div>
                <div class="card-we-can_back border-radius">
                    <?php $image = get_sub_field('card-we-can__img'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                        class="card-we-can__img border-radius">
                    <div>
                        <h3 class="text_big text_blue card-we-can__subtitle">
                            <?php the_sub_field('card-we-can__title'); ?></h3>
                        <div class="text card-we-can__text"> <?php the_sub_field('card-we-can__text'); ?></div>
                    </div>
                </div>
            </div>
            <?php  endwhile; else : endif; ?>
        </div>
    </div>

    <?php
 elseif( get_row_layout() == 'section3' ):
  ?>
    <div class="block-we-use block_margin">
        <h2 class="title__margin title text-stroke_white"><?php the_sub_field('block-we-use__title'); ?></h2>
    <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">

        <div class="block-we-use__content">
            <div>
                <?php if( have_rows('block-we-use__content') ): while ( have_rows('block-we-use__content') ) : the_row(); ?>
                <div class="we-use-tool before">
                    <?php $img = get_sub_field('we-use-tool__icon'); ?>
                    <div class="we-use-tool__icon"
                        style="background: url(<?php echo $img['url']; ?>) center no-repeat;"></div>
                    <h3 class="text_big text_blue we-use-tool__text">
                        <?php the_sub_field('we-use-tool__text'); ?></h3>
                </div>
                <?php  endwhile; else : endif; ?>
            </div>
            <div class="block-we-use__content_image">

                <?php if( have_rows('block-we-use__content_image') ): while ( have_rows('block-we-use__content_image') ) : the_row(); ?>
                <?php $image = get_sub_field('block-we-use__img'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                    class="block-we-use__img border-radius">
                <?php  endwhile; else : endif; ?>
            </div>
        </div>

    </div>


    <?php
 elseif( get_row_layout() == 'section4' ):
  ?>

    <div class="block-services block_margin">
    <img class="bg-sc bg-sc-sec" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/222.png" alt="">

        <h2 class="title__margin title text-stroke_white"><?php the_sub_field('section4_title'); ?></h2>
        <div class="block-services__content">
            <?php
          $id= get_the_ID();
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => 4,
    'post__not_in'=>array($id),
    'category_name'    => 'services',
);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    
        ?>
            <?php $img = get_field('сard_background_image'); ?>
            <a href="<?php  the_permalink();?>" class="services-card before border-radius"
                style="background: url(<?php echo $img['url']; ?>) center no-repeat;">
                <?php $image = get_field('card_icon');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="services-card__icon">
                <div class="services-card__text text_big"><?php the_title();?></div>
            </a>
            <?php
endwhile;
    wp_reset_query();
?>
        </div>
    </div>

    <?php 
endif;
endwhile;
endif;
?>
</div>


<?php get_footer();?>

<script>
// accordion
let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
// animation


jQuery(document).ready(function($) {
    const scrollArea = document.querySelector('.scrollbar');
    const Scroll = Scrollbar.init(scrollArea);
    var el = $('.we-use-tool');
    Scroll.addListener((s) => {
        if ($(this).scrollTop() > el.offset().top - 400) {
            el.addClass('animation');
            console.log('this' + this);
        }
    }); // returns “scrollTop” equivalent


    function $$(selector, context) {
        context = context || document;
        var elements = context.querySelectorAll(selector);
        return Array.prototype.slice.call(elements);
    }


});
</script>