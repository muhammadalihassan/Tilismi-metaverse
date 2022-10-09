
 <?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dna Report Inquiry</h4></div>

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
                        <h4 class="card-title">Dna Report Inquiry</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Report View</th>
                                         <th>Send To Admin</th>
                                      
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($nonlegalInquiry): ?>
                                    <?php $__currentLoopData = $nonlegalInquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                           
                                            <td><?php echo e($val->customer_Id); ?></td>
                                            <td><?php echo e($val->user->username); ?></td>
                                            <td><?php echo e($val->user->email); ?></td>
                                            <td><a href="<?php echo e(route('edit_nonlegal_invoice',$val->id)); ?>" class="btn btn-primary">View Report</a></td>


                                 <td>
                                <form action="<?php echo e(route('send_to_admin_nonlegal')); ?>" enctype="multipart/form-data" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" name="id" value="<?php echo e($val->id); ?>">

                                        <input type="file" name="report">

                                        <button type="submit"class="btn btn-primary">Upload Report</button>
                                       </form>

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
                                        <th>Report View</th>
                                         <th>Send To Dna</th>
                                      
                                       
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_5\dna_update_4\resources\views/web/send-to-dna-nonlegal.blade.php ENDPATH**/ ?>