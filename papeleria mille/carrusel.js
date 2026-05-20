let slideIndex = 0;

function showSlides(index) {
    const slides = document.querySelectorAll('.carousel-item');
    if (index >= slides.length) {
        slideIndex = 0;
    }
    if (index < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[slideIndex].style.display = 'block';
}

function moveSlide(n) {
    slideIndex += n;
    showSlides(slideIndex);
}

function autoSlide() {
    slideIndex++;
    showSlides(slideIndex);
}

// Inicializa el carrusel mostrando la primera imagen
showSlides(slideIndex);

// Cambia de imagen cada 3 segundos (3000 ms)
setInterval(autoSlide, 3000);