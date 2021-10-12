AOS.init();

jQuery(document).ready(function($){


  $("#wwuform").click(function(){
    $("#wwu-form").css("display", "flex");
  });


  $("#menu-burger").click(function(){
    $(".vertical-menu").toggleClass("vertical-menu__open");
  });
  $(".vertical-menu").mouseout(function(){
    $(".vertical-menu").toggleClass("vertical-menu__open");
  });

    //	var pattern = /\b(these|three|words)/gi; // words you want to wrap
      var pattern = /\b(communication clinic)/gi; // words you want to wrap
        var replaceWith = '<b class="negrita">$1</b>'; // Here's the wap
        jQuery('h1.logo, h3.logo').each(function(){
            jQuery(this).html(jQuery(this).html().replace(pattern,replaceWith));
        });
        
        //	var pattern = /\b(these|three|words)/gi; // words you want to wrap
      var pattern = /\b(paediatric)/gi; // words you want to wrap
        var replaceWith = '$1<br>'; // Here's the wap
        jQuery('#span-3-24').each(function(){
            jQuery(this).html(jQuery(this).html().replace(pattern,replaceWith));
        });
        
        //	var pattern = /\b(these|three|words)/gi; // words you want to wrap
      var pattern = /\b(in hobart)/gi; // words you want to wrap
        var replaceWith = '<b class="negrita">$1</b>'; // Here's the wap
        jQuery('.section-container h1').each(function(){
            jQuery(this).html(jQuery(this).html().replace(pattern,replaceWith));
        });
    });




