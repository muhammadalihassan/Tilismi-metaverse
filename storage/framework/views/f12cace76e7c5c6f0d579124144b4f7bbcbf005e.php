
<?php $__env->startSection('content'); ?>
<main>
   <div class="container-fluid site-width">
      <!-- START: Breadcrumbs-->
      <div class="row">
         <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto">
                  <h4 class="mb-0">Upcoming Invoice Inquiry</h4>
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
                  <h4 class="card-title">Upcoming Invoice Inquiry</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display table dataTable table-striped table-bordered">
                        <thead>
                           <tr>
                              <th>subscription ID</th>
                              <th>amount_due</th>
                              <th>amount_paid</th>
                              <th>amount_remaining</th>
                              <th>created</th>
                              <th>customer_email</th>
                              <th>customer_name</th>
                              <th>next_payment_attempt</th>
                              <th>status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($upcoming_invoice): ?>
                           <tr>
                              <td><?php echo e($upcoming_invoice->subscription); ?></td>
                              <td><?php echo e($upcoming_invoice->amount_due); ?></td>
                              <td><?php echo e($upcoming_invoice->amount_paid); ?></td>
                              <td><?php echo e($upcoming_invoice->amount_remaining); ?></td>
                              <td><?php echo e(date("Y-m-d H:i:s",$upcoming_invoice->created)); ?></td>
                              <td><?php echo e($upcoming_invoice->customer_email); ?></td>
                              <td><?php echo e($upcoming_invoice->customer_name); ?></td>
                              <td><?php echo e(date("Y-m-d H:i:s",$upcoming_invoice->next_payment_attempt)); ?></td>
                              <td><?php echo e($upcoming_invoice->status); ?></td>
                           </tr>
                           <?php endif; ?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>ID</th>
                              <th>amount_due</th>
                              <th>amount_paid</th>
                              <th>amount_remaining</th>
                              <th>created</th>
                              <th>customer_email</th>
                              <th>customer_name</th>
                              <th>next_payment_attempt</th>
                              <th>status</th>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/upcoming-invoice-record.blade.php ENDPATH**/ ?>