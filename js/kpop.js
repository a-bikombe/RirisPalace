/* let searchBar = $('#searchbar');
let searchOutput = $('#searchOutput');
searchBar.addEventListener('input', function (evt) {
	searchOutput.textContent = searchBar.value;
}); */
/* let modalTitles = document.querySelectorAll(".member-title");
modalTitles.forEach(modalTitle => {
    modalTitle.addEventListener('click', function (evt) {
        modalTitle.classList.add('hidden');
		modalTitle.nextElementSibling.classList.remove('hidden');
    });
}); */

const groups = $('.group');
const modalButtons = $('[data-bs-toggle="modal"]');

function toggleGroupInfo() {

    groups.each(function() {

        let groupInfo = $(this).find('.group-info');

        groupInfo.hide();

        $(this).click(function(evt) {
            groupInfo.toggle();
        });

    });

}

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

function lazyloadModalImages() {

    modalButtons.each(function() {

        groupInfo.show();

        $(this).click(function(evt) {

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

}

toggleGroupInfo();
lazyloadModalImages();


/* 
modalButtons.forEach(modalButton => {
    modalButton.addEventListener('click', function(evt) {

        modal = modalButton.nextElementSibling;
        let modalImage = modal.$(".modal-img");
        if (modalImage !== null && modalImage.getAttribute('data-src') !== null) {
            modalImage.setAttribute('src', modalImage.getAttribute('data-src'));
            modalImage.removeAttribute('data-src');
        }
    });
}); */