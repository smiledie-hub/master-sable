import Swiper from 'swiper/swiper-bundle.min'
import IMask from 'imask';
import accordion from '../accordion';

export default {
    init() {
        const phones = document.querySelectorAll('.phone-mask')
        
        const lang = document.querySelector('html').getAttribute('lang')
        const mask = lang === 'ru-RU' ? '+{7} (000) 000-00-00' : '(000) 000-0000';
        
        for (let i = 0; i < phones.length; i++) {
            // eslint-disable-next-line
            IMask(phones[i], { mask: mask, lazy: true,});
        }
        
        const $modals = document.querySelectorAll('.modal')
        const $modalBtns = document.querySelectorAll('.modal-open')
        $modals.forEach($modal => {
            const $closes = $modal.querySelectorAll('.modal__close')
            $closes.forEach($close => {
                $close.addEventListener('click', (e) => {
                    e.preventDefault()
                    e.stopPropagation()
                    
                    $modal.classList.remove('modal--active')
                    document.body.classList.remove('no-scroll')
                })
            })
        })
        $modalBtns.forEach($btn => {
            const target = $btn.getAttribute('data-modal')
            
            target && $btn.addEventListener('click', (e) => {
                e.preventDefault()
                e.stopPropagation()
                
                const $modal = document.getElementById(target)
                if ($modal) {
                    $modal.classList.add('modal--active')
                    document.body.classList.add('no-scroll')
                }
            })
        })
        
        
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
        
        $navEl.forEach($el => {
            const $content = $el.querySelector('.nav__content')
            
            if ($content) {
                const $close = $el.querySelector('.nav__close')
                const $link = $el.querySelector('.nav__link')
                const $cap = document.querySelector('.cap')
                
                $link && $link.addEventListener('click', (e) => {
                    e.preventDefault()
                    e.stopPropagation()
                    
                    if (!$el.classList.contains('nav__li--toggle')) {
                        $navEl.forEach(($nav) => {
                            $nav.classList.remove('nav__li--toggle')
                        })
                        
                        $cap.classList.add('cap--active')
                        $el.classList.add('nav__li--toggle')
                    } else {
                        $cap.classList.remove('cap--active')
                        $el.classList.remove('nav__li--toggle')
                    }
                })
                
                $close && $close.addEventListener('click', (e) => {
                    e.preventDefault()
                    e.stopPropagation()
                    $cap.classList.remove('cap--active')
                    $el.classList.remove('nav__li--toggle')
                })
            }
        })
    },
}
