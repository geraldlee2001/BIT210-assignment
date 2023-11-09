var quantityButtons = document.querySelectorAll('.btn-link');


quantityButtons.forEach(function (button) {
button.addEventListener('click', function () {

    var inputElement = this.parentNode.querySelector('input[type=number]');


    if (inputElement) {
    if (this.classList.contains('px-2')) {
        // If the button is minus, decrement the value
        inputElement.stepDown();
    } else {
        // If the button is plus, increment the value
        inputElement.stepUp();
    }
    }
});
});
