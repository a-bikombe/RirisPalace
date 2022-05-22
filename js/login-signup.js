const password = $('#password');
const passwordReenter = $('#password-reenter');
let loginSignupSubmit = $('#login-signup-submit');
let passwordHelp = $('#help');

function matchPasswords() {

    passwordReenter.keyup(function (e) {

        if (passwordReenter.val() !== password.val()) {
            passwordHelp.text("Passwords Must Match");
            loginSignupSubmit.hide();
        } else {
            passwordHelp.text("");
            loginSignupSubmit.show();
        }

    });

}

matchPasswords();