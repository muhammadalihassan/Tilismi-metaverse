
<?php $__env->startSection('title','GRAPPLING ZONE | WISHLIST PRODUCTS'); ?> 
<?php $__env->startSection('content'); ?>

<div class="inner-banner">
      <img src="<?php echo e(asset('images/banner-9.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>Wishlist<br>Products</h2>
            </div>
          </div>
        </div>
      </div>
  </div>

  <section class="our-business-sec">
    <div class="container">
        <div class="top-headings">
          <h4>BUILD A BETTER BUSINESS</h4>
          <h2>Grappling Zone Wishlist<br>Products</h2>
          <img src="" alt="">
        </div>
        <div class="row"> 
          <?php $__currentLoopData = $wishlist_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3">
          	 <form method="GET" action="<?php echo e(route('remove_wishlist')); ?>">
                   <?php echo csrf_field(); ?>
                <input type="hidden" name="wish_id" value="<?php echo e($product->id); ?>">
                <input name="_method" type="hidden" value="DELETE">
                <a type="submit" class=" show_confirm" data-toggle="tooltip" title='Delete'><i class="fas fa-trash-alt"></i> x</a>
                           </form>
              <div class="our-pro-blk">
              <span>
                <img src="<?php echo e(asset($product->products->img)); ?>" alt="">
              </span>
             
              <div class='rating-stars'>
          <?php if($product->products->reviews->pluck('review')->avg()): ?>
             <ul id='stars'>
      <?php if($product->products->reviews->pluck('review')->avg() == 1): ?>
      <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Poor' data-value='2' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='5' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <?php elseif($product->products->reviews->pluck('review')->avg() == 2): ?>



        <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

      <?php elseif($product->products->reviews->pluck('review')->avg() == 3): ?>
       <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
        <?php elseif($product->products->reviews->pluck('review')->avg() == 4): ?>

      <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Good' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='WOW!!!' data-value='5' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

       <?php elseif($product->products->reviews->pluck('review')->avg() == 5): ?>
     <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Good' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='WOW!!!' data-value='5' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

      <?php endif; ?>
     <?php else: ?>
    
      <li class='star blank ' title='Fair' data-value='2' data-id="<?php echo e($product->products->id); ?>">
       <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='WOW!!!' data-value='5' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>


      </ul>
       <?php endif; ?>
  </div>
              <a href="<?php echo e(route('merchandise_details',[$product->products->product_cat->slug,$product->products->slug])); ?>"><h5><?php echo e($product->products->product_name); ?></h5></a>
              <h6><small>$<?php echo e($product->products->new_price); ?> </small> <del>$<?php echo e($product->products->old_price); ?></del></h6>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
</div>
  </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
	</script>
<script type="text/javascript">
	$('.show_confirm').click(function(event) {
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Are you sure you want to Remove Wishlist Item?`,
                 text: "If you delete this, it will be gone",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });
  $(document).on('click','.star',function(){
   
     var review= $(this).attr("data-value");
    var product_id=$(this).attr("data-id"); 
     $.ajax({
      url: "<?php echo e(route('add_review')); ?>",
      type: "post",
      data: {
       _token: "<?php echo e(csrf_token()); ?>",
        review:review,
        product_id:product_id
        },
      dataType:'json',
        success: function (data) {
           if (data.success == true) {
            location.reload(true);
                     toastr.success(data.message);
                   
                   } else {
                      toastr.error(data.message);
                      // Swal.fire('successfully Added');
                  }
        },
    });




     }) 

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/wishlist-products.blade.php ENDPATH**/ ?>