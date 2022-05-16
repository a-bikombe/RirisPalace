const deleteBtn = document.getElementById('delete-account');
let confirmDeleteForm = document.getElementById('delete-form');

deleteBtn.addEventListener('click', function (evt) {
	confirmDeleteForm.classList.remove('hidden');
});