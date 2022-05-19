const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

deleteBtn.click(function (evt) {
	confirmDeleteForm.show();
});