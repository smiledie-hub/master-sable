export default {
    init() {
        const $cities = document.querySelectorAll('.city-list__item')
        const $partners = document.querySelectorAll('.partners-items')

        const clickEvent = function (e) {
            e.preventDefault()

            const $current = e.currentTarget
            const target = $current.getAttribute('data-target')
            const $el = document.getElementById(target)

            if ($el) {
                $partners.forEach($partner => {
                    if ($partner.classList.contains('partners-items--select')) {
                        $partner.classList.remove('partners-items--select')
                    }
                })
                $cities.forEach($city => {
                    if ($city.classList.contains('city-list__item--select')) {
                        $city.classList.remove('city-list__item--select')
                    }
                })

                $current.classList.add('city-list__item--select')
                $el.classList.add('partners-items--select')
            }
        }

        $cities.forEach(($city) => $city.addEventListener('click', clickEvent))
    },
};
