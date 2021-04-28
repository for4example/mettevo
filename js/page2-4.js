let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

document.addEventListener("DOMContentLoaded", ready);

//функция меню
document.getElementById('navToggle').onclick = (function show() {
  this.classList.toggle('active');
  document.getElementsByTagName("html")[0].classList.toggle("hidden");
  document.getElementById('overlay').classList.toggle('open');
  document.body.classList.toggle('locked');
  document.querySelector('.main-block__grid').classList.toggle('section-main_hidden');
  document.querySelector('.button-message').classList.toggle('none-transition');
  document.querySelector('.link__text').classList.toggle('none-transition');
});
document.addEventListener("DOMContentLoaded", ready);
//функция исчезновения кнопки


let btn = document.querySelector(".button-message");

let text = document.querySelector(".link__text");
let btnCoordinates = btn.getBoundingClientRect().y;

function showButton() {
  if (window.pageYOffset >= 250) {
    text.style.opacity = "0";
    btn.style.height = "8.6rem";
    btn.style.width = "8.6rem";
    btn.style.padding = "1rem 1rem 0rem 0rem ";
    btn.classList.add("button-message_small");
    let btnSmall = document.querySelector(".button-message_small");
    if (window.pageYOffset >= btnCoordinates) {
      btnSmall.style.position = "fixed";
      btnSmall.style.right = "0";
      btnSmall.style.bottom = "3rem";
      btnSmall.style.marginRight = "3rem";
    } else {
      btnSmall.style.position = "relative";
      btnSmall.style.bottom = "auto";
      btnSmall.style.marginRight = "-3rem";
    }
  } else {
    btn.classList.remove("button-message_small");
    btn.style.width = "32.7rem";
    btn.style.padding = "2.5rem 14.5rem 2.5rem 6.5rem";
    text.style.opacity = "1";
    btn.style.marginRight = "3rem";
  }
}

window.onscroll = showButton;