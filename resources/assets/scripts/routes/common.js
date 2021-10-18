import Swiper from 'swiper/swiper-bundle.min'
import accordion from '../accordion';

export default {
    init() {
        accordion()
        new Swiper('.image-slider', {
            navigation: {
                nextEl: '.offer__next',
                prevEl: '.offer__prev',
            },
            slidesPerView: 1,
        });
        new Swiper('.sets-items', {
            navigation: {
                nextEl: '.sets__next',
                prevEl: '.sets__prev',
            },
            spaceBetween: 30,
            slidesPerView: 4,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 4,
                },
            },
        });
    },
    finalize() {

    },
}
