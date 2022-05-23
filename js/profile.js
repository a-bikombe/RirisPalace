const deleteBtn = document.getElementById('delete-account');
let confirmDeleteForm = document.getElementById('delete-form');

function showDeleteForm() {

    deleteBtn.addEventListener('click', (e) => {

        confirmDeleteForm.classList.remove('hidden');

    });

}

showDeleteForm();