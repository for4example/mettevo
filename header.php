<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KRR6Q9P');
    </script>
    <!-- End Google Tag Manager -->
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRR6Q9P" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <!-- menu -->
        <div class="menu-wrapper" id="overlay">

            <nav class="menu-overlay " data-scrollbar>
                <div class="menu-container">
                    <div class="menu-name title text-stroke_blue">MENU</div>
                    <?php   $navMenu = wp_get_nav_menu_items('Top'); /*/Pass Nav Menu_id or Name*/
$previousMenuParent = $level = 0;
echo '<ul class="menu-list">';
foreach ($navMenu as $menu) {
    $level = 0;
    $urlPage = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $urlItem = $menu->url;
 if ($urlPage == $urlItem){
    echo '<li class="menu-items menu-items_active items-link" id="menu-items_active" ><a href="'. $menu->url .'">'. $menu->title .'</a>';
 } else {
    echo '<li class="menu-items items-link"  ><a href="'. $menu->url .'">'. $menu->title .'</a>';
}

$id = $menu->object_id;
$slug = $menu->post_name;
$object = $menu->object;
    $term = get_category_by_slug($slug);
    $image1 = get_field('image', $term);
    $image2 = get_field('image', $id);

    if(!empty($image1) && $object == 'category'){
        echo "<img src='".$image1['url']."'>";
    } else if(!empty($image2['url'])){
        echo "<img src='".$image2['url']."'>";
    } else{
        echo get_the_post_thumbnail($id);
    }
    echo '</li>';
}
echo '</ul>';
?>

                    <!-- <php	wp_nav_menu( array('menu'=>'Top', 'items_wrap' => '<ul class="menu-list">%3$s</ul>' ) ); ?> -->
                    <div class=" menu-social-link ">
                        <?php if( have_rows('social', 'options') ): while ( have_rows('social', 'options') ) : the_row(); ?>
                        <?php $img = get_sub_field('icon_social_link', 'options'); ?>
                        <a href="<?php the_sub_field('social_link', 'options'); ?>"
                            class="menu-link link_circle  link_social before"><span class="icon_social"
                                style=" -webkit-mask-image: url(<?php echo $img['url']; ?>) ; "></span></a>
                        <?php  endwhile; else : endif; ?>
                        <a href="javascript:void(0)" onclick=" show();  openForm();"
                            class="message-circle menu-message-circle">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- menu -->
        <!-- form_message -->
        <div class="overlay_form " id="formContant" data-scrollbar>
            <div class="container_form ">
                <div class="form_message before">
                    <div class="content_form">
                        <div>
                            <h2 class="title_form title text-stroke_blue"><?php the_field('title_form', 'option'); ?>
                            </h2>
                            <?php echo do_shortcode( '[contact-form-7 id="385" title="form-en"]' ); ?>
                        </div>
                        <div>
                            <a href="javascript:void(0)" onclick="closeForm()" class=" btn_close nav-burger active"></a>
                            <div class=" form-social-link ">
                                <?php if( have_rows('social', 'options') ): while ( have_rows('social', 'options') ) : the_row(); ?>
                                <?php $img = get_sub_field('icon_social_link', 'options'); ?>
                                <a href="<?php the_sub_field('social_link', 'options'); ?>"
                                    class="menu-link link_circle  link_social before"><span class="icon_social"
                                        style=" -webkit-mask-image: url(<?php echo $img['url']; ?>) ; "></span></a>
                                <?php  endwhile; else : endif; ?>
                            </div>
                        </div>
                    </div>
                    <h3 class="text_form text"><?php the_field('text_form', 'option'); ?></h3>
                </div>
            </div>
        </div>
        <!-- form_message -->
        <div class="container__popUpModal" id="popUpModal_success">
            <div class="popUpModal popUpModal_success">
                <span class="close_popUp" onclick="closePopUp()"></span>
                <div class="popUpModal__content">
                    <h2 class="text_big text_black title_success before popUpModal__title">

                        <?php the_field('success_title', 'option');?>
                    </h2>
                </div>
                <?php $img = get_field('success__img', 'options'); ?>
                <img src="<?php echo $img['url']; ?>" class="success__img" alt="<?php echo $img['alt']; ?>">
            </div>
        </div>
        <div class="container__popUpModal" id="popUpModal_error">
            <div class="popUpModal popUpModal_error">
                <span class="close_popUp" onclick="closePopUp()"></span>
                <div class="popUpModal__content">
                    <h2 class="text_big text_black title_error before popUpModal__title">
                        <?php the_field('error_title', 'option');?>
                    </h2>
                </div>
                <?php $img = get_field('error__img', 'options'); ?>
                <img src="<?php echo $img['url']; ?>" class="error__img" alt="<?php echo $img['alt']; ?>">
            </div>
        </div>




        <?php
if( is_front_page() || is_404() || is_page_template('tpl-front-page.php')|| is_page_template('tpl-cases.php') ||is_page_template('fr-tmp.php') || is_category(5) || is_page_template('tpl-how-it-work.php')){
       get_template_part('template-parts/main-header');
        }
        elseif( is_single() && !is_page_template('tpl-project.php' && !is_page_template('tpl-project-new.php'))){
            get_template_part('template-parts/single-news-header');
        }
        else {
        get_template_part('template-parts/regular-header');
         }
      ?>