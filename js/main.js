const loader = $('.loader');

function loadingPage() {

    $(window).on('load', function(evt) {

        if (loader !== null) {
            loader.addClass('hidden');
        }

    });

}

loadingPage();