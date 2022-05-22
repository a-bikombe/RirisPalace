const loader = $('.loader');

function loadingPage() {

    $(window).on('load', (e) => {

        if (loader !== null) {
            loader.addClass('hidden');
        }

    });

}

loadingPage();