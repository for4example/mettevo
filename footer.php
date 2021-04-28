<?php $image = get_field('footer_bg', 'options');?>
<div class="block-footer container_page" style="background: url(<?php
    echo $image['url'] ?>) center no-repeat;">
    <div class="footer-left">
        <?php
            wp_nav_menu( [
            'theme_location'  => '',
            'menu'            => '', 
            'container'       => 'ul', 
            'container_class' => '', 
            'container_id'    => '',
            'menu_class'      => 'menu flex-direction'
            ] );
        ?>
    </div>
    <?php $image = get_field('footer_latter', 'options'); ?>
    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
    <div class="footer-right">
        <div class="block-footer__content">
            <?php if( have_rows('social', 'options') ): while ( have_rows('social', 'options') ) : the_row(); ?>
            <?php $img = get_sub_field('icon_social_link', 'options'); 
                ?>
            <a href="<?php the_sub_field('social_link', 'options'); ?>" class="link_circle link_social before"><span
                    class="icon_social" style=" -webkit-mask-image: url(<?php echo $img['url']; ?>) ; "></span></a>
            <?php  endwhile; else : endif; ?>
        </div>
        <div class="block-footer__link title_small">
            <a href="javascript:void(0)" onclick="openForm()"
                class="link_footer"><?php the_field('name-link_footer', 'options'); ?></a>
        </div>
    </div>
</div>
<div class="copyrights text text_big "> <?php the_field('copyrights_text', 'options' ); ?> <?php echo date('Y'); ?>
    | All rights reserved.</div>
</div>

<?php wp_footer(); ?>

</body>
</html>