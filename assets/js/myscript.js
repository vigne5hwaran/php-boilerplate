(function ($) {
  $(document).ready(function () {

    // $(window).on("scroll", function() {
    //   if ($(this).scrollTop()>1000) {
    //     $("#totop").fadeIn(500);
    //   } else {
    //     $("#totop").fadeOut(500);
    //   }
    // });
  
    // $("#totop").on("click", function() {
    //   $("html, body").animate({scrollTop:0}, 1000);
    // });

    $("#reset").on("click", () => {
      $('#contactForm')[0].reset();
    });

    $("#hospital").on("change", function () {
      var val = $(this).val();
      // console.log(val);
      if (val === "clinic") {
        $("#htime").html("<option value=''>-- select one --</option><option value='4,Thus - 6:30pm to 8:30pm'>Thus - 6:30pm to 8:30pm</option>");
      } else if (val == "HOSPITAL") {
        $("#htime").html("<option value=''>-- select one --</option><option value='1,Mon - 10:30am to 12:30pm'>Mon - 10:30am to 12:30pm</option><option value='3,Wed - 10:30am to 12:30pm'>Wed - 10:30am to 12:30pm</option><option value='4,Thu - 10:30am to 12:30pm'>Thu - 10:30am to 12:30pm</option><option value='5,Fri - 10:30am to 12:30pm'>Fri - 10:30am to 12:30pm</option>");
      } else {
        $("#htime").html("<option value=''>-- select hospital first -- </option>");
      }
    });


    $("#htime").on("change", function() {
      var val = $(this).val();
      var vicky = val.split(',')[0];
      if(vicky!="") {
        $("#datePicker").datepicker("destroy");
        $("#datePicker").datepicker({
          minDate:0,
          dateFormat: 'dd/mm/yy',
          showAnim: 'slideDown',
          beforeShowDay: function(date){ 
            var day = date.getDay(); 
            return [day == vicky,""];
          }
        });
      }
    });

  })
}(jQuery));