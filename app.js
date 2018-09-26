window.onscroll = function() {scrollFunction()};
let width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

let logo = document.querySelector(".site-logo");


function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && window.innerWidth >= 800) {
    logo.style.width = "15%";
  } else {
    logo.style.width = "25%";
  }
}

let icon = document.querySelector('.mobile-board__menu-icon');
let icon_x = document.getElementById('site-header__x');
let header = document.querySelector('header');
let main = document.querySelector('main');
let motto = document.querySelector('.large-hero__motto');

icon.addEventListener('click', sideBarExpand);
icon_x.addEventListener('click', sideBarShrink);

function sideBarExpand() {
    header.style.left = "0";
    icon.style.opacity = "0";
    main.style.right = "-350px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function sideBarShrink() {
    header.style.left = "-350px";
    icon.style.opacity = "1";
    main.style.right = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}