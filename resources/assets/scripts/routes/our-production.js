import Swiper, {Navigation} from 'swiper/swiper-bundle.min'

Swiper.use([Navigation])

export default {
    init() {
        new Swiper('.certificates-slider', {
            navigation: {
                nextEl: '.certificates-slider__next',
                prevEl: '.certificates-slider__prev',
            },
            spaceBetween: 80,
            slidesPerView: 1,
            autoHeight: true,
        });

        new Swiper('.reviews-slider__container', {
            navigation: {
                nextEl: '.reviews-slider__next',
                prevEl: '.reviews-slider__prev',
            },
            spaceBetween: 152,
            slidesPerView: 2,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                1000: {
                    slidesPerView: 2,
                },
            },
        });
    },
};
