<div class="wrapper">
    <?php if (is_single()){ ?>
    <div class="main-block" style="background: url('<?php
    the_post_thumbnail_url(); ?>') top left no-repeat">
        <?php }
    else{ ?>

        <?php
 $term = get_queried_object();
$image1 = get_field('image', $term);
  ?>
        <div class="main-block block_margin" style="background: url(<?php
        if(!is_category() ){
            the_post_thumbnail_url(); 
        } else{

             echo $image1['url'];
            
            }?>) top left no-repeat">
            <?php } ?>

            <div class="header container_page">
                <div class="header_row">
                    <div class="header__logo">
                        <a href="<?php the_field('link_logo', 'option'); ?>" id="particle-slider">
                            <div class="slides">
                                <div class="slide"
                                    data-src="data:image/png;base64,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">
                                </div>
                            </div>
                            <canvas class="draw"></canvas>
                        </a>
                    </div>

                </div>
                <div class="header__button">
                    <div class="nav-burger" onclick=" show();" id="navToggle"></div>
                </div>
            </div>

            <div class="container_page">
            <div class="section-hidden block-main">

<div class="block-main__content">

    <a href="<?php the_field('link_header', 'options'); ?>"
        class="block-main__btn text_big btn_circle btn_basic before"><?php
the_field('name-link_header', 'options'); ?></a>
    <div class="container_hover" id="container_hover">
        <span class="image_hidden" aria-hidden="true"
            style="background: url(<?php echo $img['url']; ?>) center no-repeat"></span>
        <p class="block-main__text text"><?php the_field('main_subtitle'); ?></p>


        <h1 class="block-main__title title_big text-stroke_blue"><?php the_title(); ?> </h1>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="block-main__text text"><?php the_content(); ?></p>
        <?php  endwhile; else :  endif; ?>
    </div>
    <a href="javascript:void(0)" onclick="openForm()"
    class="block-main__message link__text btn_basic btn_message "><span
        class="text"><?php the_field('name-link_mess', 'options'); ?></span></a>
</div>
    <?php if(get_field('img_center')): ?>
    <div class="new-img">
        <div class="front-img">
            <?php
            
                $img_center = get_field('img_center');

            ?>
            <img class="center img-new" src="<?php echo $img_center['url'];?>" alt="<?php echo $img_center['alt'];?>">

        </div>
    </div>
    <?php else : ?> 
    <?php endif; ?>
</div>
<div class="scroll"> </div>
       
            </div>
        </div>