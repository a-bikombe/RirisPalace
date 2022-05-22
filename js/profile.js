const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

function showDeleteForm() {

    deleteBtn.click((e) => {

        confirmDeleteForm.show();

    });

}

showDeleteForm();