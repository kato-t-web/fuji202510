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

    // スクロールフェードインアニメーション
    const fadeInElements = document.querySelectorAll('.js-fadein');

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -100px 0px', // 要素が画面下から100px手前に来たら発動
        threshold: 0
    };

    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // 一度表示されたら監視を解除（必要に応じて削除可能）
                fadeInObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // 各要素の監視を開始
    fadeInElements.forEach(element => {
        fadeInObserver.observe(element);
    });

    // ハンバーガーメニュー
    const hamburger = document.querySelector('.c-hamburger');
    const nav = document.querySelector('.c-nav');
    const navLinks = document.querySelectorAll('.c-nav__link');

    if (hamburger && nav) {
        // ハンバーガーボタンのクリックイベント
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
            // スクロールを防止/許可
            document.body.classList.toggle('body-fixed');
        });

        // メニューリンクのクリックでメニューを閉じる
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('is-active');
                nav.classList.remove('is-active');
                document.body.classList.remove('body-fixed');
            });
        });
    }

    // アコーディオン機能
    const accordionButtons = document.querySelectorAll('[data-accordion-toggle]');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-accordion-toggle');
            const targetContent = document.querySelector(`[data-accordion="${targetId}"]`);

            if (targetContent) {
                // アコーディオンの開閉をトグル
                targetContent.classList.toggle('is-open');
                this.classList.toggle('is-open');

                // ボタンのテキストを変更
                const buttonText = this.querySelector('.c-accordion-button__text');
                if (this.classList.contains('is-open')) {
                    buttonText.textContent = buttonText.textContent.replace('全て見る', '閉じる');
                } else {
                    buttonText.textContent = buttonText.textContent.replace('閉じる', '全て見る');
                }
            }
        });
    });

    // メニュー数量選択機能
    const menuCards = document.querySelectorAll('.c-menu-card');
    const orderSummaryPrice = document.querySelector('.c-order-summary__price');
    const resetButton = document.querySelector('.c-order-summary__reset');

    // 全体の合計金額を計算
    function updateGrandTotal() {
        let grandTotal = 0;
        menuCards.forEach(card => {
            const quantityValue = card.querySelector('.c-quantity-value');
            const priceElement = card.querySelector('.c-menu-card__price');
            const unitPrice = parseInt(priceElement.getAttribute('data-price'));
            const quantity = parseInt(quantityValue.textContent);
            grandTotal += unitPrice * quantity;
        });
        if (orderSummaryPrice) {
            orderSummaryPrice.textContent = `¥${grandTotal.toLocaleString()}`;
        }
    }

    menuCards.forEach(card => {
        const minusBtn = card.querySelector('.c-quantity-btn--minus');
        const plusBtn = card.querySelector('.c-quantity-btn--plus');
        const quantityValue = card.querySelector('.c-quantity-value');
        const totalPrice = card.querySelector('.c-menu-card__total');
        const priceElement = card.querySelector('.c-menu-card__price');
        const unitPrice = parseInt(priceElement.getAttribute('data-price'));

        let quantity = 0;

        // プラスボタン
        plusBtn.addEventListener('click', function() {
            quantity++;
            quantityValue.textContent = quantity;
            updateTotal();
            updateGrandTotal();
        });

        // マイナスボタン
        minusBtn.addEventListener('click', function() {
            if (quantity > 0) {
                quantity--;
                quantityValue.textContent = quantity;
                updateTotal();
                updateGrandTotal();
            }
        });

        // 合計金額を更新
        function updateTotal() {
            const total = unitPrice * quantity;
            totalPrice.textContent = `¥${total.toLocaleString()}`;
        }
    });

    // リセットボタン
    if (resetButton) {
        resetButton.addEventListener('click', function() {
            menuCards.forEach(card => {
                const quantityValue = card.querySelector('.c-quantity-value');
                const totalPrice = card.querySelector('.c-menu-card__total');
                quantityValue.textContent = '0';
                totalPrice.textContent = '¥0';
            });
            updateGrandTotal();
        });
    }

    // 注文合計エリアのスクロール表示制御
    const orderSummary = document.querySelector('.c-order-summary');
    const recommendedSection = document.querySelector('#recommended');

    if (orderSummary && recommendedSection) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        // おすすめセクションの監視
        const recommendedObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    orderSummary.classList.add('c-order-summary--visible');
                }
            });
        }, observerOptions);

        recommendedObserver.observe(recommendedSection);
    }
});
