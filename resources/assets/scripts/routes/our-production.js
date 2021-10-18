import Swiper, {Navigation} from 'swiper/swiper-bundle.min'

Swiper.use([Navigation])

export default {
    init() {
        new Swiper('.pallette-block__slider', {
            navigation: {
                nextEl: '.pallette-block__next',
                prevEl: '.pallette-block__prev',
            },
            spaceBetween: 62,
            slidesPerView: 3,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                767: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });
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
                0: {
                    slidesPerView: 1,
                },
                1000: {
                    slidesPerView: 2,
                },
            },
        });

        const $colors = document.querySelectorAll('.pallette-block__color')
        const $sliders = document.querySelectorAll('.pallette-block__items')

        const clickEvent = function (e) {
            e.preventDefault()

            const $current = e.currentTarget
            const target = $current.getAttribute('data-target')
            const $el = document.getElementById(target)

            if ($el) {
                $sliders.forEach($slider => {
                    if ($slider.classList.contains('pallette-block__items--select')) {
                        $slider.classList.remove('pallette-block__items--select')
                    }
                })
                $colors.forEach($city => {
                    if ($city.classList.contains('pallette-block__color--select')) {
                        $city.classList.remove('pallette-block__color--select')
                    }
                })

                $current.classList.add('pallette-block__color--select')
                $el.classList.add('pallette-block__items--select')
            }
        }

        $colors.forEach(($color) => $color.addEventListener('click', clickEvent))
    },
};
