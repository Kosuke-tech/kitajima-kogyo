'use strict';

// ローディングアニメーション(ローディング)
const loadingScaleGrey = document.querySelector('#loading');
const loadingScaleBlue = document.querySelector('#loading__screen');
const loadingText = document.querySelector('#loading__text');

window.addEventListener('load', function () {
    loadingScaleGrey.animate(
        {
            opacity: [1, 0],
            visibility: 'hidden',
        },
        {
            duration: 2000,
            delay: 1200,
            easing: 'ease',
            fill: 'forwards',
        }
    );

    const loadingAnimation = loadingScaleBlue.animate(
        {
            translate: ['0 100vh', '0 0', '0 -100vh']
        },
        {
            duration: 2000,
            delay: 800,
            easing: 'ease',
            fill: 'forwards',
        }
    );

    loadingText.animate(
        [
            {
                opacity: 1,
                offset: 0.8
            },
            {
                opacity: 0,
                offset: 1
            },
        ],
        {
            duration: 1200,
            easing: 'ease',
            fill: 'forwards',
        }
    );

    //  ローディングアニメーションが終了したら shake を実行
    loadingAnimation.onfinish = function () {
        startShakeAnimations();
    };
});

//  // ローディングアニメーション(シェイク)
function startShakeAnimations() {
    // ロゴの shake
    let logo = document.getElementById("logoAnimation");
    let tel = document.getElementById("telAnimation");

    function shake(element, axis, magnitude) {
        let count = 0;
        let interval = setInterval(() => {
            let offset = (count % 2 === 0) ? magnitude : -magnitude;
            element.style.transform = `translate${axis}(${offset}px)`;

            count++;
            if (count > 10) {
                clearInterval(interval);
                element.style.transform = `translate${axis}(0)`;
            }
        }, 100);
    }

    if (window.location.pathname === "/") {
        if (logo) shake(logo, "X", 10); // ロゴの shake (X 軸)
        if (tel) shake(tel, "Y", 10);   // 電話番号の shake (Y 軸)
    }
}



// keyvisual swiper(PC：cube, SP：fade)
// 画面幅をチェック

const isMobile = window.innerWidth <= 575;

// Swiperの初期化
const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    speed: 5000,
    grabCursor: true,
    slidesPerView: 1,

//     // スマホかどうかでeffectを切り替える
    effect: isMobile ? 'fade' : 'cube',

//     // エフェクトごとのオプションも分岐
    ...(isMobile
        ? {
            fadeEffect: {
                crossFade: true,
            },
        }
        : {
            cubeEffect: {
                shadow: true,
                slideShadows: true,
            },
        }),

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



//   Intersection Observer
{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateX(0)';
                entry.target.style.transitionDelay = '0.3s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateX(-100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const businessImages = document.querySelectorAll('#business__img');

    businessImages.forEach(function (img) {
        observer.observe(img);
    });
}


//   Intersection Observer

{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateX(0)';
                entry.target.style.transitionDelay = '0.3s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateX(100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const businessImages = document.querySelectorAll('#member__img');

    businessImages.forEach(function (img) {
        observer.observe(img);
    });
}

//   Intersection Observer

{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateY(0)';
                entry.target.style.transitionDelay = '0.3s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateY(100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const businessImages = document.querySelectorAll('#recruit__img,#president__img');

    businessImages.forEach(function (img) {
        observer.observe(img);
    });
}


//   上に戻るボタン

window.addEventListener('scroll', function () {
    const scroll = this.window.scrollY;
    console.log(scroll);
    if (scroll > 2900) {
        document.getElementById('go__top').classList.add('visible');
    } else {
        document.getElementById('go__top').classList.remove('visible');

    }
});