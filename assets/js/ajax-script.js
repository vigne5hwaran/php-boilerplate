
function recaptchaCallback() {
  var response = grecaptcha.getResponse();
  jQuery("#grecaptcha").val(response);
  console.log(jQuery("#contactForm").valid());
}
function recaptchaExpired() {
  jQuery("#grecaptcha").val("");
}

(function($) {
  "use strict"; // Start of Strict mode
  $("#contactForm").validate({
    // Rules for form validation
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      htime: {
        required: true
      },
      date: {
        required: true
      },
      phone: {
        required: true,
        number: true,
        maxlength: 12,
        minlength: 4
      },
      message: {
        required: true,
        minlength: 10
      },
      hospital: {
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
  $("#contactForm").on("submit", function(event) {
    if (!$(this).valid()) {
      // handle the invalid form...
      formError();
      submitMSG(false, "Did you fill in the form properly?");
    } else {
      // everything looks good!
      event.preventDefault();
      submitForm();
    }
  });


  function submitForm() {
    // Initiate Variables With Form Content
    // var formSer = $("#contactForm").serialize();
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var hospital = $("#hospital").val();
    var htime = $("#htime").val();
    var date = $("#datePicker").val();
    var message = $("#message").val();
    var captcha = grecaptcha.getResponse();

    $.ajax({
      type: "POST",
      url: "includes/process.php",
      data: {
        name: name,
        email: email,
        phone: phone,
        hospital: hospital,
        htime: htime,
        date: date,
        message: message,
        captcha: captcha
      },
      beforeSend: function() {
        $("#submitButton").attr('placeholder','Loading...');
      },
      success: function(text) {
        if (text == "success") {
          formSuccess(name);
        } else {
          formError();
          submitMSG(false, text);
        }
      }
    });
  }

  function formSuccess(name) {
    $("form#contactForm input#submitButton").fadeOut("normal", function() {
      $(this)
        .parent()
        .append("");
    });
    $("form#contactForm").slideUp("fast", function() {
      $(this).before(
        '<div class="col-lg-7 mx-auto success-box success"><img class="img-fluid" src="assets/img/sent.gif" alt="sent"><p>Thank you '+name+'. Your Message has been sent successfully.</p>  </div>'
      );
      $("#loader").hide();
    });
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!");
  }

  function formError() {
    $("#contactForm")
      .removeClass()
      .addClass("shake animated")
      .one(
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
        function() {
          $(this).removeClass();
        }
      );
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h4 text-left tada animated text-success";
    } else {
      var msgClasses = "h4 text-left text-danger";
    }
    $("#msgSubmit")
      .removeClass()
      .addClass(msgClasses)
      .text(msg);
  }



  // Newsletter config *************************************************************************



  $("#newsletter").validate({
    // Rules for form validation
    rules: {
      email: {
        required: true,
        email: true
      }
    },

    // Messages for form validation
    messages: {
      email: {
        required: "Please enter your email address"
      }
    }
  });
  $("#newsletter").on("submit", function(event) {
    if (!$(this).valid()) {
      // handle the invalid form...
      nformError();
    } else {
      // everything looks good!
      event.preventDefault();
      nsubmitForm();
    }
  });

  function nformError() {
    $("#newsletter")
      .removeClass()
      .addClass("shake animated")
      .one(
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
        function() {
          $(this).removeClass();
        }
      );
  }

  function nsubmitForm() {
    var email = $("#nemail").val();

    $.ajax({
      type: "POST",
      url: "includes/db.php",
      data: {
        email: email,
      },
      success: function(text) {
        if (text == "success") {
          nformSuccess(name);
        } else {
          nformError();
          nsubmitMSG(false, text);
        }
      }
    });
  }

  function nformSuccess() {
    $("form#newsletter").slideUp("fast", function() {
      $(this).before(
        '<div class="mx-auto success-box success"><p style="margin-top:0px;">Thank you for subscribing!</p></div>'
      );
    });
    $("#newsletter")[0].reset();
    submitMSG(true, "Message Submitted!");
  }

  function nsubmitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h4 text-left tada animated text-success";
    } else {
      var msgClasses = "h4 text-center error";
    }
    $("#msgSubmit")
      .removeClass()
      .addClass(msgClasses)
      .text(msg);
  }


})(jQuery); // End of strict mode
