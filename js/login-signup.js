const password = document.getElementById('password');
const passwordReenter = document.getElementById('password-reenter');
let loginSignupSubmit = document.getElementById('login-signup-submit');
let passwordHelp = document.getElementById('help');

passwordReenter.keyup(function (evt) {
	if (passwordReenter.value !== password.value) {
		passwordHelp.textContent = "Passwords Must Match";
		loginSignupSubmit.classList.add('hidden');
	} else {
		passwordHelp.textContent = "";
		loginSignupSubmit.classList.remove('hidden');
	}
});