// VARIABLE DECLARATIONS
const loader = $('.loader');

// FUNCTION DECLARATIONS

function loadingPage() {

    $(window).on('load', function (evt) {
        if (loader !== null) {
            loader.addClass('hidden');
        }
    });

}

loadingPage();