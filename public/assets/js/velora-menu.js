(function () {
    var hamburger = document.getElementById('veloraHamburger');
    var menu      = document.getElementById('veloraMobileMenu');
    var closeBtn  = document.getElementById('veloraMobileClose');

    function openMenu() {
        menu.classList.add('is-open');
        hamburger.classList.add('is-active');
        document.body.style.overflow = 'hidden';
    }
    function closeMenu() {
        menu.classList.remove('is-open');
        hamburger.classList.remove('is-active');
        document.body.style.overflow = '';
    }

    hamburger.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);

    // Close when any menu link is tapped
    menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });
})();
