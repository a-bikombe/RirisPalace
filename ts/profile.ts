const deleteBtn = <HTMLInputElement>document.getElementById('delete-account');
let confirmDeleteForm = <HTMLInputElement>document.getElementById('delete-form');

function showDeleteForm() {

    deleteBtn.addEventListener('click', (e) => {

        confirmDeleteForm.classList.remove('hidden');

    });

}

showDeleteForm();