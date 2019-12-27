function recaptchaCallback() {
  var response = grecaptcha.getResponse();
  jQuery("#grecaptcha").val(response);
  console.log(jQuery("#contact-form").valid());
}
function recaptchaExpired() {
  jQuery("#grecaptcha").val("");
}

$("#contact-form").validate({
  // Rules for form validation
  rules: {
    name: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    phone: {
      required: true,
      number: true,
      maxlength: 10,
      minlength: 8
    },
    message: {
      required: true,
      minlength: 10
    },
    subject: {
      required: true
    },
    grecaptcha: {
      required: true,
      minlength: 255
    }
  },

  // Messages for form validation
  messages: {
    name: {
      required: "Please enter your name"
    },
    email: {
      required: "Please enter your email address"
    },
    subject: {
      required: "Please enter subject"
    },
    phone: {
      required: "Please enter your Phone number"
    },
    message: {
      required: "Please say something"
    },
    grecaptcha: {
      required: "Please check the recaptcha"
    }
  }
});
