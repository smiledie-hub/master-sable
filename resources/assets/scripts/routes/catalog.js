import Isotope from 'isotope-layout'

export default {
    init() {
        const filterBtn = document.querySelector('.catalog-filter__title')
        filterBtn && filterBtn.addEventListener('click', function (e) {
            e.preventDefault()
            const filterContainer = document.querySelector('.catalog-filter')

            if(filterContainer) {
                filterBtn.classList.toggle('catalog-filter__title--show')
                filterContainer.classList.toggle('catalog-filter--show')
            }
        })


        const search = location.search.substring(1);
        const params = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') + '"}')
        let type = params.type ? `.${params.type}` : '.fur_kits'
        let subtype = params.subtype ? `.${params.subtype}` : '.sable'

        let countsAll = $('.catalog-products__items > .catalog-item:visible').length
        let currentSize = 8
        let page = 1
        let counts = page * currentSize
        let all = countsAll - counts

        const iso = new Isotope('.catalog-products__items', {
            itemSelector: '.catalog-item',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                gutter: 30,
            },
        });

        const showByBtn = document.querySelectorAll('.show-by__link')
        const btn_number = document.querySelector('.btn__number')
        const show_more = document.getElementById('show_more')

        function getViewsitems() {
            if (currentSize === 'all') {
                return -1
            } else {
                return counts
            }
        }

        function pageNext() {
            page++
            counts = page * currentSize
            countsAll = $('.catalog-products__items > .catalog-item:visible').length

            applyFilter()
        }

        function updateProducts() {
            if (currentSize === 'all') {
                show_more.style.display = 'none'
            } else {
                if (counts <= all) {
                    show_more.style.display = 'block'
                } else {
                    show_more.style.display = 'none'
                }
            }
        }

        function concatValues(obj) {
            let value = ''
            for (let prop in obj) {
                if (obj[prop] instanceof Array) {
                    value += obj[prop].map(item => {
                        return type + subtype + item
                    })
                } else {
                    value += obj[prop]
                }
            }
            return value
        }

        function applyFilter(filter = {}) {
            let filters = {
                type: type,
                subtype: subtype,
                ...filter,
            }

            console.log(filters)
            console.log(concatValues(filters))
            all = $(concatValues(filters)).length

            iso.arrange({
                filter: function () {
                    const filterValue = concatValues(filters)
                    const limit = getViewsitems()

                    if (limit < 0) {
                        return $(this).is(filterValue)
                    } else
                        return $(this).is(filterValue) && $(this).index(filterValue) < limit;
                },
            })

            updateProducts()
        }

        show_more.addEventListener('click', function (e) {
            e.preventDefault()
            pageNext()
        })

        for (let i = 0; i < showByBtn.length; i++) {
            const showByBtnElement = showByBtn[i]
            showByBtnElement.addEventListener('click', function (e) {
                e.preventDefault()
                const target = e.currentTarget
                const size = target.getAttribute('data-count')
                currentSize = size
                countsAll = $('.catalog-products__items > .catalog-item:visible').length
                counts = page * currentSize

                for (let i = 0; i < showByBtn.length; i++) {
                    showByBtn[i].classList.remove('show-by__link--select')
                }

                target.classList.add('show-by__link--select')

                if (size === 'all') {
                    show_more.style.display = 'none'
                } else {
                    if (all < countsAll) {
                        show_more.style.display = 'block'
                    } else {
                        show_more.style.display = 'none'
                    }

                    btn_number.innerHTML = currentSize.toString()
                }

                applyFilter()
            })
        }

        /* Группы фильтров */
        const filterGroup = document.querySelectorAll('.filter-group')
        for (let i = 0; i < filterGroup.length; i++) {
            let arrCheckboxesGroup = []
            const groupName = filterGroup[i].getAttribute('data-filter-block')
            const itemsCheckbox = filterGroup[i].querySelectorAll('.filter-group__item[type="checkbox"]')
            const clear = filterGroup[i].querySelector('.filter-group__clear')

            clear.addEventListener('click', (e) => {
                e.preventDefault()

                arrCheckboxesGroup = []
                for (let j = 0; j < itemsCheckbox.length; j++) {
                    itemsCheckbox[j].checked = false
                }

                filterGroup[i].classList.remove('catalog-filter__item--no-empty')

                applyFilter({
                    [groupName]: arrCheckboxesGroup,
                })
            })

            for (let j = 0; j < itemsCheckbox.length; j++) {
                itemsCheckbox[j].addEventListener('change', (e) => {
                    const target = e.currentTarget
                    const name = target.getAttribute('name')

                    if (target.checked) {
                        if (!arrCheckboxesGroup.find(str => (str === name))) {
                            arrCheckboxesGroup.push(name)
                        }
                    } else {
                        for (let k = 0; k < arrCheckboxesGroup.length; k++) {
                            if (arrCheckboxesGroup[k] === name) {
                                arrCheckboxesGroup.splice(k, 1)
                            }
                        }
                    }

                    if (arrCheckboxesGroup.length > 0) {
                        filterGroup[i].classList.add('catalog-filter__item--no-empty')
                    } else {
                        filterGroup[i].classList.remove('catalog-filter__item--no-empty')
                    }

                    applyFilter({
                        [groupName]: arrCheckboxesGroup,
                    })
                })
            }
        }

        const typeFilter = document.querySelectorAll('.custom-radio__input--type')
        for (let i = 0; i < typeFilter.length; i++) {
            const furEl = typeFilter[i]

            furEl.addEventListener('change', (e) => {
                const target = e.currentTarget
                subtype = target.value

                applyFilter()
            })
        }


        applyFilter()
    },
};
