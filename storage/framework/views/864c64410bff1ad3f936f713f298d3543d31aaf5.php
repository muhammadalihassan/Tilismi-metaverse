
<?php $__env->startSection('content'); ?>
<main>
   <div class="container-fluid site-width">
      <!-- START: Breadcrumbs-->
      <div class="row">
         <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto">
                  <h4 class="mb-0">Latest Invoice Inquiry</h4>
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
                  <h4 class="card-title">Latest Invoice Inquiry</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display table dataTable table-striped table-bordered">
                        <thead>
                           <tr>
                              <th>Invoice ID</th>
                              <th>amount_remaining</th>
                              <th>amount_due</th>
                              <th>amount_paid</th>
                              <th>created</th>
                              <th>customer</th>
                              <th>customer_email</th>
                              <th>customer_name</th>
                              <th>hosted_invoice_url</th>
                              <th>invoice_pdf</th>
                              <th>status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($latest_invoice): ?>
                           <tr>
                              <td><?php echo e($latest_invoice->id); ?></td>
                              <td><?php echo e($latest_invoice->amount_remaining); ?></td>
                              <td><?php echo e($latest_invoice->amount_due); ?></td>
                              <td><?php echo e($latest_invoice->amount_paid); ?></td>
                              <td><?php echo e(date("Y-m-d H:i:s",$latest_invoice->created)); ?></td>
                              <td><?php echo e($latest_invoice->customer); ?></td>
                              <td><?php echo e($latest_invoice->customer_email); ?></td>
                              <td><?php echo e($latest_invoice->customer_name); ?></td>
                              <td><a href="<?php echo e($latest_invoice->hosted_invoice_url); ?>" class="btn btn-primary" target="_blank">Url Invoice</a></td>
                              <td><a href="<?php echo e($latest_invoice->invoice_pdf); ?>" class="btn btn-primary" target="_blank">Url Invoice Pdf</a></td>
                              <td><?php echo e($latest_invoice->status); ?></td>
                           </tr>
                           <?php endif; ?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>Invoice ID</th>
                              <th>amount_remaining</th>
                              <th>amount_due</th>
                              <th>amount_paid</th>
                              <th>created</th>
                              <th>customer</th>
                              <th>customer_email</th>
                              <th>customer_name</th>
                              <th>hosted_invoice_url</th>
                              <th>invoice_pdf</th>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/latest-invoice-record.blade.php ENDPATH**/ ?>