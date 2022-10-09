$('.responsive').slick({

  dots: true,

  infinite: true,

  speed: 300,

  slidesToShow: 4,

  slidesToScroll: 4,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 3,

        infinite: true,

        dots: true

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 2

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});

$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}

var map = AmCharts.makeChart("chartdiv", {
  type: "map",
  "theme": "dark",

  colorSteps: 10,

  dataProvider: {
    map: "usaLow",
    areas: [{
      id: "US-AL",
      value: 4447100
    }, {
      id: "US-AK",
      value: 626932
    }, {
      id: "US-AZ",
      value: 5130632
    }, {
      id: "US-AR",
      value: 2673400
    }, {
      id: "US-CA",
      value: 33871648
    }, {
      id: "US-CO",
      value: 4301261
    }, {
      id: "US-CT",
      value: 3405565
    }, {
      id: "US-DE",
      value: 783600
    }, {
      id: "US-FL",
      value: 15982378
    }, {
      id: "US-GA",
      value: 8186453
    }, {
      id: "US-HI",
      value: 1211537
    }, {
      id: "US-ID",
      value: 1293953
    }, {
      id: "US-IL",
      value: 12419293
    }, {
      id: "US-IN",
      value: 6080485
    }, {
      id: "US-IA",
      value: 2926324
    }, {
      id: "US-KS",
      value: 2688418
    }, {
      id: "US-KY",
      value: 4041769
    }, {
      id: "US-LA",
      value: 4468976
    }, {
      id: "US-ME",
      value: 1274923
    }, {
      id: "US-MD",
      value: 5296486
    }, {
      id: "US-MA",
      value: 6349097
    }, {
      id: "US-MI",
      value: 9938444
    }, {
      id: "US-MN",
      value: 4919479
    }, {
      id: "US-MS",
      value: 2844658
    }, {
      id: "US-MO",
      value: 5595211
    }, {
      id: "US-MT",
      value: 902195
    }, {
      id: "US-NE",
      value: 1711263
    }, {
      id: "US-NV",
      value: 1998257
    }, {
      id: "US-NH",
      value: 1235786
    }, {
      id: "US-NJ",
      value: 8414350
    }, {
      id: "US-NM",
      value: 1819046
    }, {
      id: "US-NY",
      value: 18976457
    }, {
      id: "US-NC",
      value: 8049313
    }, {
      id: "US-ND",
      value: 642200
    }, {
      id: "US-OH",
      value: 11353140
    }, {
      id: "US-OK",
      value: 3450654
    }, {
      id: "US-OR",
      value: 3421399
    }, {
      id: "US-PA",
      value: 12281054
    }, {
      id: "US-RI",
      value: 1048319
    }, {
      id: "US-SC",
      value: 4012012
    }, {
      id: "US-SD",
      value: 754844
    }, {
      id: "US-TN",
      value: 5689283
    }, {
      id: "US-TX",
      value: 20851820
    }, {
      id: "US-UT",
      value: 2233169
    }, {
      id: "US-VT",
      value: 608827
    }, {
      id: "US-VA",
      value: 7078515
    }, {
      id: "US-WA",
      value: 5894121
    }, {
      id: "US-WV",
      value: 1808344
    }, {
      id: "US-WI",
      value: 5363675
    }, {
      id: "US-WY",
      value: 493782
    }]
  },

  areasSettings: {
    autoZoom: true
  },

  valueLegend: {
    right: 10,
    minValue: "little",
    maxValue: "a lot!"
  }

});











// Gallery

// 



$(document).ready(function(){



    $(".filter-button").click(function(){

        var value = $(this).attr('data-filter');

        

        if(value == "all")

        {

            //$('.filter').removeClass('hidden');

            $('.filter').show('1000');

        }

        else

        {

//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');

//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');

            $(".filter").not('.'+value).hide('3000');

            $('.filter').filter('.'+value).show('3000');

            

        }

    });

    

    if ($(".filter-button").removeClass("active")) {

$(this).removeClass("active");

}

$(this).addClass("active");



});





$(document).ready(function(){

        $(document).on('click','.plus',function(e){
        //$('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val( val+1 ).change();
        });
 
        $(document).on('click','.minus',function(e){
        // $('.quantity').on('click', '.minus', 
        //     function(e) {
            let $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            if (val > 1 ) {
                $input.val( val-1 ).change();
            } 
        });
    });

$(document).ready(function(){
   $(document).on('change','input.qty',function() {
   var max = parseInt($(this).attr('max'));
   var min = parseInt($(this).attr('min'));
   if ($(this).val() > max)
   {
      $(this).val(max);
   }
   else if ($(this).val() < min)
   {
      $(this).val(min);
   }       
 }); 
});










// Menu Js

(function($) {

$.fn.menumaker = function(options) {  

 var cssmenu = $(this), settings = $.extend({

   format: "dropdown",

   sticky: false

 }, options);

 return this.each(function() {

   $(this).find(".button").on('click', function(){

     $(this).toggleClass('menu-opened');

     var mainmenu = $(this).next('ul');

     if (mainmenu.hasClass('open')) { 

       mainmenu.slideToggle().removeClass('open');

     }

     else {

       mainmenu.slideToggle().addClass('open');

       if (settings.format === "dropdown") {

         mainmenu.find('ul').show();

       }

     }

   });

   cssmenu.find('li ul').parent().addClass('has-sub');

multiTg = function() {

     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');

     cssmenu.find('.submenu-button').on('click', function() {

       $(this).toggleClass('submenu-opened');

       if ($(this).siblings('ul').hasClass('open')) {

         $(this).siblings('ul').removeClass('open').slideToggle();

       }

       else {

         $(this).siblings('ul').addClass('open').slideToggle();

       }

     });

   };

   if (settings.format === 'multitoggle') multiTg();

   else cssmenu.addClass('dropdown');

   if (settings.sticky === true) cssmenu.css('position', 'fixed');

resizeFix = function() {

  var mediasize = 1000;

     if ($( window ).width() > mediasize) {

       cssmenu.find('ul').show();

     }

     if ($(window).width() <= mediasize) {

       cssmenu.find('ul').hide().removeClass('open');

     }

   };

   resizeFix();

   return $(window).on('resize', resizeFix);

 });

  };

})(jQuery);



(function($){

$(document).ready(function(){

$("#cssmenu").menumaker({

   format: "multitoggle"

});

});

})(jQuery);













