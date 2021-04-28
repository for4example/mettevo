<?php /* Template Name: All Projects*/ get_header();?>
<?php if( have_rows('projects') ):
      while ( have_rows('projects') ) : the_row();
      if( get_row_layout() == 'header' ): 
?>  

<section>
    <div class="container_page">
        <div class="projects-main">
            <div class="projects-main__title">
                <p><?php the_sub_field('small_title');?></p>
                <h1 class="block-main__title title_big text-stroke_blue"><?php the_sub_field('title');?></h1>
            </div>
        </div>
    </div>
</section>

<?php elseif(get_row_layout('blocks')):?>
<section>
    <div class="container_page">
        <div class="main-blocks">
        <?php $i=0;
            if( have_rows('list') ): while ( have_rows('list') ) : the_row();
            $i++; ?>
            <div class="main-blocks__item flex">
                <div class="main-blocks__item-left wrap-45 wrap-100">
                    <div class="main-block__title">
                        <h2><?php the_sub_field('title');?></h2>
                        <hr style="<?php if(get_sub_field('color')) : echo 'background-color:'?><?php the_sub_field('color'); else: endif;?>">
                    </div>
                    <p><?php the_sub_field('text');?></p>
                    <a href="<?php the_sub_field('link');?>">View</a>
                </div>
                <div class="perspective-container wrap-55 wrap-100">
                <div class="main-blocks__item-right">
                    <div class="project-block" <?php if(get_sub_field('color')) : ?>style="background-color:<?php the_sub_field('color'); else: endif;?>">
                        <div class="project-block__left">
                            <?php $image = get_sub_field('small_image');?>
                           <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                            <div class="content-box-p">
                                <?php if( have_rows('list_box') ): while ( have_rows('list_box') ) : the_row(); ?>
                                    <div class="content-box__item">
                                        <h3><?php the_sub_field('title');?></h3>
                                        <p><?php the_sub_field('text');?></p>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                            <h3>Technologies</h3>
                                <div class="techonologies">
                                    <?php if( have_rows('techno') ): while ( have_rows('techno') ) : the_row(); ?>
                                        <div class="tech-item">
                                            <p><?php the_sub_field('title');?></p>
                                        </div>
                                    <?php endwhile; endif; ?>
                                </div>
                        </div>
                        <div class="project-block__right">
                            <?php $image = get_sub_field('project_image');?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<?php endif; endwhile; endif; get_footer(); ?>
