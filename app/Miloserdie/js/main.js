function hamburgerButton() {
    let menuIcon = document.querySelector('.site-header__menu-icon');
    let menuContent = document.querySelector('.site-header__menu-content');
    let nav = document.querySelector('.primary-nav');
    menuIcon.addEventListener('click', function() {
        menuContent.classList.toggle('site-header__menu-content--is-visible');
        window.setTimeout(function() {nav.classList.toggle('primary-nav--is-expanded')}, 50);
        menuIcon.classList.toggle('site-header__menu-icon--close-x');
    });
}
hamburgerButton();

if (document.querySelector('#preview-img')) {
    let img = document.querySelector('#preview-img')
    let bg = document.querySelector('.pre');
    let docImages = document.querySelectorAll('.documents-img');
    bg.addEventListener('click', function(){
        bg.style.display = 'none';
    });
    for (i = 0; i < docImages.length; i++) {
        docImages[i].addEventListener('click', function () {
            img.src = this.src;
            bg.style.display = 'block';
        });
    }
} else if (document.querySelector('.pop-up-motto')) {
    let motto = document.querySelector('.pop-up-motto');
    setTimeout(function () {motto.classList.add('hide');}, 6000);
    
}

if (document.querySelector('#event-slider')) {
    var slideIndex = 0;
    showSlides(slideIndex);

// Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        if (dots[slideIndex-1].classList.contains('dot-orange')) {
            dots[i].className = dots[i].className.replace(" active-orange", "");
        } else if (dots[slideIndex-1].classList.contains('dot-green')){
            dots[i].className = dots[i].className.replace(" active-green", "");
        }
    }
    slides[slideIndex-1].style.display = "block"; 
    if (dots[slideIndex-1].classList.contains('dot-orange')) {
        dots[slideIndex-1].className += " active-orange";
    } else if (dots[slideIndex-1].classList.contains('dot-green')){
        dots[slideIndex-1].className += " active-green";
    }
    }
    showAutoSlides();
    function showAutoSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            if (dots[slideIndex-1].classList.contains('dot-orange')) {
                dots[i].className = dots[i].className.replace(" active-orange", "");
            } else if (dots[slideIndex-1].classList.contains('dot-green')){
                dots[i].className = dots[i].className.replace(" active-green", "");
            }
        }
        slides[slideIndex-1].style.display = "block";  
        if (dots[slideIndex-1].classList.contains('dot-orange')) {
            dots[slideIndex-1].className += " active-orange";
        } else if (dots[slideIndex-1].classList.contains('dot-green')){
            dots[slideIndex-1].className += " active-green";
        }
        
        setTimeout(showAutoSlides, 15000); // Change image every 15 seconds
    }
}
