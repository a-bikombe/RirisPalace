const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

function showDeleteForm() {

    deleteBtn.click((evt) => {

        confirmDeleteForm.show();

    });

}

showDeleteForm();