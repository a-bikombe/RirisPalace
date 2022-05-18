const deleteBtn = $('#delete-account');
let confirmDeleteForm = $('#delete-form');

deleteBtn.addEventListener('click', function (evt) {
	confirmDeleteForm.classList.remove('hidden');
});