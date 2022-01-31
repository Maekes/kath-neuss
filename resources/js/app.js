// Navigation toggle
window.addEventListener('load', function () {
    [...document.getElementsByClassName('menu-item-has-children')].forEach(
        (element) => {
            element.children[1].classList.add('hidden');
            element.addEventListener('click', () =>
                [...element.getElementsByClassName('sub-menu')].forEach(
                    (subElement) => {
                        subElement.classList.toggle('hidden');
                    }
                )
            );
        }
    );
});
