<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="testform-sec">
  <form action="<?php echo e(route('non_legal_submit')); ?>" method="POST" id="non_legal">
      <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>" />
      <?php echo csrf_field(); ?>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <div class="user-basic">
                          <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" /></label>
                          <label>Address:<input type="text" style="text-transform: capitalize;" name="address" /></label>
                          <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" /></label>
                          <label>City/State:<input type="text" id="city_state" name="city_state" /></label>
                          <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" /></div>
                          <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" /></label>
                          <label>Phone:<input type="text" id="phonenumber" name="phonenumber" /></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
                              <input type="text" id="alleged_father" name="alleged_father_name" />
                          </div>
                          <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" /></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
                                  <input type="text" id="child1_name" name="child1_name" />
                              </div>
                              <label>DOB:<input type="date" id="child1_dob" name="child1_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
                              <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" /></div>
                              <label>DOB:<input type="date" id="child2_dob" name="child2_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                              <h6 class="client-name">Type of Test</h6>
                              <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" />Paternity Trio</label>
                              <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" />Paternity Motherless</label>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" />Additional AF(s)</label>
                                  <input type="text" class="inputt" id="additional_af" name="additional_af" />
                              </div>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" />Additional Child(ren)</label>
                                  <input type="text" class="inputt" id="additional_child" name="additional_child" />
                              </div>
                              <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" />Maternity</label>
                              <label><input type="checkbox" id="other" name="other_check" value="Other" />Other<input type="text" class="inputt" id="other" name="other" /></label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <div class="user-basic">
                          <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" /></label>
                          <label>Address:<input type="text" style="text-transform: capitalize;" name="address" /></label>
                          <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" /></label>
                          <label>City/State:<input type="text" id="city_state" name="city_state" /></label>
                          <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" /></div>
                          <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" /></label>
                          <label>Phone:<input type="text" id="phonnumber" name="phonenumber" /></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
                              <input type="text" id="alleged_father" name="alleged_father_name" />
                          </div>
                          <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" /></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
                                  <input type="text" id="child1_name" name="child1_name" />
                              </div>
                              <label>DOB:<input type="date" id="child1_dob" name="child1_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
                              <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" /></div>
                              <label>DOB:<input type="date" id="child2_dob" name="child2_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                              <h6 class="client-name">Type of Test</h6>
                              <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" />Paternity Trio</label>
                              <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" />Paternity Motherless</label>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" />Additional AF(s)</label>
                                  <input type="text" class="inputt" id="additional_af" name="additional_af" />
                              </div>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" />Additional Child(ren)</label>
                                  <input type="text" class="inputt" id="additional_child" name="additional_child" />
                              </div>
                              <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" />Maternity</label>
                              <label><input type="checkbox" id="other" name="other_check" value="Other" />Other<input type="text" class="inputt" id="other" name="other" /></label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <p><!-- Please complete and submit Your testing party's information.The name and information you provide on this Form will be used on your Test results.  --></p>
                      <div class="user-basic">
                          <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" /></label>
                          <label>Address:<input type="text" style="text-transform: capitalize;" name="address" /></label>
                          <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" /></label>
                          <label>City/State:<input type="text" id="city_state" name="city_state" /></label>
                          <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" /></div>
                          <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" /></label>
                          <label>Phone:<input type="text" id="phonnumber" name="phonenumber" /></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
                              <input type="text" id="alleged_father" name="alleged_father_name" />
                          </div>
                          <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" /></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
                                  <input type="text" id="child1_name" name="child1_name" />
                              </div>
                              <label>DOB:<input type="date" id="child1_dob" name="child1_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
                              <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" /></div>
                              <label>DOB:<input type="date" id="child2_dob" name="child2_dob" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                              <h6 class="client-name">Type of Test</h6>
                              <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" />Paternity Trio</label>
                              <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" />Paternity Motherless</label>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" />Additional AF(s)</label>
                                  <input type="text" class="inputt" id="additional_af" name="additional_af" />
                              </div>
                              <div class="additional-child">
                                  <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" />Additional Child(ren)</label>
                                  <input type="text" class="inputt" id="additional_child" name="additional_child" />
                              </div>
                              <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" />Maternity</label>
                              <label><input type="checkbox" id="other" name="other_check" value="Other" />Other<input type="text" class="inputt" id="other" name="other" /></label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="nonlegal-btn">
              <button type="submit" class="hover-btn">Submit</button>
          </div>
      </div>
  </form>
</section>

<?php $__env->startSection('js'); ?>

<?php echo $__env->make('web.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
 
</script>
<?php $__env->stopSection(); ?><?php /**PATH E:\xampp\htdocs\dna_update_3\resources\views/web/non-legal-form.blade.php ENDPATH**/ ?>