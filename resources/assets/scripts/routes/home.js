import Swiper, {Navigation, Pagination} from 'swiper/swiper-bundle.min'

Swiper.use([Navigation, Pagination])

export default {
    init() {
        new Swiper('.sets-items', {
            navigation: {
                nextEl: '.sets__next',
                prevEl: '.sets__prev',
            },
            spaceBetween: 30,
            slidesPerView: 4,
            breakpoints: {
                320: {
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

        new Swiper('.banner', {
            navigation: {
                nextEl: '.banner__next',
                prevEl: '.banner__prev',
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
}
