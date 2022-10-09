<div class="let-us-blk wow fadeInUp">
   <div class="container">
      <div class="row">
         <div class="col-md-12" data-aos="fade-right">
            <div class="form-cvr">
               <div class="let-us-txt">
                  <h1>We Value Your Feedback</h1>
               </div>
               <div class="let-us-form">
                  <form action="<?php echo e(route('feedback_submit')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" id="fullname" name="username"  placeholder="Name" style="text-transform: capitalize;" required="" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                           <input type="email" id="email"  name="email" placeholder="Email"  required="" autocomplete="off">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <textarea placeholder="Comments / Suggestions" name="message" style="text-transform: capitalize;"  required="" ></textarea>
                           <div class="next-btn">
                              <button  type="submit" class="hover-btn">SUBMIT</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/web/include/feedback.blade.php ENDPATH**/ ?>