
<?php $__env->startSection('title','GRAPPLING ZONE | CART'); ?>
<?php $__env->startSection('content'); ?>

<div class="inner-banner">
  <img src="<?php echo e(asset('images/banner-9.jpg')); ?>" alt="">

  <div class="car-cls">

    <div class="container">

      <div class="row">

        <div class="bnr-heading">

          <h2>CART</h2>

        </div>

      </div>

    </div>

  </div>

</div>


<section class="add-to-cart about_section">

  <div class="container">

    <div class="row">


      <div class="col-md-9">

        <div class="table-responsive">

          <table class="table">

            <thead>

              <tr>

                <th>Item</th>

                <th class="">Quantity</th>

                <th>Unit Price</th>

                <th>Sub Price</th>

                <th></th>

              </tr>

            </thead>

            <tbody>
              <?php if(session('cart')): ?>
              <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $sub_total = 0; ?>
              <?php $sub_total += ((float)$details['quantity']*(float)$details['price']);
              ?>

              <tr class="space">

                <td class="col-md-5">

                  <div class="row">

                    <div class="table-space">

                      <div class="col-md-5 no-padding ">

                        <div class="product-img">

                          <img src="<?php echo e(asset($details['image'])); ?>" alt="" class="img-responsive">

                        </div>

                      </div>

                      <div class="col-md-7 no-space">

                        <h3><?php echo e($details['product_name']); ?></h3>

                        <span>26 Reviews</span>

                      </div>

                    </div>

                  </div>

                </td>

                <td class="col-md-3">

                  <div class="number-item">

                    <input type="number" class="qtystyle" name="quanity" min="1" value="<?php echo e(isset($details['quantity']) ? $details['quantity'] : 1); ?>">

                    <input type="hidden" class="price" name="price" id="price" value="<?php echo e($details['price']); ?>">

                    <a href="" data-product_id="<?php echo e($id); ?>" class="update">Update Cart</a>
                  
                  </div>


                <td class="col-md-2">

                  <h4>$<?php echo e($details['price']); ?></h4>

                </td>

                <td class="col-md-2 sub">
                  <input type="hidden" class="subtotal" name="subtotal" id="subtotal" value="<?php echo e($sub_total); ?>">
                  <h4>$<?php echo e($sub_total); ?></h4>
                </td>

                <td>
                  <form method="GET" action="<?php echo e(route('remove_cart')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($id); ?>">
                    <input name="_method" type="hidden" value="DELETE">
                    <a type="submit" class=" show_confirm" data-toggle="tooltip" title='Delete'><i
                        class="fas fa-trash-alt"></i> x</a>
                  </form>
                </td>

                

              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>



            </tbody>

          </table>

        </div>

        <div class="row">

          <div class="col-sm-10 col-sm-offset-1">

            <div class="proceed">

              <div class="col-md-5 col-sm-12">

                <a href="<?php echo e(route('welcome')); ?>"> <span></span> Continue Shopping</a>

              </div>

              <div class="col-md-7 col-sm-12 text-center">
                <form action="<?php echo e(route('checkout')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" id="finaltotal" name="total" class="finaltotal">
                  <input type="hidden" id="ship_pr" name="shipping_price" class="ship_pr" value="">
                  <input type="hidden" id="final_discount" name="discount" class="final_discount" value="">
                  <input type="hidden" id="final_discount_type" name="discount_type" class="final_discount_type" value="">


                  <button type="submit" class="checkout-btn" id="mybtn">Proceed To Checkout</button>
                </form>

                <div class="or-amazon text-center">

                  <p>Or Checkout With</p>

                  <a href="#"><img src="<?php echo e(asset('images/cart-amazonepic.png')); ?>"></a>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="col-md-3">
        <?php if($shipping_price): ?>
        <input type="hidden" name="ship_price" id="ship_price" value="<?php echo e($shipping_price->value); ?>">
        <?php else: ?>
        <?php endif; ?>


        <?php if($discount): ?>
        <input type="hidden" name="discount_type" id="discount_type" value="<?php echo e($discount->discount_type); ?>">
        <input type="hidden" name="limit_price" id="limit_price" value="<?php echo e($discount->limit_price); ?>">
        <input type="hidden" name="discount" id="discount" value="<?php echo e($discount->discount); ?>">
        <?php else: ?>
        <?php endif; ?>
        

        <div class="total-section">

          <ul>

            <li>Sub Total <span id="final"> </span></li>

            <li>Discount <span id="discount-amount" data-amount="">-</span></li>

            <li>After Disc.<span id="dis" data-dis="">-</span></li>

            <li>Shipping <span id="ship" data-ship=""></li>

            <li class="color-change">Total <span id="total"></span></li>

          </ul>

        </div>

        <div class="ship-estimate">

          <ul>

            <li>Shipping</li>

            <li class="grey-style">Courier ($<?php echo e((isset($shipping_price)?$shipping_price->value:'$0')); ?>)</li>

          </ul>

          <ul>

            <li>Estimate For</li>

            <li class="grey-style"><?php echo e(Auth::user()->address); ?></li>

          </ul>

        </div>

      </div>
    </div>

  </div>

</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

  var favorite = [];
  var totalPrice = 0;
  var i;
  var arrayTotalValue = 0;
  
  $.each($("input[name='subtotal']"), function () {

      favorite.push($(this).val());
      var price = $(this).val();
      totalPrice += Number(price);
      document.getElementById("final").innerHTML = "$" + totalPrice + "";
      document.getElementById("total").innerHTML = "$" + totalPrice + "";
      $("#finaltotal").val("" + totalPrice + "");
      $("#mybtn").attr("data-total", "" + totalPrice + "");
      var shipping = $("#ship_price").val();
      $("#ship_pr").val(shipping);
      $("#ship").attr("data-ship", "" + shipping + "");
      document.getElementById("ship").innerHTML = "$" + shipping + "";
      $("#total").attr("data-sub", "" + totalPrice + ""); // set

      var sub = $("#total").attr("data-sub");
      var shipping = $("#ship").attr("data-ship");
      var my_total = parseInt($("#finaltotal").val());
      var limit_price = parseInt($("#limit_price").val());
      var discount_type = $("#discount_type").val();
      var discount1 = $("#discount").val();
      if ($("#discount") != "" && my_total >= limit_price) {

          $("#final_discount").val(discount1);
          $("#final_discount_type").val(discount_type);
          
      }
      if (discount_type == "rupees" && my_total >= limit_price) {

          var dis_show1 = (document.getElementById("discount-amount").innerHTML = " $" + discount1 + "");

          var dis_show = (document.getElementById("dis").innerHTML = " $" + (my_total - discount1).toFixed(2) + "");

          $("#discount-amount").attr("data-amount", "" + discount1 + "");

          $("#dis").attr("data-dis", "" + (my_total - discount1).toFixed(2) + "");

          var after_dis = $("#dis").attr("data-dis");

          var substract = parseInt(after_dis) + parseInt(shipping);

          var total = (document.getElementById("total").innerHTML = " $" + substract.toFixed(2) + "");

          $("#total").attr("data-sub", "" + substract.toFixed(2) + "");

          var total1 = document.getElementById("total").innerHTML;

          $("#dis-amount").text(discount1 + discount_type);

          $("#finaltotal").val("" + substract.toFixed(2) + "");

          $("#mybtn").attr("data-total", "" + substract.toFixed(2) + "");
      
      } else {

          var sub = $("#total").attr("data-sub");
          var shipping = $("#ship").attr("data-ship");
          var grand_total = parseFloat(sub) + parseInt(shipping);
          var total = (document.getElementById("total").innerHTML = " $" + grand_total.toFixed(2) + "");

          var total1 = document.getElementById("total").innerHTML;

          $("#finaltotal").val("" + grand_total + "");

          $("#mybtn").attr("data-total", "" + grand_total + ""); // sets
      }

      if (discount_type == "%" && my_total >= limit_price) {

          var minus_disc = parseFloat((discount1 / 100) * my_total);

          var dis_show = (document.getElementById("discount-amount").innerHTML = " $" + minus_disc.toFixed(2) + "");

          $("#discount-amount").attr("data-amount", "" + minus_disc.toFixed(2) + "");

          var dis_show = (document.getElementById("dis").innerHTML = " $" + (my_total - minus_disc).toFixed(2) + "");

          $("#dis").attr("data-dis", "" + (my_total - minus_disc).toFixed(2) + "");

          var percentage = my_total.toFixed(2) - minus_disc.toFixed(2) + parseInt(shipping);

          var total = (document.getElementById("total").innerHTML = " $" + percentage.toFixed(2) + "");

          var total1 = document.getElementById("total").innerHTML;

          $("#dis-amount").text(discount1 + discount_type);

          $("#finaltotal").val("" + percentage.toFixed(2) + "");

          $("#mybtn").attr("data-total", "" + percentage.toFixed(2) + "");

      } else {
        
          var sub = $("#total").attr("data-sub");

          var shipping = $("#ship").attr("data-ship");

          var grand_total = parseFloat(sub) + parseInt(shipping);

          var total = (document.getElementById("total").innerHTML = "$" + grand_total.toFixed(2) + "");

          var total1 = document.getElementById("total").innerHTML;

          $("#finaltotal").val("" + grand_total + "");

          $("#dis-amount").text("-");

          $("#mybtn").attr("data-total", "" + grand_total.toFixed(2) + ""); // sets

      }

  });

  $(".show_confirm").click(function (event) {
      var form = $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete this Item?`,
          text: "If you delete this, it will be gone",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
              form.submit();
          }
      });
  });

  $(".update").click(function (e) {

    e.preventDefault();
    var id = $(this).data("product_id");
    var quantity = $(this).parents("tr").find(".qtystyle").val();

      $.ajax({
          url: "<?php echo e(route('update_cart')); ?>",
          type: "post",
          data: {
              _token: "<?php echo e(csrf_token()); ?>",
              id: id,
              quantity: quantity,
          },
          success: function (response) {
              window.location.reload();
          },
      });

  });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/cart.blade.php ENDPATH**/ ?>