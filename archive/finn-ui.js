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