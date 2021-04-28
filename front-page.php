<?php 
get_header();
?>

<div class="container_page">
    <!-- block-main -->
    <div class="section-hidden block-main">

        <div class="block-main__content">
            <?php if(get_field('main_subtitle')): ?>
                <p class="block-main__text text"><?php the_field('main_subtitle'); ?></p>
            <?php else: endif; ?>
            <div class="container_hover" id="container_hover">
                <h1 class="block-main__title title_big text-stroke_blue"><?php the_title();?>
                <div class="flips">
                    <p class="animate-text">
                        <?php $i=0; if( have_rows('main_projects') ): while ( have_rows('main_projects') ) : the_row(); $i++;?>
                            <span><?php the_sub_field('title');?></span>
                        <?php endwhile; endif; ?>
                    </p>
                </div>
            project? </h1>
            </div>
          
            <div class="cont-main-b flex">
                <a href="javascript:void(0)" onclick="openForm()" class="block-main__message link__text btn_basic btn_message "><span class="text"><?php the_field('name-link_mess', 'options'); ?></span></a>
                <a href="<?php the_field('link_header', 'options'); ?>" class="block-main__btn text_big btn_circle btn_basic before"><?php the_field('name-link_header', 'options'); ?></a>
            </div>
        </div>
    </div>
    <div class="scroll"> </div>
    <!-- block-main -->
        <!-- BLOCK EXTERPRISE -->
        <section id="exterp">
            <div class="exterp_title">
                <h2 class="title text-stroke_blue main-block__title"><?php the_field('our_exterp_title');?></h2>
                <p><?php the_field('our_exterp_sub_title');?></p>
            </div>
            <div class="main-exterp flex">
           <?php if( have_rows('exterp_item') ): while ( have_rows('exterp_item') ) : the_row();?>
                <div class="exterp__item">
                    <?php $image = get_sub_field('image');?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    <h3><?php the_sub_field('title');?></h3>
                    <p><?php the_sub_field('text');?></p>
                    <a href="<?php the_sub_field('link');?>"><?php the_sub_field('button');?></a>
                </div>
            <?php endwhile; endif; ?>
            </div>
    </section>
    <div class="project__container">
        <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">
        <div class="project-title">
            <h2 class="title text-stroke_blue main-block__title"><?php the_field('main_project');?></h2>
            <p><?php the_field('main_text');?></p>
            <ul class="project-menu">
            <?php if( have_rows('name_list') ): while ( have_rows('name_list') ) : the_row(); ?>
                <li><a  href="#" class="category-button" data-filter="<?php the_sub_field('slug');?>"><?php the_sub_field('name');?></a></li>
            <?php endwhile; endif; ?>
            </ul>
        </div>
        <?php 
            $i=0;
            $args = array(
            'cat' => '17',
            'posts_per_page' => 9,
            'order'    => 'ASC'
            );              
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : 
            $the_query->the_post();
            $i++;   
            
        ?>

        <a href="<?php echo get_post_permalink(); ?>" class="project__link filter" data-filter="<?php $tags = wp_get_post_tags( $post->ID); if ($tags) { foreach ($tags as $tag) { echo $tag->name . ',';}}?>">
            <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="project__image <?php if($i == 1){echo" show-image";}?>">
            <h2 class="title text-stroke_white project__title <?php if($i == 1){echo" show-project1";}?>"
                onmouseover="showImage(this);" onmouseout="hiddenImage(this);" data-img='<?php
    the_post_thumbnail_url(); ?>'><?php the_title(); ?></h2>

        </a>
        <?php endwhile;   endif; wp_reset_query();?>
        <img class="bg-sc bg-sc-sec" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/222.png" alt="">

    </div>
    <!-- block-main -->

    <!-- block-our-work -->
    <?php
    if( get_field('section2_on_off') ) {
      ?>
    <div class="block-our-work block_margin ">
        <div class="our-work__content">
            <p class="our-work__title text_big "><?php the_field('name_section'); ?></p>
            <h2 class="our-work__title title text-stroke_blue "><?php the_field('section2_title'); ?></h2>
            <p class="our-work__text text"> <?php the_field('section2_description'); ?> </p>
        </div>
        <div class=" projects__grid ">

            <?php
$query = new WP_Query( 'cat=1' ); 
if( $query->have_posts() ){
  while( $query->have_posts() ){
    $query->the_post();
    ?>
            <div class="col project size-img" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url('<?php
    the_post_thumbnail_url(); ?>')">
                        <div class="inner project__content">
                            <h3 class="project__margin text_big text-stroke_white-small ">
                                <?php the_title(); ?>
                            </h3>
                            <div class="project__margin text">
                                <?php 
                $post_tags = get_the_tags();
                if ( $post_tags ) {
                     foreach( $post_tags as $tag ) {
                    echo '<span>' . $tag->name . '<span> | </span></span>'; 
                     }
                 }
            ?>
                            </div>
                            <a href="<?php the_field('link_card'); ?>"
                                class="project__link btn_basic text"><?php the_field('project-name_link', 'options'); ?></a>
                        </div>
                    </div>
                    <a href="<?php the_field('link_card'); ?>" class="back">
                        <div class="inner">
                            <div class="project__description  text_big">
                                <?php the_excerpt();  ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php
  }
  wp_reset_postdata(); 
} 
?>
        </div>
    </div>
    <?php 
    }
    ?>
    <!-- block-our-work -->
    <!-- block-more-works -->
    <?php
    if( get_field('section5_on_off') ) {
      ?>
    <div class="new-t">
    <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">
        <h2 class="title text-stroke_blue main-block__title"><?php the_field('s5_title');?></h2>
        <div class="block-more-works block_margin new-template">
            <div class="block-more-works__content ">
                <?php $i=0;
            if( have_rows('s5_list') ): while ( have_rows('s5_list') ) : the_row();
            $i++; ?>
                <?php $image = get_sub_field('s5_background');?>
                <div class=" before text_big more-works__link list-works"
                    <?php if ($i == 1){ echo 'id="defaultOpen"';} ?> onmouseover="this.click();"
                    onclick="openTab(event, 'more-works__card<?php echo $i; ?>', 'more-works__card1<?php echo $i; ?>')">
                    <span
                        style="background-image: url(<?php echo $image['url'];?>"><?php  the_sub_field('s5_list_i'); ?></span>
                </div>
                <div class="more-works__card_mob more-works__card-tab" id="more-works__card1<?php echo $i; ?>">
                    <div class="more-works__card ">
                        <?php $img = get_sub_field('s5_image'); ?>
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="more-works__img">
                        <div class="more-works__container">
                            <div class="more-works__info">
                                <div class="more-works__title text_big text-stroke_white-small">
                                    <?php  the_sub_field('more-works__title'); ?></div>
                                <div class="text more-works__text"><?php  the_sub_field('s5_test'); ?></div>
                            </div>
                            <a href="<?php the_sub_field('s5_link'); ?>" class="more-works__btn before"></a>
                        </div>
                    </div>
                </div>
                <?php  endwhile; else : endif; ?>
            </div>
            <div class="block-more-works__container">
                <?php $i=0;
            if( have_rows('s5_list') ): while ( have_rows('s5_list') ) : the_row();
            $i++; ?>
                <div class="more-works__card more-works__card-tab" id="more-works__card<?php echo $i; ?>">
                    <?php $img = get_sub_field('s5_image'); ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="more-works__img">
                    <div class="more-works__container">
                        <div class="more-works__info">
                            <div class="more-works__title text_big text-stroke_white-small">
                                <?php  the_sub_field('s5_list_i'); ?></div>
                            <div class="text more-works__text"><?php  the_sub_field('s5_test'); ?></div>
                        </div>
                        <a href="<?php  the_sub_field('s5_link'); ?>" class="more-works__btn before"></a>
                    </div>

                </div>
                <?php  endwhile; else : endif; ?>
            </div>
            <img class="bg-sc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/222.png" alt="">

        </div>
    <img class="bg-sc bg-more" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/111.png" alt="">

    </div>
    <?php 
        }
    ?>
    <!-- block-more-works -->
    <!-- block-about-us -->
    <?php
    if( get_field('section4_on_off') ) {
      ?>
    <div class="block-about-us block_margin">
        <div class="about-us__container-img">
            <?php $img = get_field('image1_s4'); ?>
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="about_us__img " />
            <?php $img = get_field('image2_s4'); ?>
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="about_us__img" />
            <?php $img = get_field('image3_s4'); ?>
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="about_us__img photo-3" />
        </div>
        <div class="about_us__content">
            <p class="about-us__title text_big text_blue"><?php the_field('section4_subtitle'); ?></p>
            <h2 class=" about-us__title title text-stroke_white"><?php the_field('section4_title'); ?></h2>
            <p class="about-us__text text"><?php the_field('section4_description'); ?></p>
            <a href="<?php the_field('link_s4'); ?>"
                class="about-us__btn text_big btn_circle btn_basic before"><?php the_field('name-link_s4'); ?></a>

        </div>
    </div>

    <?php 
    }
    ?>
    <!-- block-about-us -->

    <!--new-block-more-works -->

</div>


<?php get_footer();?>
<script>
let image = document.getElementsByClassName('project__image');

function showImage(myDiv) {
    let dataImg = myDiv.dataset.img;

    myDiv.classList.add('show-project');
    for (let i = 0, len = image.length; i < len; i++) {
        image[i].classList.remove('show-image');
        let imageSrc = image[i].currentSrc;
        if (dataImg == imageSrc) {
            image[i].classList.add('show-image');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        var X = Y = 0;

        function getCoords(elem) {
            var box = elem.getBoundingClientRect();
            return {
                top: box.top + pageYOffset,
                left: box.left + pageXOffset
            };
        }

        function move() {
            let elY = getCoords(document.getElementsByClassName('show-project')[0]).top;
            let elX = getCoords(document.getElementsByClassName('show-project')[0]).left;
            document.getElementsByClassName('show-image')[0].style.left = X - elX + 'px';
            document.getElementsByClassName('show-image')[0].style.top = Y - elY + 'px';
        }
        document.addEventListener("mousemove", function(e) {
            X = e.pageX;
            Y = e.pageY;
            let posX = e.pageX;
            let posY = e.pageY;
        }, false);
        setInterval(move, 100);
    });
}


function hiddenImage(myDiv) {
    let dataImg = myDiv.dataset.img;
    myDiv.classList.remove('show-project');
    for (let i = 0, len = image.length; i < len; i++) {
        let imageSrc = image[i].currentSrc;
        if (dataImg == imageSrc) {
            // image[i].classList.remove('show-image');
        }
    }
}
</script>