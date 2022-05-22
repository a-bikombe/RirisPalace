const loader = $('.loader');

function loadingPage() {

    $(window).on('load', (evt) => {

        if (loader !== null) {
            loader.addClass('hidden');
        }

    });

}

loadingPage();