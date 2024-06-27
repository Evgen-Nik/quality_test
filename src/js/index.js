require('es6-promise').polyfill();
import 'nodelist-foreach-polyfill';

import burger from './modules/burger';
import activeElement from './modules/activeElement';
import modal from './modules/modal';
import { openModal } from './modules/modal';
import slider from './modules/slider';

window.addEventListener('DOMContentLoaded', () => {

    burger();
    activeElement('header__item', '.header__item');
    activeElement('cards__item', '.cards__item');

    const modalTimerID = setTimeout(() => openModal('.modal', modalTimerID), 60000);
    modal('[data-modal=modal]', '.modal', modalTimerID);

    slider({
        slide: '.slider__slide',
        prevArrow: '.slider__arrow_prev',
        nextArrow: '.slider__arrow_next',
        wrapper: '.slider__window',
        field: '.slider__inner'
    });
});