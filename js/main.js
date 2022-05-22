const loader = $('.loader');

const loadingPage = () => {

    $(window).on('load', (evt) => {

        if (loader !== null) {
            loader.addClass('hidden');
        }

    });

};

loadingPage();