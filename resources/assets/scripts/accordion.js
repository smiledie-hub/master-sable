export default function (accordionLinks, content__selector = '.accordion__content', active__modify = 'accordion--active', disableActive = true) {

    const checkAccordion = (e) => {
        e.preventDefault()
        const target = e.currentTarget
        const parent = target.parentElement
        const content = parent.querySelector(content__selector)

        if (!parent.classList.contains(active__modify)) {
            if (disableActive) {
                for (let i = 0; i < accordionLinks.length; i++) {
                    const link = accordionLinks[i]
                    const linkParent = link.parentElement

                    if (linkParent.classList.contains(active__modify)) {
                        linkParent.querySelector(content__selector).style.maxHeight = '0px'
                        linkParent.classList.remove(active__modify)
                    }
                }
            }

            parent.classList.add(active__modify)
            content.style.maxHeight = content.scrollHeight + 'px'
        } else {
            parent.classList.remove(active__modify)
            content.style.maxHeight = '0px'
        }
    }

    for (let i = 0; i < accordionLinks.length; i++) {
        accordionLinks[i].addEventListener('click', checkAccordion)
    }
}
