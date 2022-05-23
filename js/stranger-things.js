const s4Vol1 = new Date(2022, 04, 27);
const s4Vol2 = new Date(2022, 06, 01);
const currentDate = new Date();
const oneDay = 1000 * 60 * 60 * 24;

function s4Vol1Countdown() {

    let s4Vol1CountdownBlock = document.getElementById('s4-vol1-countdown');
    let daysUntilS4Vol1 = document.getElementById('days-until-s4-vol1');

    if (currentDate < s4Vol1) {
        s4Vol1CountdownBlock.classList.remove('hidden');
        let days = (s4Vol1 - currentDate) / oneDay;
        daysUntilS4Vol1.textContent = parseInt(days);
    }

}

function s4Vol2Countdown() {

    let s4Vol2CountdownBlock = document.getElementById('s4-vol2-countdown');
    let daysUntilS4Vol2 = document.getElementById('days-until-s4-vol2');

    if (currentDate >= s4Vol1 && currentDate < s4Vol2) {
        s4Vol2CountdownBlock.classList.remove('hidden');
        let days = (s4Vol2 - currentDate) / oneDay;
        daysUntilS4Vol2.textContent = parseInt(days);
    }

}

// sourced from https://css-tricks.com/the-complete-guide-to-lazy-loading-images/
function lazyloadCarousels() {

    document.addEventListener('DOMContentLoaded', () => {
        const lazyloadImages = document.querySelectorAll("img[data-src]");
        let lazyloadThrottleTimeout;

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(() => {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        window.addEventListener('load', lazyload);
        document.addEventListener('scroll', lazyload);
        window.addEventListener('resize', lazyload);
        window.addEventListener('orientationChange', lazyload);
    });

}

function collapsibleSidebar() {
    const collapseBtn = document.querySelector('.collapsible-nav-btn');
    let sidebarNav = document.querySelector('.st-sections');

    collapseBtn.addEventListener('click', (e) => {
        
        sidebarNav.classList.toggle('unhidden');

        let icons = collapseBtn.querySelectorAll('[class*="collapse-icon"]');
        icons.forEach(icon => {
            icon.classList.toggle('hidden');
        });

    });
    
}

s4Vol1Countdown();
s4Vol2Countdown();
lazyloadCarousels();
collapsibleSidebar();