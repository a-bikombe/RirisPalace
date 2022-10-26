const groups: NodeListOf<Element> = document?.querySelectorAll(".group");
const modalButtons: NodeListOf<Element> = document?.querySelectorAll('[data-bs-toggle="modal"]');

function lazyloadModalImages(): void {
    modalButtons.forEach((modalButton) => {
        modalButton.addEventListener("click", (e) => {
            let modal = modalButton?.nextElementSibling;
            if (modal !== null) {
                let modalImage = modal?.querySelector(".modal-img");
                let dataSrc = modalImage?.getAttribute("data-src");

                if (modalImage !== null && dataSrc !== null && dataSrc !== undefined) {
                    modalImage.setAttribute("src", dataSrc);
                    modalImage.removeAttribute("data-src");
                }
            }
        });
    });
}

lazyloadModalImages();

/* TODO: modal does not open when you can hide group info */
/* function toggleGroupInfo() {

    groups.forEach(group => {

        let groupInfo = group.querySelector('.group-info');

        groupInfo.classList.add('hidden');

        group.addEventListener('click', (evt) => {
            groupInfo.classList.toggle('hidden');
        });

    });

} toggleGroupInfo(); */

/* TODO: kpop search bar for groups! */
/* function searchBarKpop() {

    let searchBar = document.getElementById('searchbar');
    let searchOutput = document.getElementById('searchOutput');

    searchBar.addEventListener('input', function(evt) {
        searchOutput.textContent = searchBar.value;
    });

} searchBarKpop(); */

/* TODO: group reordering! */
/* function reorderGroups() {

    const groupCategories = document.querySelectorAll('.group-category');

    // for group reordering
    groupCategories.forEach(groupCategory => {
        let indexes = groupCategory.querySelectorAll('.index');

        indexes.forEach(index => {
            index.addEventListener('click', (evt) => {});
        });
    });

} reorderGroups(); */
