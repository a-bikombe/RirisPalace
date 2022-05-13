/* let searchBar = document.getElementById('searchbar');
let searchOutput = document.getElementById('searchOutput');

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

let groups = document.querySelectorAll('.group');
let groupCategories = document.querySelectorAll('.group-category');


groups.forEach(group => {
    let groupProperties = group.querySelectorAll('.group-property');
    groupProperties.forEach(groupProperty => {
        groupProperty.classList.add('hidden');
    });
    group.addEventListener('click', function (evt) {
        groupProperties.forEach(groupProperty => {
            groupProperty.classList.toggle('hidden');
        });
    });
});

// for group reordering
groupCategories.forEach(groupCategory => {
    let indexes = groupCategory.querySelectorAll('.index');

    indexes.forEach(index => {
        index.addEventListener('click', function (evt) {});
    });
});

let modalButtons = document.querySelectorAll('[data-bs-toggle="modal"]');

modalButtons.forEach(modalButton => {
    modalButton.addEventListener('click', function (evt) {
        modal = modalButton.nextElementSibling;
        let modalImage = modal.querySelector(".modal-img");
        if (modalImage !== null && modalImage.getAttribute('data-src') !== null) {
            modalImage.setAttribute('src', modalImage.getAttribute('data-src'));
            modalImage.removeAttribute('data-src');
        }
    });
});