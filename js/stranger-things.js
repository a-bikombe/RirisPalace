const s4Vol1 = new Date(2022, 04, 27);
const s4Vol2 = new Date(2022, 06, 01);
const currentDate = new Date();
const oneDay = 1000 * 60 * 60 * 24;

function s4Vol1Countdown() {

    let s4Vol1CountdownBlock = $('#s4-vol1-countdown');
    let daysUntilS4Vol1 = $('#days-until-s4-vol1');

    s4Vol1CountdownBlock.addClass('hidden');

    if (currentDate < s4Vol1) {
        s4Vol1CountdownBlock.removeClass('hidden');
        let days = (s4Vol1 - currentDate) / oneDay;
        daysUntilS4Vol1.text(parseInt(days));
    }

}

function s4Vol2Countdown() {

    let s4Vol2CountdownBlock = $('#s4-vol2-countdown');
    let daysUntilS4Vol2 = $('#days-until-s4-vol2');

    s4Vol2CountdownBlock.addClass('hidden');

    if (currentDate >= s4Vol1 && currentDate < s4Vol2) {
        s4Vol2CountdownBlock.removeClass('hidden');
        let days = (s4Vol2 - currentDate) / oneDay;
        daysUntilS4Vol2.text(parseInt(days));
    }

}

// sourced from https://css-tricks.com/the-complete-guide-to-lazy-loading-images/
function lazyloadCarousels() {

    $(document).ready(() => {
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

        $(document).ready(lazyload);
        $(document).on("scroll", lazyload);
        $(window).on("resize", lazyload);
        $(window).on("orientationChange", lazyload);
    });

}

s4Vol1Countdown();
s4Vol2Countdown();
lazyloadCarousels();