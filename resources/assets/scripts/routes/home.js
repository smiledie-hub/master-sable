import Swiper, {Navigation, Pagination} from 'swiper/swiper-bundle.min'

Swiper.use([Navigation, Pagination])

export default {
    init() {
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
