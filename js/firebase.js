window.onload = function () {
  var coderesult;  
  render();
};

function render() {
    
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
    "recaptcha-container",
    {
      size: "invisible",
      callback: function (response) {
         phoneAuth();
      },
    }
  );

  recaptchaVerifier.render();

}

function phoneAuth() {
   // console.log(window.recaptchaVerifier);
    var phone_number = "+88"+$('#pickup_phone').val();
    if (phone_number.match("^(?:\\+88|88)?(01[3-9]\\d{8})$")) {
        firebase
        .auth()
        .signInWithPhoneNumber(phone_number, window.recaptchaVerifier)
        .then((confirmationResult) => {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            showSweetAlert('success', "OTP Sent");
            // ...
        })
        .catch((error) => {
            // Error; SMS not sent
            // ...
            showSweetAlert("error", "Something went wrong, please try again");
            console.log(error.message)
        });
    }else{
        showSweetAlert("error", "Enter Valid phone number");
    }
}

function verifyPhoneNumber(otp_code){
    if (otp_code.length == 6) {
      coderesult
        .confirm(otp_code)
        .then((result) => {
          // User signed in successfully.
          const user = result.user;
          console.log(user);
          showSweetAlert("success","Phone Number Verified");
          $("#otp").addClass("text-green");
          $("#registerButton").attr("disabled", false);
          // ...
        })
        .catch((error) => {
          // User couldn't sign in (bad verification code?)
          // ...
          showSweetAlert("error", "Something went wrong, please try again");
          console.log(error.message);
        });
    }else{
        $("#otp").removeClass("text-green");
        $("#registerButton").attr("disabled", true);
    }   

}

function showSweetAlert(icon,message){
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: icon,
      title: message,
    });
}