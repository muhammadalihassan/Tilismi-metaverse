
 <?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Subscription Inquiry</h4></div>

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
                        <h4 class="card-title">Subscription Inquiry</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Subscription_Id</th>
                                        <th>Transaction_Id</th>
                                         <th>Customer Id</th>
                                         <th>Today Pay Date</th>
                                         <th>subscription_cancel</th> 
                                        <th>Delete Subscription</th>
                                        <th>Latest Invoice </th>
                                        <th>Upcoming Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($subscription): ?>
                                    <?php $__currentLoopData = $subscription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($val->id); ?></td>
                                            <td><?php echo e($val->email); ?></td>
                                            <td><?php echo e($val->subscription_id); ?></td>
                                            <td><?php echo e($val->transaction_id); ?></td>
                                            <td><?php echo e($val->customer_id); ?></td>
                                            <td><?php echo e($val->current_period_end); ?></td>
                                            <td><?php echo e($val->subscription_cancel); ?></td>

                     <td><a href="<?php echo e(route('delete_subscription',$val->subscription_id)); ?>" class="btn btn-primary">Delete Subscription</a></td>
                     <td><a href="<?php echo e(route('get_subscription',$val->subscription_id)); ?>" class="btn btn-primary">View Lastest Invoice Subscription</a></td>
                      <td><a href="<?php echo e(route('get_upcoming_invoice',$val->customer_id)); ?>" class="btn btn-primary">View Upcoming Invoice Subscription</a></td>
                        </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                         <th>ID</th>
                                        <th>Email</th>
                                        <th>Subscription_Id</th>
                                        <th>Transaction_Id</th>
                                         <th>Customer Id</th>
                                         <th>Today Pay Date</th>
                                         <th>subscription_cancel</th> 
                                        <th>Delete Subscription</th>
                                        <th>Latest Invoice </th>
                                        <th>Upcoming Invoice</th>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/customers-list.blade.php ENDPATH**/ ?>