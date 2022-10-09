
 <?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dna Legal Report Inquiry</h4></div>

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
                        <h4 class="card-title">Dna Legal Reports</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Report View Legal</th>
                                        <th>Download Report</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($nonlegal_reports): ?>
                                    <?php $__currentLoopData = $nonlegal_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <tr>
                                           
                                            <td><?php echo e($val->customer_Id); ?></td>
                                            <td><?php echo e($val->user->username); ?></td>
                                            <td><?php echo e($val->user->email); ?></td>

                                            
                                            <td>
                                         <a href="<?php echo e(asset($val->send_file_to_admin)); ?>" class="btn btn-primary" target="_blank">View Legal Report </a>
                                            </td>

                                            <td>
                                         <a href="<?php echo e(asset($val->send_file_to_admin)); ?>" class="btn btn-primary"download> Download Report </a>
                                            </td>
                                                
                                      
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                         <th>Customer Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Report View Legal</th>
                                        <th>Download Report</th>
                                      
                                       
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

<?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>
<style type="text/css"></style>
<?php $__env->stopSection(); ?> <?php $__env->startSection('js'); ?> <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/customer-view-nonlegal-reports.blade.php ENDPATH**/ ?>