import Swiper from 'swiper/swiper-bundle.min'
import accordion from '../accordion';

export default {
    init() {
        accordion(document.getElementsByClassName('accordion__header'))
        accordion(document.getElementsByClassName('catalog-filter-select__header'), '.catalog-filter-select__content', 'catalog-filter__item--active', false)
        
        new Swiper('.may-need__slider', {
            navigation: {
                nextEl: '.may-need__next',
                prevEl: '.may-need__prev',
            },
            slidesPerView: 2,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
            },
        });
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
        if (window.innerWidth >= 1000) {
            const $cap = document.querySelector('.cap')
            
            $cap && window.addEventListener('scroll', () => {
                if (window.scrollY >= 1) {
                    $cap.classList.add('cap--fixed')
                } else {
                    $cap.classList.remove('cap--fixed')
                }
            })
        } else {
            const $hamburger = document.querySelector('.cap__hamburger'),
                $nav = document.querySelector('.cap__nav')
            
            if ($hamburger && $nav) {
                $hamburger.addEventListener('click', (e) => {
                    e.preventDefault()
                    $hamburger.classList.toggle('hamburger--show')
                    $nav.classList.toggle('cap__nav--show')
                })
            }
        }
        
        const $navEl = document.querySelectorAll('.nav__li')
        console.log($navEl)
        
        $navEl.forEach($el => {
            const $content = $el.querySelector('.nav__content')
            
            if ($content) {
                const $close = $el.querySelector('.nav__close')
                const $link = $el.querySelector('.nav__link')
                
                $link && $link.addEventListener('click', (e) => {
                    e.preventDefault()
                    e.stopPropagation()
                    
                    if (!$el.classList.contains('nav__li--toggle')) {
                        $navEl.forEach(($nav) => {
                            $nav.classList.remove('nav__li--toggle')
                        })
                        
                        $el.classList.add('nav__li--toggle')
                    } else {
                        $el.classList.remove('nav__li--toggle')
                    }
                })
                
                $close && $close.addEventListener('click', (e) => {
                    e.preventDefault()
                    e.stopPropagation()
                    
                    $el.classList.remove('nav__li--toggle')
                })
            }
        })
    },
}
