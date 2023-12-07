function validatePassword() {
    var passwordInput = document.getElementById('password');
    var errorDiv = document.getElementById('password-error');

    if (passwordInput.value.length < 4) {
        errorDiv.innerHTML = 'Пароль повинен містити принаймні 4 символи.';
    } else {
        errorDiv.innerHTML = '';
    }
}