const track = document.querySelector('.karusel-track');
const slides = Array.from(document.querySelectorAll('.karusel-slide'));
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let index = 0;

function updateKarusel() {
    track.style.transform = `translateX(-${index * 100}%)`;
}

next.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateKarusel();
});

prev.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateKarusel();
});
