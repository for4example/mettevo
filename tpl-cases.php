<?php /* Template Name: Cases
Template Post Type: post, page
*/ ?>
<?php get_header();?>
<!-- CASE -->
<section id="case">
    <div class="container_page">
        <div class="main-case flex">
            <div class="main-case__left">
                <div class="main-case__txt">
                    <h1 class="block-main__title title_big text-stroke_blue"><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
                <div class="main-case__buttons flex">
                    <a href="javascript:void(0)" class="block-main__message link__text btn_basic btn_message" onclick="openForm()"><span class="text">Start your project</span></a>
                    <a href="" class="block-main__btn text_big btn_circle btn_basic before">How it works?</a>
                </div>
            </div>
            <div class="main-case__right">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- CASE -->

<!-- CASE ITEMS -->
<section id="case-item">
    <div class="container_page">
        <div class="offers">
        <?php if( have_rows('cases') ): while ( have_rows('cases') ) : the_row();  ?>
            <div class="offer-item">
                <h2 class="title text-stroke_blue main-block__title"><?php the_sub_field('case_title');?></h2>
                <div class="offer-content flex">
                    <div class="offer-content__left">
                    <?php $image = get_sub_field('case_img');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                    <div class="offer-content__right">
                        <?php the_sub_field('case_text');?>
                        <?php if(get_sub_field('case_button')): ?>
                        <a href="<?php the_sub_field('case_button');?>" class="block-main__message link__text btn_basic btn_message"><span class="text">Start your project</span></a>
                        <?php else: endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- CASE ITEMS -->

<?php get_footer();?>