/*==============================================================*/
// Promedi Contact Form  JS
/*==============================================================*/

(function($) {
  "use strict"; // Start of use strict
  $("#contact-form")
    .validator()
    .on("submit", function(event) {
      if (event.isDefaultPrevented()) {
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
    $("#loader").show();
    // Initiate Variables With Form Content
    var name = $("#cname").val();
    var email = $("#cmail").val();
    var subject = $("#csubject").val();
    var phone = $("#cphone").val();
    var message = $("#cmessage").val();
    var captcha = $("#grecaptcha").val();

    $.ajax({
      type: "POST",
      url: "includes/process.php",
      data:
        "name=" +
        name +
        "&email=" +
        email +
        "&subject=" +
        subject +
        "&phone=" +
        phone +
        "&message=" +
        message +
        "&captcha=" +
        captcha,
      success: function(text) {
        if (text == "success") {
          formSuccess();
        } else {
          formError();
          submitMSG(false, text);
        }
      }
    });
  }

  function formSuccess() {
    $("form#contact-form input#submitButton").fadeOut("normal", function() {
      $(this)
        .parent()
        .append("");
    });
    $("form#contact-form").slideUp("fast", function() {
      $(this).before(
        '<div class="col-lg-7 mx-auto success-box success"><img class="img-fluid" src = "assets/img/sent.gif" alt = "img" > <p>Thank you. Your Email was sent successfully. <br> <i class="icofont icofont-checked"></i></p>  </div>'
      );
      $("#loader").hide();
    });
    $("#contact-form")[0].reset();
    submitMSG(true, "Message Submitted!");
  }

  function formError() {
    $("#contact-form")
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
})(jQuery); // End of use strict
