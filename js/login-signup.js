const password = $('#password');
const passwordReenter = $('#password-reenter');
let loginSignupSubmit = $('#login-signup-submit');
let passwordHelp = $('#help');

passwordReenter.keyup(function (evt) {
	if (passwordReenter.value !== password.value) {
		passwordHelp.text("Passwords Must Match");
		loginSignupSubmit.hide();
	} else {
		passwordHelp.text("");
		loginSignupSubmit.show();
	}
});