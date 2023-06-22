
// search bar go down
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

// login pop up
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');

// menu bar view
let menubar = document.querySelector('#menu-bar');    
let navbar = document.querySelector('.navbar');

// slider img
let imgBtn = document.querySelectorAll('.img-btn');


// on scroll
window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menubar.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

// menu bar view
menubar.addEventListener('click', () =>{
    menubar.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}); 


// search bar go down
searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
}); 

// login pop up
formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
}); 

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
}); 

// testimoni img slider
imgBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    // loop:true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },        
    },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
//   pagination: {
//     el: ".swiper-pagination",
//   },
});