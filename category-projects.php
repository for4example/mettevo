<?php get_header();?>
<div class="container_page">
    <div class="project__container">
        <?php 
        $i=0;
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        $i++;
        ?>
        <a href="<?php echo get_post_permalink(); ?>" class="project__link">
            <img src="<?php
    the_post_thumbnail_url(); ?>" alt="image" class="project__image <?php if($i == 1){echo" show-image";}?>">
            <h2 class="title text-stroke_white project__title <?php if($i == 1){echo" show-project1";}?>"
                onmouseover="showImage(this);" onmouseout="hiddenImage(this);" data-img='<?php
    the_post_thumbnail_url(); ?>'><?php the_title(); ?></h2>
        </a>
        <?php endwhile; else :  endif; ?>
    </div>
</div>
<svg class="cursor" width="30" height="30" viewBox="0 0 30 30">
    <circle class="cursor__inner" cx="15" cy="15" r="7.5"></circle>
</svg>
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