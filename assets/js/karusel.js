console.log('Karusel JS er loaded');

document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.karusel-track');
    const slides = Array.from(document.querySelectorAll('.karusel-slide'));
    const prev = document.querySelector('.karusel-btn.prev');
    const next = document.querySelector('.karusel-btn.next');

    if (!track || !slides.length || !prev || !next) {
        console.warn('Karusel: mangler elementer');
        return;
    }

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
});
