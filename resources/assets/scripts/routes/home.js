import Swiper, {Navigation, Pagination} from 'swiper/swiper-bundle.min'

Swiper.use([Navigation, Pagination])

export default {
    init() {
        new Swiper('.sets-items', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            spaceBetween: 30,
            slidesPerView: 4,
            breakpoints: {
                320 : {
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

        new Swiper('.image-slider', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
        });

        new Swiper('.banner', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 1,
        });
    },
    finalize() {
        //
    },
};
