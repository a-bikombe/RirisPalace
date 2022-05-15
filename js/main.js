// VARIABLE DECLARATIONS
const loader = document.querySelector('.loader');

// FUNCTION DECLARATIONS

window.addEventListener('load', function (evt) {
	if (loader !== null) {
		loader.classList.add('hidden');
	}
});

let toggleButton = document.getElementById('navbar-toggler');
let toggleContent = document.getElementById('navbar-supported-content');

toggleButton.addEventListener('click', function (evt) {
	if (toggleContent.classList.contains('show')) {
		toggleContent.classList.remove('show');
	} else {
		toggleContent.classList.add('show');
	}
	
});