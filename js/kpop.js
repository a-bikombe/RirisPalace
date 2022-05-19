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

const groups = document.querySelectorAll('.group');
/* 
groups.forEach(group => {

    let groupInfo = group.querySelector('.group-info');

    groupInfo.classList.add('hidden');

    group.click(function(evt) {
        groupInfo.classList.toggle('hidden');
    });

});
 */
groups.forEach(group => {
    let groupProperties = group.querySelectorAll('.group-property');
    groupProperties.forEach(groupProperty => {
        $(this).addClass("hidden");
    });
    group.click(function (evt) {
        groupProperties.forEach(groupProperty => {
            $(this).toggleClass("hidden");
        });
    });
});


/* 

const groupCategories = $('.group-category');

// for group reordering
groupCategories.forEach(groupCategory => {
    let indexes = groupCategory.querySelectorAll('.index');

    indexes.forEach(index => {
        index.click(function(evt) {});
    });
});

const modalButtons = document.querySelectorAll('[data-bs-toggle="modal"]');

modalButtons.forEach(modalButton => {
    modalButton.addEventListener('click', function(evt) {
        modal = modalButton.nextElementSibling;
        let modalImage = modal.$(".modal-img");
        if (modalImage !== null && modalImage.getAttribute('data-src') !== null) {
            modalImage.setAttribute('src', modalImage.getAttribute('data-src'));
            modalImage.removeAttr('data-src');
        }
    });
});
 */