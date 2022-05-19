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

function toggleGroupProperties() {

    groups.each((index, group) => {

        let groupProperties = group.$('.group-property');
    
        groupProperties.each((index, groupProperty) => {
            groupProperty.hide();
        });
    
        group.click(function(evt) {
            groupProperties.each((index, groupProperty) => {
                groupProperty.toggle();
            });
        });
    
    });

}

toggleGroupProperties();


/* 
groups.forEach(group => {
    let groupProperties = group.querySelectorAll('.group-property');
    groupProperties.forEach(groupProperty => {
        groupProperty.addClass('hidden');
    });
    group.click(function (evt) {
        groupProperties.forEach(groupProperty => {
            groupProperty.toggleClass("hidden");
        });
    });
}); */

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
