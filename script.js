// πÈ§¿¸_˝
document.addEventListener('DOMContentLoaded', function() {
    const sliderItems = document.querySelectorAll('.c-slider__item');
    const dots = document.querySelectorAll('.c-slider__dot');
    let currentIndex = 0;
    let intervalId;

    // πÈ§…äˇH¢p
    function showSlide(index) {
        // hfnπÈ§…h…√»Kâ is-active ØÈπíJd
        sliderItems.forEach(item => item.classList.remove('is-active'));
        dots.forEach(dot => dot.classList.remove('is-active'));

        // öUå_§Û«√ØπnπÈ§…h…√»k is-active ØÈπí˝†
        sliderItems[index].classList.add('is-active');
        dots[index].classList.add('is-active');

        currentIndex = index;
    }

    // !nπÈ§…x
    function nextSlide() {
        let nextIndex = (currentIndex + 1) % sliderItems.length;
        showSlide(nextIndex);
    }

    // Í’çãÀ
    function startAutoPlay() {
        intervalId = setInterval(nextSlide, 5000); // 5“ThkäˇH
    }

    // Í’ç\b
    function stopAutoPlay() {
        clearInterval(intervalId);
    }

    // …√»‹øÛnØÍ√Ø§ŸÛ»
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            stopAutoPlay();
            showSlide(index);
            startAutoPlay(); // ØÍ√ØåÍ’çíçã
        });
    });

    // Í’çãÀ
    startAutoPlay();
});
