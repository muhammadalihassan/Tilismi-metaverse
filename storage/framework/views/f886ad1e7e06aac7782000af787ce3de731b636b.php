 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div colored-div">
      <img src="<?php echo e(asset($faq_banner->img)); ?>" alt="banner">
      <div class="container">
         <div class="banner-cntct-txt">
            <h3>FAQ</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/</li>
               <li>FAQ</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="asked-question-blk">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="asked-question-txt">
               <h1>Frequently Asked Questions</h1>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="offer-imgs wow bounceIn">
               <img src="images/dna.gif" alt="what we offer" height="550px">
            </div>
         </div>
         <div class="col-md-6">
            <div class="accordion-work wow slideInUp">

               <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <button class="accordion activ
               e" data-tab="<?php echo e(++$keys); ?>"><?php echo e($value->name); ?></button>
               <div class="panel" id="tab-<?php echo e($keys++); ?>">
                 <?=html_entity_decode($value->desc)?>
               </div>
                  
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               

               
            </div>
         </div>
      </div>
   </div>
</section>
<?php echo $__env->make('web.include.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('css'); ?>
<style type="text/css">
   /*in page css here*/
</style>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   (() => {
       /*in page css here*/
   })();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dna_update_2\resources\views/web/faq.blade.php ENDPATH**/ ?>