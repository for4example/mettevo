// табы
function openTab(evt, tabId, tabIdMob) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("more-works__card-tab");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.visibility = "hidden";
        tabcontent[i].style.height = "0";
    }
    tablinks = document.getElementsByClassName("more-works__link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(tabId).style.visibility = "visible";
    document.getElementById(tabId).style.height = "auto";
    document.getElementById(tabIdMob).style.visibility = "visible";
    document.getElementById(tabIdMob).style.height = "auto";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

const txts=document.querySelector(".animate-text").children,
txtsLen=txts.length;
let index=0;
const textInTimer=3000,
    textOutTimer=2800;

function animateText() {
for(let i=0; i<txtsLen; i++){
txts[i].classList.remove("text-in","text-out");  
}
txts[index].classList.add("text-in");

setTimeout(function(){
    txts[index].classList.add("text-out");              
},textOutTimer)

setTimeout(function(){

if(index == txtsLen-1){
    index=0;
    }
else{
    index++;
    }
    animateText();
},textInTimer); 
}

window.onload=animateText;


// анимация 

// let block = document.getElementById('container_hover');
// const circleHover = document.querySelector('.image_hidden');

// function showImgContent(e) {
//     let box = block.getBoundingClientRect();
//     let top = box.top + pageYOffset;
//     let left = box.left + pageXOffset;
//     x = e.pageX;
//     y = e.pageY;
//     circleHover.style.setProperty('--x', (x - left) + 'px');
//     circleHover.style.setProperty('--y', (y - top) + 'px');
// }

// document.addEventListener('mousemove', showImgContent);