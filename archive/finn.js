let allThumbnails = document.querySelectorAll(".img-thumbnail"); // all thumbnail buttons
let originalModal = document.getElementById("img-original");
allThumbnails.forEach(item => {
    let itm = item; // thumbnail
    itm.addEventListener('click', function (evt) {
        let srcPath = itm.getAttribute('src'); // get src attribute of thumbnail
        originalModal.setAttribute('src', srcPath); // assign thumbnail path to modal path
    });
});

let showCaptionsBtn = document.getElementById('show-captions');
let captions = document.querySelectorAll('.figure-caption');
captions.forEach(item => {
	item.classList.add('hidden');
});
showCaptionsBtn.addEventListener('click', function(evt) {
	captions.forEach(item => {
		item.classList.toggle('hidden');
	});
});

// VARIABLE DECLARATIONS
let backButton = document.getElementById('backButton');
let currentDate = new Date();
let finnAge;
let finnBirthday = new Date(currentDate.getFullYear(), 11, 23);

// FUNCTION DECLARATIONS

// back button
getFinnAge();
// back button
backButton.addEventListener('click', function executeBackButton() { // if there is no back page, close the tab
    if (window.history.length === 1) {
        window.close();
    } else {
        window.history.back();
    }
});

// gets finn's current age
function getFinnAge() {
    finnAge = document.getElementById('finnAge');
    finnAge.textContent = calculateFinnAge();
    function calculateFinnAge() {
        if (currentDate.getDate() >= finnBirthday.getDate()) {
            let numOfYears = currentDate.getFullYear() - 2002;
            return numOfYears;
        } else {
            let numOfYears = currentDate.getFullYear() - 2003;
            return numOfYears;
        }
    }
}