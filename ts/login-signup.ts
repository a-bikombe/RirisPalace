const password = <HTMLInputElement>document?.getElementById("password");
const passwordReenter = <HTMLInputElement>document?.getElementById("password-reenter");
let loginSignupSubmit = <HTMLInputElement>document?.getElementById("login-signup-submit");
let passwordHelp = <HTMLInputElement>document?.getElementById("help");

function matchPasswords(): void {
    passwordReenter?.addEventListener("keyup", (e) => {
        if (password !== null) {
            if (passwordReenter.value !== password.value) {
                passwordHelp.textContent = "Passwords Must Match";
                loginSignupSubmit?.classList.add("hidden");
            } else {
                passwordHelp.textContent = "";
                loginSignupSubmit?.classList.remove("hidden");
            }
        }
    });
}

matchPasswords();
