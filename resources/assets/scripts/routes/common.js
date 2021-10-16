import Swiper from 'swiper/swiper-bundle.min'

export default {
    init() {
        new Swiper('.image-slider', {
            navigation: {
                nextEl: '.offer__next',
                prevEl: '.offer__prev',
            },
            slidesPerView: 1,
        });
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
}
