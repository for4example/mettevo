
<div class="wrap__page_not-found">
<?php
get_header();
?>
<div class="page_not-found">
    <div class="image_not-found">
<?php $image = get_field('image_not-found', 'options');?>
          <img src="<?php echo $image['url'] ?>"
            alt="<?php echo $img['alt']; ?>" />
            </div>
<h1 class="text_not-found"><?php the_field('text_page_not-found', 'options');?></h1>
</div>
</div>
<?php
get_footer();