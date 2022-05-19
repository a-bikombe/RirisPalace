const password = $('#password');
const passwordReenter = $('#password-reenter');
let loginSignupSubmit = $('#login-signup-submit');
let passwordHelp = $('#help');

passwordReenter.keyup(function (evt) {
	if (passwordReenter.value !== password.value) {
		passwordHelp.textContent = "Passwords Must Match";
		loginSignupSubmit.classList.add('hidden');
	} else {
		passwordHelp.textContent = "";
		loginSignupSubmit.classList.remove('hidden');
	}
});