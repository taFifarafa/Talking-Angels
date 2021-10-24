let showHideBtn = document.querySelector('input[type=checkbox]');
let passwordInputBox = document.querySelector('input[type=password]');

showHideBtn.addEventListener('click', function () {
    if (showHideBtn.getAttribute('value') === 'false') {
        passwordInputBox.setAttribute('type', 'text');
        showHideBtn.value = 'true';
    } else {
        passwordInputBox.setAttribute('type', 'password');
        showHideBtn.value = 'false';
    }
})