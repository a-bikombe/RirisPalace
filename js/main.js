// VARIABLE DECLARATIONS
const loader = document.querySelector('.loader');

// FUNCTION DECLARATIONS

window.addEventListener('load', function (evt) {
	if (loader !== null) {
		loader.classList.add('hidden');
	}
});