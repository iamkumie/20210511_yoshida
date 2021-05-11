const target = document.getElementById("menu");
const menuList = document.getElementById("header__nav--sp");

target.addEventListener('click', () => {
    target.classList.toggle('open');
    menuList.classList.toggle('open-nav');
});