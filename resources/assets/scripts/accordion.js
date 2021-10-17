export default function () {
    const accordionLinks = document.getElementsByClassName('accordion__header');

    const checkAccordion = (e) => {
        e.preventDefault()
        const target = e.currentTarget
        const parent = target.parentElement
        const content = parent.querySelector('.accordion__content')

        for (let i = 0; i < accordionLinks.length; i++) {
            const link = accordionLinks[i]
            const linkParent = link.parentElement

            if (linkParent.classList.contains('accordion--active')) {
                linkParent.querySelector('.accordion__content').style.maxHeight = '0px'
                linkParent.classList.remove('accordion--active')
            }
        }

        parent.classList.add('accordion--active')
        content.style.maxHeight = content.scrollHeight + 'px'
    }

    for (let i = 0; i < accordionLinks.length; i++) {
        accordionLinks[i].addEventListener('click', checkAccordion)
    }
}
