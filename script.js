// スライダー機能
document.addEventListener('DOMContentLoaded', function() {
    const sliderItems = document.querySelectorAll('.c-slider__item');
    const dots = document.querySelectorAll('.c-slider__dot');
    let currentIndex = 0;
    let intervalId;

    // スライド切り替え関数
    function showSlide(index) {
        // 全てのスライドとドットから is-active クラスを削除
        sliderItems.forEach(item => item.classList.remove('is-active'));
        dots.forEach(dot => dot.classList.remove('is-active'));

        // 指定されたインデックスのスライドとドットに is-active クラスを追加
        sliderItems[index].classList.add('is-active');
        dots[index].classList.add('is-active');

        currentIndex = index;
    }

    // 次のスライドへ
    function nextSlide() {
        let nextIndex = (currentIndex + 1) % sliderItems.length;
        showSlide(nextIndex);
    }

    // 自動再生開始
    function startAutoPlay() {
        intervalId = setInterval(nextSlide, 5000); // 5秒ごとに切り替え
    }

    // 自動再生停止
    function stopAutoPlay() {
        clearInterval(intervalId);
    }

    // ドットボタンのクリックイベント
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            stopAutoPlay();
            showSlide(index);
            startAutoPlay(); // クリック後、自動再生を再開
        });
    });

    // 初期化：自動再生開始
    startAutoPlay();
});
