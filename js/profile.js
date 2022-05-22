const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

const showDeleteForm = () => {

    deleteBtn.click((evt) => {

        confirmDeleteForm.show();

    });

};

showDeleteForm();