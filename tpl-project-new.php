<?php /* Template Name: Project2
Template Post Type: post, page
*/ ?>
<?php get_header();?>

<style>
<?php $fontWoff2=get_field('fontWoff2');
$fontWoff=get_field('fontWoff');

?>@font-face {
    font-family: 'Font';
    src: url('<?php echo $fontWoff2['url']; ?>') format('woff2'),
        url('<?php echo $fontWoff['url']; ?>') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}
</style>
<div class="content_project">
    <?php
$color1 = get_field('color1');
$color2 = get_field('color2');
$i=0;
if( have_rows('content') ):
     while ( have_rows('content') ) : the_row();
    $i++;
        if( get_row_layout() == 'block-center' ):
           
       ?>
    <div class="container_page block-center block_margin before">
        <h2 class="title_project block-center__title "><span
                style="color:<?php echo $color1;?>"><?php the_sub_field('block-center__title_color'); ?></span><?php the_sub_field('block-center__title'); ?>
        </h2>
        <?php $image = get_sub_field('block-center__img');
    $imageWebp = get_sub_field('block-center__img_webp');
    $imageMob = get_sub_field('block-center__img_mob');
    $imageWebpMob = get_sub_field('block-center__img_webp_mob'); ?>
        <div class="MacBook">
            <picture>
                <source srcset=" /wp-content/themes/mettevo/img/MacBookPro.webp" type="image/webp">
                <img src=" /wp-content/themes/mettevo/img/MacBookPro.png" alt="" class="block-center__img">
            </picture>
            <picture class="display-image">
                <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
                <source srcset="<?php echo $imageMob['url']; ?>" media="(max-width: 600px)">
                <source srcset="<?php echo $imageWebpMob['url']; ?>" type="image/webp" media="(max-width: 600px)">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="block-center__img">
            </picture>
        </div>
        <div class="subtitle_project block-center__subtitle before ">
            <?php the_sub_field('block-center__subtitle'); ?><span
                style="color:<?php echo $color1;?>"><?php the_sub_field('block-center__subtitle_color'); ?></span></div>
    </div>
    <?php 
elseif( get_row_layout() == 'block-image' ): 
    ?>
    <div class="block-image  <?php if ($i % 2 === 0){echo $i. ' right';} else{echo $i.' left';} ?>">
        <?php $image = get_sub_field('block-center__img');
     $imageWebp = get_sub_field('block-center__img_webp'); 
     if( !empty( $image ) ): ?>
        <picture class="block-image__img">
            <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </picture>
        <?php endif;
    ?>
        <div>
            <div class="block-image__content before">
                <h2 class="title_project block-image__title "
                    style="color:<?php if ($i % 2 === 0){echo $color1;} else{echo $color2;} ?>">
                    <?php the_sub_field('block-image__title'); ?>
                </h2>
                <?php $image = get_sub_field('block-center__img_mob');
     $imageWebp = get_sub_field('block-center__img_webp_mob'); 
     if( !empty( $image ) ): ?>
                <picture class="block-image__img_mob">
                    <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </picture>
                <?php endif; ?>
                <div class="text_big block-image__text"> <?php the_sub_field('block-image__text'); ?></div>
            </div>
        </div>
    </div>
    <?php $i=0;
elseif( get_row_layout() == 'block-typography' ): 
    $i++; ?>
    <div class="block-typography container_page before">

        <div class="block-typography__content before">
            <div>
                <div class="typography-content before">
                    <h2 class="title_project block-image__title " style="color:<?php echo $color1; ?>">
                        <?php the_sub_field('block-typography__title'); ?>
                    </h2>
                    <?php $imageMob = get_sub_field('block-typography__img_mob');
     $imageWebpMob = get_sub_field('block-typography__img_webp_mob'); 
     if( !empty( $imageMob ) ): ?>
                    <picture class="block-typography__img_mob">
                        <source srcset="<?php echo $imageWebpMob['url']; ?>" type="image/webp">
                        <img src="<?php echo $imageMob['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <?php endif;?>
                    <div class="text_big block-image__text"> <?php the_sub_field('block-typography__text'); ?></div>
                </div>
            </div>
            <?php $image = get_sub_field('block-typography__img');
     $imageWebp = get_sub_field('block-typography__img_webp'); 
     if( !empty( $image ) ): ?>
            <picture class="block-typography__img">
                <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </picture>
            <?php endif;?>
        </div>
        <div class="block-typography__content block-typography__color">
            <div>
                <div class="typography-content before">
                    <h2 class="title_project block-image__title " style="color:<?php echo $color1; ?>">
                        <?php the_sub_field('block-color__title'); ?>
                    </h2>
                    <div class="text_big block-image__text"> <?php the_sub_field('block-color__text'); ?></div>
                </div>
            </div>
            <div class="color-swatches">
                <?php 
            if( have_rows('color-swatches') ): while ( have_rows('color-swatches') ) : the_row();
            $colorSwatches = get_sub_field('color');
            ?>
                <div>
                    <div class="circle-color" style="border-color: <?php echo  $colorSwatches; ?>;">
                        <div class="color" style="background: <?php echo  $colorSwatches; ?>;"></div>
                    </div>
                    <div class="text_big color__text" style="color:<?php echo  $colorSwatches; ?>">
                        <?php echo  $colorSwatches; ?></div>
                </div>
                <?php  endwhile; else : endif; ?>
            </div>
        </div>

    </div>
    <?php $i=0;
elseif( get_row_layout() == 'block-image_big' ): 
    $i++; ?>
    <div class="block-image_big <?php if ($i % 2 === 0){echo 'left';} else{echo 'right';} ?>">
        <?php $image = get_sub_field('block-center__img');
     $imageWebp = get_sub_field('block-center__img_webp'); 
     if( !empty( $image ) ): ?>
        <picture>
            <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="block-image__img_big">
        </picture>
        <?php endif;?>
        <div>
            <div class="block-image__content before">
                <h2 class="title_project block-image__title "
                    style="color:<?php if ($i % 2 === 0){echo $color2;} else{echo $color1;} ?>">
                    <?php the_sub_field('block-image__title'); ?>
                </h2>
                <?php $imageMob = get_sub_field('block-center__img_mob');
     $imageWebpMob = get_sub_field('block-center__img_webp_mob'); 
     if( !empty( $imageMob ) ): ?>
                <picture>
                    <source srcset="<?php echo $imageWebpMob['url']; ?>" type="image/webp">
                    <img src="<?php echo $imageMob['url']; ?>" alt="<?php echo $image['alt']; ?>"
                        class="block-image__img_big-mob border-radius">
                </picture>
                <?php endif;?>
                <div class="text_big block-image__text"> <?php the_sub_field('block-image__text'); ?></div>
            </div>
        </div>
    </div>
    <?php 
elseif( get_row_layout() == 'block-image-full' ): 
    ?>
    <?php 
       $image= get_sub_field('block-image-full');
       $imageWebp= get_sub_field('block-image-full_webp');  
      $imageMob = get_sub_field('block-image-full_mob');
     $imageWebpMob = get_sub_field('block-image-full_webp_mob');  ?>
    <picture class="image-full">
        <source srcset="<?php echo $imageWebp['url']; ?>" type="image/webp">
        <source srcset="<?php echo $imageMob['url']; ?>" media="(max-width: 600px)">
        <source srcset="<?php echo $imageWebpMob['url']; ?>" type="image/webp" media="(max-width: 600px)">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </picture>
    <?php
 elseif( get_row_layout() == 'block-other-projects' ):
  ?>
</div>
<div class="block-other-projects block_margin container_page">
    <h2 class="block-other-projects__title title text-stroke_white">
        <?php the_sub_field('block-other-projects__title'); ?></h2>
    <div class="block-other-projects__slider">
        <?php
          $id= get_the_ID();
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 99,
    'post__not_in'=>array($id),
    'category_name'    => 'projects',
);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    
        ?>
        <?php $img = get_field('сard_background_image'); ?>
        <a href="<?php  the_permalink();?>" class="other-projects-card before border-radius" style="background: url(<?php
    the_post_thumbnail_url(); ?>) center no-repeat;">
            <div class="other-projects-card__text text_big"><?php the_title();?></div>
        </a>
        <?php
endwhile;
    wp_reset_query();
?>
    </div>
    <div class="slider_nav">
        <div class="prev-slide">

        </div>
        <div class="next-slide"></div>
    </div>
</div>

<?php 
endif;
endwhile;
endif;
?>

<?php get_footer();?>