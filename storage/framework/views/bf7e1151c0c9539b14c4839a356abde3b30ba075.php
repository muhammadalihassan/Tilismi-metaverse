
<script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>   
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
function initAutocomplete() {
   new google.maps.places.Autocomplete(
          (document.getElementById('ship-address')),
          {types: ['geocode']}
   );
 }
</script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHmIwLTxK0P98s5lHruthrDWObZ_HMTOU&callback=initAutocomplete&libraries=places&v=weekly" async defer ></script>-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHmIwLTxK0P98s5lHruthrDWObZ_HMTOU&libraries=places&callback=initAutocomplete" async defer></script>

<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('js/phone.js')); ?>"></script>

<script type="text/javascript">AOS.init({duration:3000,});</script>

<script src="<?php echo e(asset('vendors/ckeditor/ckeditor.js')); ?>" type="text/javascript"></script>

<?php if(auth()->guard()->check()): ?>
<?php if(Auth::user()->role_id == 1): ?>

<script>

$(document).on("click", "#cms-generic", function () {
  $("#cms_form").submit();
});

$(document).on("click", ".clickable", function () {
  
  var element = $(this);
  var desc = $(this).html();
  var slug = $(this).data("slug");
  var clas = $(this).data("class");
  var tag = $(this).data("tag");
  $("#addcms").remove();
  $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo e(route('modalform')); ?>",
      data: { desc: desc, slug: slug, class: clas, tag: tag, _token: "<?php echo e(csrf_token()); ?>" },
      success: function (response) {
          if (response.status == 1) {
              $(response.message).insertAfter(element);
              $("#addcms").modal("show");
              var description = CKEDITOR.replace("description");
              description.on("change", function (evt) {
                  $("#description").text(evt.editor.getData());
              });
          }
      },
  });
});


</script>

<?php endif; ?>
<?php endif; ?>

    <script>

      // WOW ANIMATION

      // new WOW().init({duration:1000,});

// WOW ANIMATION

//Get the button



var mybutton = document.getElementById("myBtn");



// When the user scrolls down 20px from the top of the document, show the button

window.onscroll = function() {scrollFunction()};

function scrollFunction() {

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

    mybutton.style.display = "block";

  } else {

    mybutton.style.display = "none";

  }

}

// When the user clicks on the button, scroll to the top of the document

function topFunction() {

  document.body.scrollTop = 0;

  document.documentElement.scrollTop = 0;

}

</script>
<script type="text/javascript">

        $(document).on('click','.multi-check',function(){
            // var favorite = [];
            // $.each($("input[name='race']:checked"), function(){
            //     favorite.push($(this).val());
            // });
            alert("My favourite sports are: ");
        });
  

</script><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/layouts/scripts.blade.php ENDPATH**/ ?>