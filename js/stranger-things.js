const s4Vol1 = new Date(2022, 04, 27);
const s4Vol2 = new Date(2022, 06, 01);
let currentDate = new Date();
const one_day = 1000 * 60 * 60 * 24;

function s4Vol1Countdown() {

    let s4Vol1CountdownBlock = $('#s4-vol1-countdown');
    let daysUntilS4Vol1 = $('#days-until-s4-vol1');

    if (currentDate < s4Vol1) {
        s4Vol1CountdownBlock.show();
        let days = (s4Vol1 - currentDate) / one_day;
        daysUntilS4Vol1.text(parseInt(days));
    }

}

function s4Vol2Countdown() {

    let s4Vol2CountdownBlock = $('#s4-vol2-countdown');
    let daysUntilS4Vol2 = $('#days-until-s4-vol2');

    if (currentDate >= s4Vol1 && currentDate < s4Vol2) {
        s4Vol2CountdownBlock.show();
        let days = (s4Vol2 - currentDate) / one_day;
        daysUntilS4Vol2.text(parseInt(days));
    }

}

function lazyloadCarousels() {

    $(document).ready(function() {
        const lazyloadImages = document.querySelectorAll("img[data-src]");
        let lazyloadThrottleTimeout;

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
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

        $(document).on("scroll", lazyload);
        $(window).on("resize", lazyload);
        $(window).on("orientationChange", lazyload);
    });

}

s4Vol1Countdown();
s4Vol2Countdown();
lazyloadCarousels();