<?php /* Template Name: New Single 
Template Post Type: post, page
*/ get_header();?>
<?php if( have_rows('new_single') ):
      while ( have_rows('new_single') ) : the_row();
      if( get_row_layout() == 'header' ): 
?>  
<section id="pr-top">
    <div class="container_page">
        <div class="about-project">
            <div class="about-project__title text-align">
                <!-- <p>Healthcare</p> -->
                <h1 class="block-main__title title_big text-stroke_blue"><?php the_title();?></h1>
            </div>
            <div class="about-project__content d-flex">
                <div class="about-project__left wrap-45">
                    <?php echo get_the_post_thumbnail();?>
                </div>
                <div class="about-project__right wrap-45">
                    <div class="about-project-content">
                        <?php $image = get_sub_field('image');?>
                        <img class="small-img" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        <div class="about-items">
                        <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
                            <?php if(!get_sub_field('techologies')):?>
                            <div class="about-item d-flexx">
                                <span class="blue-title"><?php the_sub_field('title');?></span>
                                <?php if( have_rows('list_item') ): while ( have_rows('list_item') ) : the_row(); ?>
                                <p class="main-t"><?php the_sub_field('title');?></p>
                                <?php endwhile; endif ;?>
                            </div>
                            <?php else: ?>
                            <div class="about-tech">
                                <div class="about-tech-title">
                                    <span class="blue-title"><?php the_sub_field('title');?></span>
                                </div>
                                <div class="about-tech-item d-flexx">
                                    <?php if( have_rows('list_item') ): while ( have_rows('list_item') ) : the_row(); ?>
                                        <p class="main-t"><?php the_sub_field('title') ?></p>
                                    <?php endwhile; endif ;?>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>
                        </div>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
            <div class="scroll"> </div>
        </div>
    </div>
</section>
<?php elseif(get_row_layout() == 'content' ) :?>
<section id="cont">
    <div class="container_page">
    <?php $i=0; $n=0;  if( have_rows('m_content') ): while ( have_rows('m_content') ) : the_row(); ?>
        <div class="main-content">
            <div class="content__title">
                <h2 class="block-main__title text-stroke_blue"><?php the_sub_field('title');?></h2>
            </div>
            <div class="content-block d-flex">
                <div class="content-block__left-item wrap-55">
                    <?php if(get_sub_field('main_title')):?>
                        <h3 class="block-main__title"><?php the_sub_field('main_title');?></h3>
                    <?php else: endif;?>
                    <p><?php the_sub_field('text');?></p>
                    <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
                        <div class="content-b" data-id="<?= $i; ?>">
                            <?php the_sub_field('button');?>
                            <?php if( have_rows('images') ): while ( have_rows('images') ) : the_row(); ?>
                                <?php $image = get_sub_field('image');?>
                                <img class="d-none" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                            <?php $i++; endwhile; endif; ?>
                        </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="content-block-r wrap-45">
                <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
                <div class="content-block__right-item" data-id="<?= $n; ?>">
                    <?php if( have_rows('images') ): while ( have_rows('images') ) : the_row(); ?>
                        <?php $image = get_sub_field('image');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    <?php $n++; endwhile; endif; ?>
                </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </div>
</section>
<?php elseif(get_row_layout() == 'content-slider' ) :?>
<section id="slider">
    <div class="container_page">
        <div class="content-slider flex">
            <div class="content-slider__left">
                <h2 class="block-main__title"><?php the_sub_field('title');?></h2>
                <p><?php the_sub_field('text');?></p>
                <div class="content-slider__items flex">
                <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
                    <div class="content-slider__item flex">
                    <?php $image = get_sub_field('image');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        <p><?php the_sub_field('text');?></p>
                    </div>
                <?php endwhile; endif;?>
                </div>
                <a href="javascript:void(0)" onclick="openForm()" class="btn-content-slider"><?php the_sub_field('button');?></a>
            </div>
            <div class="content-slider__right">
                <div class="content-slider__img">
                <?php if(have_rows('slides')) : while(have_rows('slides')) : the_row();?>
                    <?php $image = get_sub_field('image');?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                <?php endwhile; endif; ?>
                </div>
                <div class="arrows flex">
                    <div class="prev-slide"></div>
                    <div class="next-slide"></div>
                </div>
            </div>
        </div>
    </div>  
</section>
<?php elseif(get_row_layout() == 'projects-slider' ) :?>
<section id="projects-slider">
    <div class="container_page">
        <div class="project-slider__title">
            <h2 class="block-main__title text-stroke_blue"><?php the_sub_field('title');?></h2>
        </div>
        <div class="project-slider__menu">
            <ul class="project-menu">
            <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
                <li><a  href="#" class="category-button" data-filter="<?php the_sub_field('slug');?>"><?php the_sub_field('name');?></a></li>
            <?php endwhile; endif; ?>
            </ul>
        </div>
        <div class="slides">

        <?php 
            $args = array(
            'cat' => '17',
            'posts_per_page' => 9,
            'order'    => 'ASC'
            );              
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : 
            $the_query->the_post(); 
            
            $postID = $post->ID; 
            // var_dump($fields);
        ?>
        
            <div class="main-blocks__item-right">
    <div class="project-block" style="background-color: <?php echo $color;?>">
        <div class="project-block__left">
        
            <?php  $img = get_sub_field('image', $postID);  var_dump($img);?>
            <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" />
            <div class="content-box-p">
            <?php if( have_rows('list', $postID) ): while ( have_rows('list', $postID) ) : $row = the_row(); var_dump($row); ?>
                <div class="content-box__item">
                    <h3><?php the_sub_field('title');?></h3>
                <?php if( have_rows('list_item', $postID) ): while ( have_rows('list_item', $postID) ) : the_row(); ?>
                    <p><?php the_sub_field('title');?></p>
                <?php endwhile; endif; ?>   
                </div>
            <?php endwhile; endif;?>
            </div>
            <h3>Technologies</h3>
            <div class="techonologies">
                <div class="tech-item">
                    <p>UI/UX</p>
                </div>
                <div class="tech-item">
                    <p>Vue.Js</p>
                </div>
                <div class="tech-item">
                    <p>HTML/CSS</p>
                </div>
            </div>
        </div>
        <div class="project-block__right">
            <img src="https://mettevo.com/wp-content/uploads/2021/03/2-323232022.png" alt="" />
        </div>
    </div>
</div>

        <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<?php endif; endwhile; endif;  get_footer(); ?>
