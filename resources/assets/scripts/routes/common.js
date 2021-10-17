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
    },
    finalize() {

    },
}
