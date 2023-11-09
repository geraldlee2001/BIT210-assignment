// Add your custom JavaScript here
      // For example, you might want to add functionality for the plus and minus buttons

      // Get all buttons with class 'btn-link'
      var quantityButtons = document.querySelectorAll('.btn-link');

      // Loop through each button and add click event listener
      quantityButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          // Find the input element related to the clicked button
          var inputElement = this.parentNode.querySelector('input[type=number]');

          // Check if the input element exists
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
