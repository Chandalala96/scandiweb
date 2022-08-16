$(document).ready(function() {
   //This code is for the Type Switcher
    $("#productType").on('change', function(){
           var filtertag = $("#productType :selected").text();
              $('.dynamic-form').hide().filter('#' + filtertag).fadeIn("slow");
              $(".dynamic-form-cont").css("display", "");
        
      })
})