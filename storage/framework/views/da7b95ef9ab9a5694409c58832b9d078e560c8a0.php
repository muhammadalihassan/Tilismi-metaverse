 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div">
      <video src="<?php echo e(asset($appointment_banner->img)); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="container">
         <div class="banner-cntct-txt appointment-bnr">
            <h3>Schedule Appointment</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li><?php echo e(Request::segment(1)); ?> </li>
               <li></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="appointment-blk">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="appointment-work">
               <form id="address-form" action="<?php echo e(route('appointment_submit')); ?>" method="POST" autocomplete="off">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                     <div class="col-md-6">
                        <!--                     <label>NAME</label> -->
                        <br>
                        <input required="" type="text" id="name" name="full_name" placeholder="Full Name" style="text-transform: capitalize;">
                     </div>
                     <div class="col-md-6">
                        <!--                     <label>I AM</label>
                           -->               <br>
                        <select name="select_im">
                           <option>I am</option>
                           <option>Alleged Father</option>
                           <option>Daughter</option>
                           <option>Mother</option>
                           <option>Sibling</option>
                           <option>Son</option>
                           <option>Other</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                               <br>
                        <input required="" id="phoneNumber"  name="phoneNumb" placeholder="Phone Number" maxlength="16" >
                     </div>
                     <div class="col-md-6">
                        <!--                       <label>ADDRESS</label>
                           -->                  <br>
                        <input type="email" id="email" name="email"  placeholder="Email" class="email-letter" required="" >
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <br>
                        <input id="ship-address" name="address" required autocomplete="off"  placeholder="Address" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                                     <br>
                        <input required="" id="address2" name="apt_unit" placeholder="Bldg. #, Apt #, Unit #, Lot #, N/A" style="text-transform: capitalize;">
                     </div>
                     <div class="col-md-6">
                        <!--                       <label>PHONE</label>
                           -->                  <br>
                        <input id="locality" name="city" required placeholder="City" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <br>
                        <input id="state" name="state" required placeholder="State" style="text-transform: capitalize;">
                     </div>
                     <div class="col-md-6" for="postal_code">
                        <br>
                        <input id="postcode" name="zipcode" required placeholder="Zip" />
                     </div>
                     <input type="hidden" id="dateText" name="dateText">
                     <input type="hidden" id="slot" name="slot">
                     <input type="hidden" name="dm" id="dm" value="">
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                    <select id="mySelect" onchange="mychangeFunction()" name="select_services">
                     <option  value="" >Services</option>
                     <option value="299.00">Legal Paternity Test Chain Of Custody </option>
                     <option value="250.00">Non Legal Paternity Test Informational </option>
                  </select>
                        
                     </div>
                     <div class="col-md-12">
                        <div class="appointment-txt">
                      

                      <h5 id="price" >$0.00</h5>           
               
                        </div>
                     </div>
                  </div>
                    <input type="hidden" id="amount" name="amount">
                  <div class="row">
                     <div class="col-md-6">
                        <input id="cardno" name="card_number" required placeholder="Card Number" style="text-transform: capitalize;">
                     </div>
                     <div class="col-md-6">
                        <input id="expiry" name="exp_date" required placeholder="Expiration Date" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <input id="cvvno" name="cvc" required placeholder="Cvc / Cvv" style="text-transform: capitalize;">
                     </div>
                     <div class="col-md-6">
                        <input id="billingzip" name="billing_zip" required placeholder="Billing Zip Code" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <input id="mrchntfee" name="mrchntfee" required placeholder="Merchant fee $4.99" value="4.99" disabled="" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <input id="totalfee" name="total" required placeholder="Total $" style="text-transform: capitalize;">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="simple-reg-terms">
                           <label>
                           <span class="checkbox">
                               <input title="Please tick" name="accept_terms" type="checkbox" value="yes" class="required" id="js-accept-terms" required>
                            </span>
                            <span title="Please tick">Read and agree to the following</span>
                            <a target="_blank" href="<?php echo e(route('terms_condition')); ?>" title="Opens in a new tab">Terms &amp; Conditions</a>
                           </label>
                        </p>
                     </div>
                  </div>
                  <div class="row prt1">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                        <div id="signature">
                       <span>Signature</span>
                       <canvas width="300" height="148" id="signaturePad"></canvas>
                       <div class="controls">
                           <a class="btn-green" href="" id="download" >Download</a>
                           <input type="hidden" name="signature" id="dataurl">
                          
                          <a class="btn-green" href="#" id="clearSig">Clear Canvas</a>
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3"></div>
                  </div>
            </div>
            <div class="wrapper2">
            <div id="calendar">
            <!--  <div class="header">
               <div class="overlay">
                 <h1>Make appointment</h1>
               </div>
               </div> -->
            <div class="monthChange"></div>
            </div>
            <!-- <div class="inner-wrap">
               <form>
                 
                 
                 <button type="submit" class="request disabled">
                   Request appointment <br class="break">
                   <span>on</span>
                   <span class="day"></span>
                   <span>at</span>
                   <span class="time"></span>
                   <div class="sendRequest"></div>
                 </button>
               </form>
               </div> -->
            <!-- <div class="slot">
               <div class='timepicker' style="top: 855.985px; height: 60px;">
               <div class="owl">
                 <div>06:00</div>
                 <div>07:00</div>
                 <div>08:00</div>
                 <div>09:00</div>
                 <div>10:00</div>
                 <div>11:00</div>
                 <div>12:00</div>
                 <div>13:00</div>
                 <div>14:00</div>
                 <div>15:00</div>
                 <div>16:00</div>
                 <div>17:00</div>
                 <div>18:00</div>
                 <div>19:00</div>
                 <div>20:00</div>
               </div>
               <div class="fade-l"></div>
               <div class="fade-r"></div>
               </div> -->
            </div>
         </div>
         <div class="next-btn-center">
         <div class="appointment-txt next-btn">
         <!-- <label class="payment-01">PAYMENT METHOD</label>
            <h5 class="paypal-01 red-pay">Cash Payment Upon Arrival</h5> -->
         <button class="hover-btn" type="submit">SUBMIT PAYMENT NEXT  <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
         </div>
         </div>
         </form>
      </div>
   </div>
   </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
<script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>
<script>

/* function download_image() {
    var canvas = document.getElementById("signaturePad");
    image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

    var link = document.createElement("a");
    link.download = "signature.png";
    link.href = image;

    url = $("#dataurl").val(image);
    link.click();
} */

  $(document).ready(function () {
      
    $("#download").click(function (event) {

        var href = $(this).attr("href");

        url = $("#dataurl").val(href);

        var canvas = document.getElementById("signaturePad");

        var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

        event.preventDefault();

    });
});

    $("#mySelect").click(function (event) {
        var price = $(this).val();
      $("#amount").val(price);
      var mrchntfee= $("#mrchntfee").val();
       
    var finalfee =parseInt(price) + parseInt(mrchntfee);

   
        $("#totalfee").val(finalfee);
       

    });



    
    
//captcha
function onSubmit(token) {
    document.getElementById("demo-form").submit();
}
// Calender js
var time;
var day;
var month;
var year;
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var center;

// remove border if the selected date is today's date
function todayEqualActive() {
    setTimeout(function () {
        if ($(".ui-datepicker-current-day").hasClass("ui-datepicker-today")) {
            $(".ui-datepicker-today").children(".ui-state-default").css("border-bottom", "0");
        } else {
            $(".ui-datepicker-today").children(".ui-state-default").css("border-bottom", "2px solid rgba(53,60,66,0.5)");
        }
    }, 20);
}
// call the above function on document ready
todayEqualActive();

$("#calendar").datepicker({
    inline: true,
    dateFormat: "yy-mm-dd",
    firstDay: 1,
    showOtherMonths: true,
    onChangeMonthYear: function () {
        todayEqualActive();
    },

    onSelect: function (dateText, inst) {
        var date = $(this).datepicker("getDate"),
            day = date.getDate(),
            month = date.getMonth() + 1,
            year = date.getFullYear();

        $("#dateText").val(date);
        // display day and month on submit button
        var monthName = months[month - 1];
        $(".request .day").text(monthName + " " + day);

        todayEqualActive();

        $(".request").removeClass("disabled");
        var index;
        setTimeout(function () {
            $(".ui-datepicker-calendar tbody tr").each(function () {
                if ($(this).find(".ui-datepicker-current-day").length) {
                    index = $(this).index() + 1;
                }
            });
            var newDate = dateText;
            var myDate = $("#dateText").val(newDate);

            // insert timepiker placeholder after selected row
            $("<tr class='timepicker-cf'></tr>").insertAfter($(".ui-datepicker-calendar tr").eq(index));

            // for Get Value OF Selected Time
            $("tr.timepicker-cf").change(function () {
                // fo radio button
                var selectedVal = "";

                var selected = $('input[name="remote"]:checked');

                if (selected.length > 0) {
                    selectedVal = selected.attr("data-time");
                }
                if ($('input[name="remote"]:checked' == "1")) {
                    var time = selectedVal;

                    $("#slot").val(time);
                }
                //  console.log(dissabledTime);

                // var Myslot=$("#finalSlot").val();

                // console.log(dissable);
            });

            // For Get Data
            $.ajax({
                url: "<?php echo e(route('appoimtments_slots')); ?>",
                type: "GET",
                data: $("#address-form").serialize(),
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        $("tr.timepicker-cf").html(data.body);

                        $("tr.timepicker-cf").show();
                    } else {
                        $("tr.timepicker-cf").hide();
                    }
                },
            });

            var top = $(".timepicker-cf").offset().top - 2;

            if ($(".timepicker").css("height") == "60px") {
                $(".timepicker-cf").animate(
                    {
                        height: "0px",
                    },
                    { duration: 200, queue: false }
                );
                $(".timepicker").animate(
                    {
                        top: top,
                    },
                    0
                );
                $(".timepicker-cf").animate(
                    {
                        height: "60px",
                    },
                    200
                );
            } else {
                $(".timepicker").css("top", top);
                $(".timepicker, .timepicker-cf").animate(
                    {
                        height: "60px",
                    },
                    200
                );
            }
        }, 0);

        // display time on submit button
        time = $(".owl-stage .center").text();
        $(".request .time").text(time);

        $(".owl-item").removeClass("center-n");
        center = $(".owl-stage").find(".center");
        center.prev("div").addClass("center-n");
        center.next("div").addClass("center-n");
    },
});

// if the inputs arent empty force ":focus state"
$(".form-name input").each(function () {
    $(this).keyup(function () {
        if (this.value) {
            $(this).siblings("label").css({
                "font-size": "0.8em",
                left: ".15rem",
                top: "0%",
            });
        }
        // remove force if they're empty
        else {
            $(this).siblings("label").removeAttr("style");
        }
    });
});

$(".timepicker").on("click", ".owl-next", function () {
    time = $(".owl-stage .center").text();
    $(".request .time").text(time);

    $(".owl-item").removeClass("center-n");
    center = $(".owl-stage").find(".center");
    center.prev("div").addClass("center-n");
    center.next("div").addClass("center-n");
});

$(".timepicker").on("click", ".owl-prev", function () {
    time = $(".owl-stage .center").text();
    $(".request .time").text(time);

    $(".owl-item").removeClass("center-n");
    center = $(".owl-stage").find(".center");
    center.prev("div").addClass("center-n");
    center.next("div").addClass("center-n");
});

$(".owl").owlCarousel({
    center: true,
    loop: true,
    items: 5,
    dots: false,
    nav: true,
    navText: " ",
    mouseDrag: false,
    touchDrag: true,
    responsive: {
        0: {
            items: 3,
        },
        700: {
            items: 5,
        },
        1200: {
            items: 7,
        },
    },
});

$(document).on("click", ".ui-datepicker-next", function (e) {
    $(".timepicker-cf").hide(0);

    $(".timepicker").css({
        height: "0",
    });
    e.preventDefault();
    $(".ui-datepicker").animate(
        {
            "-webkit-transform": "translate(100%,0)",
        },
        200
    );
});

$(document).on("click", ".ui-datepicker-prev", function () {
    $(".timepicker-cf").hide(0);
    $(".timepicker").css({
        height: "0",
    });
    $(".ui-datepicker").animate(
        {
            transform: "translateX(-100%)",
        },
        200
    );
});

$(window).on("resize", function () {
    $(".timepicker").css("top", $(".timepicker-cf").offset().top - 2);
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dna_update_2\resources\views/web/appointment.blade.php ENDPATH**/ ?>