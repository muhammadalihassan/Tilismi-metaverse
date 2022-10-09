<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="testform-sec">
  <form action="<?php echo e(route('non_legal_submit')); ?>" method="POST" id="non_legal">
      <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>" />
      <?php echo csrf_field(); ?>
      <div class="container">
         <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
          <div class="row">
              <?php for($i=0 ; $i<3 ;$i++): ?>
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <div class="user-basic">
                          <label><span class="client-name">Name:</span><input type="text" class="client_name" style="text-transform: capitalize;" name="client_name" /></label>
                          <label>Address:<input type="text" class="client-address" style="text-transform: capitalize;" name="address" /></label>
                          <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" class="apt_unit" /></label>
                          <label>City/State:<input type="text" id="city_state" name="city_state" class="city_state" /></label>
                          <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" class="zip" /></div>
                          <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" class="country" /></label>
                          <label>Phone:<input type="text" id="phonenumber" name="phonenumber" class="phonenumber" /></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
                              <input type="text" id="alleged_father" name="alleged_father_name" class="alleged_father" />
                          </div>
                          <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" class="alleged_father_dob" /></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
                                  <input type="text" id="child1_name" name="child1_name" class="child1_name"/>
                              </div>
                              <label>DOB:<input type="date" id="child1_dob" name="child1_dob" class="child1_dob"/></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
                              <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" class="child2_name"/></div>
                              <label>DOB:<input type="date" id="child2_dob" name="child2_dob" class="child2_dob"/></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                              <h6 class="client-name">Type of Test</h6>
                              <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" class="paternity_trio" />Paternity Trio</label>
                              <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" class="paternity_motherless"/>Paternity Motherless</label>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" class="additional_af" />Additional AF(s)</label>
                                  <input type="text" class="inputt" id="additional_af" name="additional_af"/>
                              </div>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" class="additional_child_chk" />Additional Child(ren)</label>
                                  <input type="text" class="inputt" id="additional_child" name="additional_child"/>
                              </div>
                              <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" class="maternity_check" />Maternity</label>
                              <label><input type="checkbox" id="other" name="other_check" value="Other" />Other<input type="text" class="inputt" id="other" name="other"/></label>
                          </div>
                      </div>
                  </div>
              </div>
              <?php endfor; ?>
              
          </div>
          <div class="nonlegal-btn">
              <button type="submit" class="hover-btn">Submit</button>
          </div>
      </div>
  </form>
</section>
<script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
<script type="text/javascript">
$(".client_name").keyup(function(){
    var data = $(this).val();
    $(".client_name").each(function(i,e){
        $(e).val(data)
    })
})
$(".client-address").keyup(function(){
    var data = $(this).val();
    $(".client-address").each(function(i,e){
        $(e).val(data)
    })
})
$(".apt_unit").keyup(function(){
    var data = $(this).val();
    $(".apt_unit").each(function(i,e){
        $(e).val(data)
    })
})
$(".city_state").keyup(function(){
    var data = $(this).val();
    $(".city_state").each(function(i,e){
        $(e).val(data)
    })
})
$(".zip").keyup(function(){
    var data = $(this).val();
    $(".zip").each(function(i,e){
        $(e).val(data)
    })
})
$(".country").keyup(function(){
    var data = $(this).val();
    $(".country").each(function(i,e){
        $(e).val(data)
    })
})
$(".phonenumber").keyup(function(){
    var data = $(this).val();
    $(".phonenumber").each(function(i,e){
        $(e).val(data)
    })
})
$(".alleged_father").keyup(function(){
    var data = $(this).val();
    $(".alleged_father").each(function(i,e){
        $(e).val(data)
    })
})
$(".alleged_father_dob").keyup(function(){
    var data = $(this).val();
    $(".alleged_father_dob").each(function(i,e){
        $(e).val(data)
    })
})
$(".child1_name").keyup(function(){
    var data = $(this).val();
    $(".child1_name").each(function(i,e){
        $(e).val(data)
    })
})
$(".child1_dob").keyup(function(){
    var data = $(this).val();
    $(".child1_dob").each(function(i,e){
        $(e).val(data)
    })
})
$(".child2_name").keyup(function(){
    var data = $(this).val();
    $(".child2_name").each(function(i,e){
        $(e).val(data)
    })
})
$(".child2_dob").keyup(function(){
    var data = $(this).val();
    $(".child2_dob").each(function(i,e){
        $(e).val(data)
    })
})
$(".paternity_trio").keyup(function(){
    var data = $(this).val();
    $(".paternity_trio").each(function(i,e){
        $(e).val(data)
    })
})
$(".paternity_motherless").keyup(function(){
    var data = $(this).val();
    $(".paternity_motherless").each(function(i,e){
        $(e).val(data)
    })
})
$(".additional_af").keyup(function(){
    var data = $(this).val();
    $(".additional_af").each(function(i,e){
        $(e).val(data)
    })
})
$(".additional_child_chk").keyup(function(){
    var data = $(this).val();
    $(".additional_child_chk").each(function(i,e){
        $(e).val(data)
    })
})
$(".maternity_check").keyup(function(){
    var data = $(this).val();
    $(".maternity_check").each(function(i,e){
        $(e).val(data)
    })
})
</script>
<?php /**PATH D:\Malaika\dna_update_4\dna_update_4\resources\views/web/non-legal-form.blade.php ENDPATH**/ ?>