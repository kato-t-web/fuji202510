// ����_�
document.addEventListener('DOMContentLoaded', function() {
    const sliderItems = document.querySelectorAll('.c-slider__item');
    const dots = document.querySelectorAll('.c-slider__dot');
    let currentIndex = 0;
    let intervalId;

    // �����H�p
    function showSlide(index) {
        // hfn���h���K� is-active �鹒Jd
        sliderItems.forEach(item => item.classList.remove('is-active'));
        dots.forEach(dot => dot.classList.remove('is-active'));

        // �U�_���ï�n���h���k is-active �鹒��
        sliderItems[index].classList.add('is-active');
        dots[index].classList.add('is-active');

        currentIndex = index;
    }

    // !n���x
    function nextSlide() {
        let nextIndex = (currentIndex + 1) % sliderItems.length;
        showSlide(nextIndex);
    }

    // �Ս��
    function startAutoPlay() {
        intervalId = setInterval(nextSlide, 5000); // 5�Thk��H
    }

    // �Ս\b
    function stopAutoPlay() {
        clearInterval(intervalId);
    }

    // ���ܿ�n��ï����
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            stopAutoPlay();
            showSlide(index);
            startAutoPlay(); // ��ï��Ս���
        });
    });

    // �Ս��
    startAutoPlay();
});
