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
}

export default burger;