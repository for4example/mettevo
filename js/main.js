// document.getElementById("navToggle").onclick = function show() {
//   this.classList.toggle("active");
//   document.getElementsByTagName("html")[0].classList.toggle("hidden");
//   document.getElementById("overlay").classList.toggle("open");
//   document.body.classList.toggle("locked");
//   document.querySelector(".section-hidden").classList.toggle("section-main_hidden");
//   document.querySelector(".button-message").classList.toggle("none-transition");
//   document.querySelector(".link__text").classList.toggle("none-transition");
//   document.querySelector(".page-language").classList.toggle("section-main_hidden");
//   document.querySelector(".message").classList.toggle("section-main_hidden");
// };

 // контакт форма
 let scrollContent = document.getElementsByClassName('scroll-content');
 let modal = document.getElementById("formContant");
 function openForm() {
  modal.style.width = "100%";
  scrollContent[0].classList.add("no-transform-form");
  // document.querySelector(".button-message").style.display = "none";
}

function closeForm() {
  modal.style.width = "0%";
  scrollContent[0].classList.remove("no-transform-form");
  // document.querySelector(".button-message").style.display = "block";
}


// When the user clicks anywhere outside of the modal, close it
let page = document.querySelector( '.container_form');
window.onclick = function(event) {
  console.log('click');
  console.log(page);
  if (event.target == page) {
    console.log('page click');
      document.getElementById("formContant").style.width = "0%";
      scrollContent[0].classList.remove("no-transform-form");
  }
}

// меню


function show() {
  document.getElementById('navToggle').classList.toggle('active');
    document.getElementsByTagName("html")[0].classList.toggle("hidden");
    scrollContent[0].classList.toggle("no-transform");
    document.getElementById('overlay').classList.toggle('open');
    document.body.classList.toggle('locked');
    document.querySelector(".section-hidden").classList.toggle("section-main_hidden");
    document.querySelector(".block-main__message").classList.toggle("none-transition");
    document.querySelector(".btn_circle").classList.toggle("none-transition");
};

function addActive() {
  document.querySelector("#menu-items_active").classList.add("menu-items_active");
}
function deletActive() {
    document.querySelector("#menu-items_active").classList.remove("menu-items_active");
}






// показ сообщения после успешной отправки
jQuery(document).ready(function($) {
  $(".wpcf7").on('wpcf7:mailsent', function(event) {
      $('.overlay_form ').css('width', '0');
      console.log('otprav');
      $('#popUpModal_success').addClass('active');
      console.log('add class');
      setTimeout(function() {
          $("#popUpModal_success").removeClass('active');
      }, 3000);
  });
});

jQuery(document).ready(function($) {
  $(".wpcf7").on('wpcf7:mailfailed' || 'wpcf7:spam' || 'wpcf7:invalid', function(event) {
      $('.overlay_form ').css('width', '0');
      $('#popUpModal_error').addClass('active');
      setTimeout(function() {
          $("#popUpModal_error").removeClass('active');
      }, 3000);
  });
});

jQuery(document).ready(function($) {
  $('.items-link:first-child').addClass('showed');
  $('.items-link').hover(function(){
    $(this).addClass('showed');
    $(this).siblings().removeClass('showed');
  });
});

jQuery(document).ready(function($) {
if (window.matchMedia("(max-width: 768px)").matches) {
  $('.more-works__link').addClass('active');
  $('.more-works__card-tab').css("visibility", 'visible');
  $('.more-works__card-tab').css("height", 'auto');
} 
});

jQuery(document).ready(function($) {
  if($('.menu-items_active').length > 0) {
    $('.showed').removeClass('showed');
  }
  });

  jQuery(document).ready(function($) {
    // $('.category-button').categoryFilter();
    //   $('.project-menu li a').click(function(e){
    //     e.preventDefault();
    //     $(this).toggleClass('active');
    //     $(this).siblings().removeClass('active');
    //   });
    //   if(($(".filter").css("display") == "block")){
    //     $(this).find('project__image').addClass('show-image');
    //   }else{
    //     $(this).find('project__image').removeClass('show-image');
    //   }

    //   $.fn.categoryFilter=function(selector){
    //     this.click( function() {
    //       var categoryValue = $(this).attr('data-filter');
    //       $(this).addClass('active').siblings().removeClass('active');
    //       if(categoryValue=="all") {
    //         $('.filter').show(1000);
    //       } else {
    //         $(".filter").not('.'+categoryValue).hide('3000');
    //               $('.filter').filter('.'+categoryValue).show('3000');
    //       }
    //     });
    //   }
    var $articles = $('.project__link');
    $('.project-menu li a').click(function(e) {
      e.preventDefault();
      var toFilter = $(this).attr('data-filter').split(',');
    
      $articles.hide().filter(function() {
        var filter = $(this).attr('data-filter').split(',');
        return toFilter.some(function(value) {
          return filter.indexOf(value) > -1;
        });
      }).show();
    });
    });
let popUpSuccess = document.getElementById("popUpModal_success");
let popUpError = document.getElementById("popUpModal_error");

function closePopUp() {
  popUpSuccess.classList.remove("active");
  popUpError.classList.remove("active");
}
jQuery(document).ready(function($) {
$(document).bind('mousewheel', function(e) {
});

// jQuery(document).ready(function($) {
//   $('.list-works ul li:first-of-type').addClass('show');
//   $(".list-works ul li").on('hover', function(event) {
//     $(this).addClass('show');
//     $(this).siblings().removeClass('show');
//     $(this).css( "background-color: linear-gradient(rgba(0))");
//   });
// });


});


jQuery(document).ready(function($) {
  $('.content-slider__img').slick({
    dots: true,
    infinite: false,
    // variableWidth: true,
    arrows: true,
    prevArrow: $(".prev-slide"),
    nextArrow: $(".next-slide"),
    slidesToShow: 1,
    slidesToScroll: 1
  });
  });
  










//функция исчезновения кнопки

// let btn = document.querySelector(".button-message");

// let text = document.querySelector(".link__text");
// let btnCoordinates = btn.getBoundingClientRect().y;

// function showButton() {
//   if (window.pageYOffset >= 250) {
//     text.style.opacity = "0";
//     btn.style.height = "8.6rem";
//     btn.style.width = "8.6rem";
//     btn.style.padding = "1rem 1rem 0rem 0rem ";
//     btn.classList.add("button-message_small");
//     let btnSmall = document.querySelector(".button-message_small");
//     if (window.pageYOffset >= btnCoordinates) {
//       btnSmall.style.position = "fixed";
//       btnSmall.style.right = "0";
//       btnSmall.style.bottom = "3rem";
//       btnSmall.style.marginRight = "3rem";
//     } else {
//       btnSmall.style.position = "relative";
//       btnSmall.style.bottom = "auto";
//       btnSmall.style.marginRight = "-3rem";
//     }
//   } else {
//     btn.classList.remove("button-message_small");
//     btn.style.width = "32.7rem";
//     btn.style.height = "7.3rem";
//     btn.style.padding = "2rem 14.5rem 2rem 6.5rem";
//     text.style.opacity = "1";
//     btn.style.marginRight = "3rem";
//   }
// }

// window.onscroll = showButton;


// function openForm() {
//   modal.style.width = "100%";
//   document.querySelector(".button-message").style.display = "none";
// }

// function closeForm() {
//   modal.style.width = "0%";
//   document.querySelector(".button-message").style.display = "block";
// }

// var modal = document.getElementById("formContant");

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == modal) {
//     document.getElementById("formContant").style.width = "0%";
//     document.querySelector(".button-message").style.display = "block";
//     console.log("test2");
//   }
//   console.log("test");
// }