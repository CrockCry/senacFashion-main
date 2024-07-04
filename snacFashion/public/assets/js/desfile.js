document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('main-header');
    const banner = document.querySelector('.banner');
    const bannerHeight = banner.offsetHeight;

    window.addEventListener('scroll', function () {
        if (window.scrollY > bannerHeight) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
