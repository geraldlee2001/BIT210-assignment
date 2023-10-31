document.querySelector("#submit").addEventListener("click", function() {
    event.preventDefault();
    // Get the input values
    const fullName = document.querySelector("#fullName").value;
    const birthday = document.querySelector("#birthday").value;
    const phoneNumber = document.querySelector("#phoneNumber").value;

    // Check if all input fields are filled
    if (fullName && birthday && phoneNumber) {
        // Display the success message.
        document.querySelector("#success-message").style.display = "block";
       
        setTimeout(function() {
            document.querySelector("#success-message").style.display = "none";
        }, 3000); // 3000 milliseconds = 3 seconds
    }
});



    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
    });