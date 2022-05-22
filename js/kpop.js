const groups = $('.group');
const modalButtons = $('[data-bs-toggle="modal"]');

const lazyloadModalImages = () => {

    modalButtons.each(() => {

        $(this).click((evt) => {

            console.log(evt.target);

            let modal = $(this).next();

            modal.show();

            let modalImage = modal.find(".modal-img");
            let dataSrc = modalImage.attr('data-src');

            if (modalImage !== null && dataSrc !== null) {
                modalImage.attr('src', dataSrc);
                modalImage.removeAttr('data-src');
            }

        });

    });

};

lazyloadModalImages();

/* FIXME: modal does not open when you can hide group info */
/* function toggleGroupInfo() {

    groups.each(function() {

        let groupInfo = $(this).find('.group-info');

        groupInfo.hide();

        $(this).click(function(evt) {
            groupInfo.toggle();
        });

    });

} toggleGroupInfo(); */

/* TODO: kpop search bar for groups! */
/* function searchBarKpop() {

    let searchBar = $('#searchbar');
    let searchOutput = $('#searchOutput');

    searchBar.addEventListener('input', function(evt) {
        searchOutput.textContent = searchBar.value;
    });

} searchBarKpop(); */

/* TODO: group reordering! */
/* function reorderGroups() {

    const groupCategories = $('.group-category');

    // for group reordering
    groupCategories.forEach(groupCategory => {
        let indexes = groupCategory.querySelectorAll('.index');

        indexes.forEach(index => {
            index.click(function(evt) {});
        });
    });

} reorderGroups(); */