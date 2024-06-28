function burger() {
    const menu = document.querySelector('.header__menu'),
          link = document.querySelectorAll('.header__menu-item'),
          burger = document.querySelector('.header__burger');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
    });

    link.forEach(item => {
        item.addEventListener('click', () => {
            burger.classList.toggle('active');
            menu.classList.toggle('active');
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.code === "Escape" && burger.classList.contains('active') && menu.classList.contains('active')) {
                burger.classList.remove('active');
                menu.classList.remove('active');
        }
    });

    document.addEventListener('click', (e) => {
        if (!menu.contains(e.target) && !burger.contains(e.target)) {
                burger.classList.remove('active');
                menu.classList.remove('active');
        }
    });
}

export default burger;