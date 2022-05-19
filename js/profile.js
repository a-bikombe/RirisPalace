const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

function showDeleteForm() {

    deleteBtn.click(function(evt) {
        confirmDeleteForm.show();
    });

}

showDeleteForm();