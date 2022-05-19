// VARIABLE DECLARATIONS
const loader = $('.loader');

// FUNCTION DECLARATIONS

$(window).on('load', function (evt) {
    if (loader !== null) {
        loader.hide();
    }
});