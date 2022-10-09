 
<?php $__env->startSection('content'); ?>
<main>
   <div class="container-fluid site-width">
      <!-- START: Breadcrumbs-->
      <div class="row">
         <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto">
                  <h4 class="mb-0">Orders Details Inquiry</h4>
               </div>
               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active"><a href="#">Inquiry</a></li>
               </ol>
            </div>
         </div>
      </div>
      <!-- END: Breadcrumbs-->
      <!-- START: Card Data-->
      <div class="row">
         <div class="col-12 mt-3">
            <div class="card">
               <div class="card-header justify-content-between align-items-center">
                  <h4 class="card-title">Orders Details Inquiry</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display table dataTable table-striped table-bordered">
                        <thead>
                           <tr>
                              <th>Billing User First name</th>
                              <th>Billing Email</th>
                             
                              <th>Billing Mobile Number</th>
          
                              <th>Billing Address</th>
                           
                               <th>Total Amount</th>
                               <th>Discount</th>
                               <th>Discount Type</th>
                                <th>Shipping Price</th>
                              <th>Payment Method</th>

                              
                                <th>Date</th>
                                <th>Delete</th>
                              
                           </tr>
                        </thead>
                        <tbody>

                           <?php if($order_details): ?>
                           <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($val->billing_firstname); ?></td>
                           
                              <td><?php echo e($val->billing_email); ?></td>
                            
                              <td><?php echo e($val->billing_mobile); ?></td>
                             
                               <td><?php echo e($val->billing_address); ?></td>
                        

                              <td>$<?php echo e($val->total); ?></td>
                              <?php if($val->discount==""): ?>
                              <td>-</td>
                                <?php else: ?>
                              <td>$<?php echo e($val->discount); ?></td>

                              <?php endif; ?>
                              <?php if($val->discount_type==""): ?>
                                <td>-</td>
                                <?php else: ?>
                              <td>$<?php echo e($val->discount); ?></td>

                              <?php endif; ?>
                              <td>$<?php echo e($val->shipping_price); ?></td>

                             <td><?php echo e($val->payment_method); ?></td>

                              <td><?php echo e(date('M d,Y' , strtotime($val->created_at))); ?></td>
                              <td>
                                 <form method="GET" action="<?php echo e(route('orders_delete',$val->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a type="submit" class=" show_confirm" data-toggle="tooltip" title='Delete'><i class="btn btn-danger">Delete</i> </a>
                                 </form>
                              </td>
                           </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </tbody>
                        <tfoot>
                           <tr>
                               <th>Billing User First name</th>
                              <th>Billing Email</th>
                             
                              <th>Billing Mobile Number</th>
          
                              <th>Billing Address</th>
                           
                               <th>Total Amount</th>
                               <th>Discount</th>
                               <th>Discount Type</th>
                                <th>Shipping Price</th>
                              <th>Payment Method</th>

                              
                                <th>Date</th>
                                <th>Delete</th>
                              
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Card DATA-->
   </div>
</main>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('css'); ?>
<style type="text/css"></style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
   $('.show_confirm').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `Are you sure you want to delete this record?`,
               text: "If you delete this, it will be gone forever.",
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/order-details.blade.php ENDPATH**/ ?>