let count = 1;
let progress = 0;
if(document.getElementById("loading-panel")){
    let interval = setInterval(function() {
        if (count > 100) {
            runAnimationElements();
            clearInterval(interval);
            setTimeout(()=>{
                document.getElementById("loading-panel").style.display = "none";
                document.getElementById("loader").style.display = "none";
            },2500);
            setTimeout(()=>{
                document.getElementById("slide-animation-loader").style.display = "none";
            },5000);
        } else {
            progress += 1;
            document.querySelector(".loader-progress").style.width = progress + "%";
            document.querySelector(".countnumber").innerHTML = progress + "%";
            count++;
        }
    }, 50);
}
function runAnimationElements(){
    setTimeout(()=>{
        document.querySelector(".slide-element-1").classList.add('active');
    },0);
    setTimeout(()=>{
        document.querySelector(".slide-element-2").classList.add('active');
    },100);
    setTimeout(()=>{
        document.querySelector(".slide-element-3").classList.add('active');
    },200);
}


// Slider
// const carousel = new bootstrap.Carousel('#slider',{
//     interval: 5000,
//     touch: true
// });



function showPopupForm(){
    const popupform = document.querySelector("#popupform");
    popupform.style.display = 'block';
}
function hidePopupForm(){
    const popupform = document.querySelector("#popupform");
    popupform.style.display = 'none';
}

const letstalk = document.getElementById("letstalk");
const closebtn = document.getElementById("closebtn");

letstalk.addEventListener("click",showPopupForm, false);
closebtn.addEventListener("click",hidePopupForm, false);

AOS.init();



window.onscroll = function() {stickyHeader()};

let header = document.querySelector("header");
let sticky = header.offsetTop;

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

