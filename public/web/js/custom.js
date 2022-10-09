$('.leader-slider').slick({
  dots: true,
  infinite: true,
  arrows: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1366,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
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

$(".leader-slide").click(function(){
  $(this).closest(".section").find(".ani-slider").hide(1000);
  $(this).closest(".section").find(".leaders-info-main").show(1000);
  var a = $(this).find("img");
  var b = $(this).closest(".section").find(".info-img").find("img");
  var c = a.attr('src');
  b.attr("src",c);
  var d = $(this).find("h6").text();
  var e = $(this).closest(".section").find(".info-txt").find("h4");
  var f = $(this).find("p").text();
  var g = $(this).closest(".section").find(".info-txt").find("h6");
  e.append(d);
  g.append(f);
  var list = $(this).find("ul").html();
  var alist = $(this).closest(".section").find(".info-txt").find("ul");
  alist.append(list);
  var z = $(this).find("span").text();
  var y = $(this).closest(".section").find(".info-txt").find("p");
  y.append(z);
})
$(".back-leaders").click(function(){
  $(this).closest(".section").find(".ani-slider").show(500);
  $(this).closest(".section").find(".leaders-info-main").hide(500);
   $(this).closest(".section").find(".leaders-info-main").find("h4").text(" ");
   $(this).closest(".section").find(".leaders-info-main").find("h6").text(" ");
   $(this).closest(".section").find(".leaders-info-main").find("ul").html(" ");
   $(this).closest(".section").find(".leaders-info-main").find("p").html(" ");
})

// $(".ani-slider .col-md-3").click(function(){
//   var a = $(".ani-slider .col-md-3");
//   a.hide();
//   $(this).show();
//   $(this).addClass("flt-lft")
// })


$('.brain-slider').slick({
  dots: true,
  infinite: true,
  arrows: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1366,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
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

 $.scrollify({
  section: ".scrollify",
  easing: "easeOutExpo",
    scrollSpeed: 100,
    offset : 0,
    before:function() {
       $('.scrollify').removeClass('active')
    },
    after:function() {
      current = $.scrollify.current();
      current.addClass('active')
    }
});
$(document).ready(function() {
  $(document).scroll(function() {
    // calculate half the viewport
    var compensation = $(window).height() / 2;
    // calculate where the sections start
    var banner = ($('#banner').offset().top) - compensation;
    var about = ($('#about').offset().top) - compensation;
    var leaders = ($('#leaders').offset().top) - compensation;
    var brains = ($('#brains').offset().top) - compensation;
    var craft = ($('#craft').offset().top) - compensation;
    var knowledge = ($('#knowledge').offset().top) - compensation;
    var form = ($('#ftr-form').offset().top) - compensation;
    var scrollPos = $(document).scrollTop();
    
    
    // Apply text changes
    if(scrollPos >= banner && scrollPos < about){
 $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(1)").addClass("active");
 $(".top-head").removeClass("blueh");
$(".top-head").removeClass("yellowh");
$(".top-head").addClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
     else if (scrollPos >= about && scrollPos < leaders) {
      $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(2)").addClass("active");
        $(".top-head").addClass("blueh");
$(".top-head").removeClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
    else if (scrollPos >= leaders && scrollPos < brains) {
       $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(3)").addClass("active");
        $(".top-head").addClass("blueh");
$(".top-head").removeClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").addClass("blue-thumb");

    }
    else if (scrollPos >= brains && scrollPos < craft) {
      $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(4)").addClass("active"); 
         $(".top-head").removeClass("blueh");
$(".top-head").addClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
    else if (scrollPos >= craft && scrollPos < knowledge) {
      $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(5)").addClass("active");  
        $(".top-head").addClass("blueh");
$(".top-head").removeClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
     else if (scrollPos >= knowledge && scrollPos < form) {
      $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(6)").addClass("active");  
        $(".top-head").removeClass("blueh");
$(".top-head").addClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
    else if (scrollPos >= form) {
      $(".scrolling-txt ul li").removeClass("active");
        $(".scrolling-txt ul li:nth-of-type(7)").addClass("active");  
        $(".top-head").addClass("blueh");
$(".top-head").removeClass("yellowh");
$(".top-head").removeClass("normalh");
$(".scrolling-txt").removeClass("blue-thumb");
    }
    else {
       $(".scrolling-txt").removeClass("blue-thumb");
    } 
  }); // close scroll function
}); // close document ready

  $('.scrolling-txt ul li a').click(function() {
    $.scrollify.move('#' + $(this).attr('id'))
  })
// $(".sections").scroll(function() {    
//     var scroll = $(".sections").scrollTop();

//      if(scroll <= 100){
// $(".top-head").removeClass("blueh");
// $(".top-head").removeClass("yellowh");
// $(".top-head").addClass("normalh");
// $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(1)").addClass("active");
//         console.log($(this).height());
//      }
//     else if (scroll > 100 && scroll <= 200) {
//         $(".top-head").addClass("blueh");
// $(".top-head").removeClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(2)").addClass("active");

//     }
//     else if (scroll > 200 && scroll <= 300) {
//         $(".top-head").addClass("blueh");
// $(".top-head").removeClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(3)").addClass("active");
//     }
//     else if (scroll > 300 && scroll <= 400) {
//         $(".top-head").removeClass("blueh");
// $(".top-head").addClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(4)").addClass("active");
//     }
//     else if (scroll > 400 && scroll <= 500) {
//         $(".top-head").addClass("blueh");
// $(".top-head").removeClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(5)").addClass("active");
//     }
//       else if (scroll > 500 && scroll <= 600) {
//         $(".top-head").removeClass("blueh");
// $(".top-head").addClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(6)").addClass("active");
//     }
//     else if (scroll > 600 && scroll <= 700) {
//         $(".top-head").addClass("blueh");
// $(".top-head").removeClass("yellowh");
// $(".top-head").removeClass("normalh");
//         $(".scrolling-txt ul li").removeClass("active");
//         $(".scrolling-txt ul li:nth-of-type(7)").addClass("active");
//     }
// }); 


$(".read-btn a").click(function(){
  var a = $(this).closest(".vm");
  if(a.hasClass("read-less")){
$(".vm").css("transform", "scale(1)");
$(".vm").css("width", "50%");
a.css("width", "50%");
a.removeClass("read-less");
$(this).text('read more');
  }
  else{
// $(".vm").hide();
$(".vm").css("transform", "scale(0)");
$(".vm").css("width", "0");
a.css("transform", "scale(1)");
a.css("width", "100%");
a.css("width", "100%");
a.addClass("read-less");
  $(this).text('read less');
  }

})


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("prod-ser-tab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// $(".scroll-txt").click(function(){
//   var b = $(".scroll-txt").closest("li");
//   var c = $(this).closest("li");
//   b.removeClass("active");
//   c.addClass("active");
// })