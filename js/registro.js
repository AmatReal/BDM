document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('RegistroForm');
    const emailInput = document.getElementById('Correo');
    const nameInput = document.getElementById('Nombre');
    const surnameInput = document.getElementById('Apellidos');
    const usernameInput = document.getElementById('User');
    const passwordInput = document.getElementById('Contraseña');
    const birthDateInput = document.getElementById('FechaNacimiento');

    form.addEventListener('submit', function(event) {
        let isValid = true;


        document.querySelectorAll('.error-message').forEach(el => el.remove());


        if (!validateEmail(emailInput.value)) {
            showError(emailInput, 'Por favor, ingrese un correo electrónico válido.');
            isValid = false;
        }


        if (nameInput.value.trim() === '') {
            showError(nameInput, 'El nombre no puede estar vacío.');
            isValid = false;
        }

        if (surnameInput.value.trim() === '') {
            showError(surnameInput, 'Los apellidos no pueden estar vacíos.');
            isValid = false;
        }

        if (usernameInput.value.trim() === '') {
            showError(usernameInput, 'El usuario no puede estar vacío.');
            isValid = false;
        }

        if (passwordInput.value.trim() === '') {
            showError(passwordInput, 'La contraseña no puede estar vacía.');
            isValid = false;
        } else if (!validatePassword(passwordInput.value)) {
            showError(passwordInput, 'La contraseña debe tener al menos 8 caracteres, incluir una mayúscula, un carácter especial y un número.');
            isValid = false;
        }

        if (birthDateInput.value.trim() === '') {
            showError(birthDateInput, 'La fecha de nacimiento no puede estar vacía.');
            isValid = false;
        }


        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePassword(password) {
        const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        return passwordRegex.test(password);
    }

    function showError(input, message) {
        const error = document.createElement('div');
        error.className = 'error-message';
        error.textContent = message;
        input.parentNode.insertBefore(error, input.nextSibling);
    }
});
