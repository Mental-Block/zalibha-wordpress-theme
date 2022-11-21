const EVENT = {
    click: 'click',
    DOMcontentLoaded: 'DOMContentLoaded',
}

document.addEventListener(EVENT.DOMcontentLoaded, (e) => {
    const menuIcon = document.getElementById('menuIcon');
    const navMenu = document.getElementById('navMenu');
    const menuHasChildren = [...document.querySelectorAll('menu-item-has-children')];
    
    const menuShow = 'menu__show';
    const menuHidden = 'menu__hidden';

    menuIcon.addEventListener(EVENT.click, (e) => {
        e.preventDefault();

        if(navMenu.classList.contains(menuShow)){ 
            menuIcon.setAttribute('aria-expanded', 'true');
            navMenu.classList.add(menuHidden);
            navMenu.classList.remove(menuShow);
        } 
        else {
            menuIcon.setAttribute('aria-expanded', 'false');
            navMenu.classList.add(menuShow);
            navMenu.classList.remove(menuHidden);
        }
    });

    menuHasChildren.map((childMenu) => {
        childMenu.addEventListener('', (e) => {
            e.preventDefault();
            childMenu.setAttribute('aria-expanded', 'false');
            

            // if() isTabed //open else false
        })




    })


})

