<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/formcss.css')); ?>">
<header class="headerr">
     <div class="top-row">
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
          <div class="col-md-3">
            <div class="logos">
              <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo">
            </div>
            <div class="logo-ddc">
              <h4>One DDC Way  <br>Fairfield, OH 45014</h4>
              <h4>1-800-929-0815  <br>1-800-363-1707 (fax)</h4>
            </div>
          </div>
          <div class="col-md-6">
            <div class="client-head">
              <h4>Client Identification Form</h4>
              <h3>Chain of Custody</h3>
            </div>
            <div class="client-part">
              <div class="row">
                  <label>Corporate Partner:</label>
                  <p><span>MY MOBILE DNA LLC</span></p>
                </div>
                <div class="row">
                  <label>Address:</label>
                  <p><span>Glendale AZ,</span></p>
                  <label>C/S/Zip:</label>
                  <p><span>85302</span></p>
                </div>
                <div class="row">
                  <label>Email:</label>
                  <p><span>Al@mymobiledna.com</span></p>
                </div>
                
                <div class="row">
                  <label>Phone:</label>
                  <p><span>480-322-6577</span></p>
                  <!-- <label>Fax:</label>
                  <p><span>800-363-1707</span></p> -->
                </div>
                <!-- <div class="col-md-6">
                  <label>Fax</label>
                </div> -->
                
            </div>
          </div>
          <div class="col-md-3">
            <div class="lab-use">
              <h4>LAB USE ONLY</h4>
              <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="logo">
            </div>
          </div>
        </div>
      </div>
     </div>
   </header>
<form action="<?php echo e(route('legal_submit')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>">
   <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
   <section class="legal-sec">
    <div class="container">
      <div class="first-table">
        <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-mother">
          <h4>Mother</h4>
        </div>
        <div class="table-head">
          <p><span>To Collector:</span> Please print clearly. <span>Entire</span> box must be completed for each party collected.</p>
        </div>  
        <table class="legal-table">
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input required="" type="text"  name="mother_first_name" style="text-transform: capitalize;" value="<?php echo e(old('mother_first_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input required="" type="text" name="mother_last_name" style="text-transform: capitalize;" value="<?php echo e(old('mother_last_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input required="" type="text" name="mother_middle_ini" style="text-transform: capitalize;" value="<?php echo e(old('mother_middle_ini')); ?>">
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input required="" type="date" name="mother_dob" value="<?php echo e(old('mother_dob')); ?>">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input required="" type="text" name="mother_ssn" value="<?php echo e(old('mother_ssn')); ?>">
            </div>
          </td>
          <td rowspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
              <input type="checkbox" name="mother_blood_transfusion_within_the_past_three_months" value="Yes" <?php if(old('mother_blood_transfusion_within_the_past_three_months')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
            <input type="checkbox" name="mother_blood_transfusion_within_the_past_three_months" value="No" <?php if(old('mother_blood_transfusion_within_the_past_three_months')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
             <input type="checkbox" name="mother_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php if(old('mother_had_a_bone_marrow_or_stem_cell_transplant')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="mother_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php if(old('mother_had_a_bone_marrow_or_stem_cell_transplant')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
            <input type="checkbox" name="mother_hve_you_previously_participated_in_a_parentage_test" value="Yes" <?php if(old('mother_hve_you_previously_participated_in_a_parentage_test')=='Yes'): ?>) checked <?php endif; ?>> 
                    <label>Yes</label>
                    <input type="checkbox" name="mother_hve_you_previously_participated_in_a_parentage_test" value="No" <?php if(old('mother_hve_you_previously_participated_in_a_parentage_test')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox"  name="mother_race"value="Caucasian" <?php if(old('mother_race')=='Caucasian'): ?>) checked <?php endif; ?>>
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name="mother_race" value="Native-American" <?php if(old('mother_race')=='Native-American'): ?>) checked <?php endif; ?>>
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="mother_race" value="Hispanic" <?php if(old('mother_race')=='Hispanic'): ?>) checked <?php endif; ?>> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="mother_race" value="Black" <?php if(old('mother_race')=='Black'): ?>) checked <?php endif; ?>> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="mother_race" value="Asian" <?php if(old('mother_race')=='Asian'): ?>) checked <?php endif; ?>> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox"  name="mother_race" value="Other" <?php if(old('mother_race')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other <span>(specify): <input type="text" name="check_other_spacify" value="<?php echo e(old('check_other_spacify')); ?>"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="mother_form_of_photo_id_check" value="Driver's License" <?php if(old('mother_form_of_photo_id_check')=="Driver's License"): ?>) checked <?php endif; ?>>
                  <label>Driver's License</label>
                </li>
                <li>
         <input type="checkbox"  name="mother_form_of_photo_id_check" value="Military ID" <?php if(old('mother_form_of_photo_id_check')=='Military ID'): ?>) checked <?php endif; ?>>
                  <label>Military ID</label>
                </li>
                <li>
             <input type="checkbox" name="mother_form_of_photo_id_check" value="Other" <?php if(old('mother_form_of_photo_id_check')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other</label> <span>(specify): <input type="text" name="mother_photoId_other_spacify" value="<?php echo e(old('mother_photoId_other_spacify')); ?>"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="3">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Mother's Signature:</label>
                <input type="text" name="mother_signature" value="<?php echo e(old('mother_signature')); ?>">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="mother_date" value="<?php echo e(old('mother_date')); ?>">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
      </div>
     <div class="first-table"> 
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-mother">
          <h4>Child</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="child_first_name" style="text-transform: capitalize;" value="<?php echo e(old('child_first_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
          <input type="text" name="child_last_name" style="text-transform: capitalize;" value="<?php echo e(old('child_last_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="child_middle_ini" style="text-transform: capitalize;" value="<?php echo e(old('child_middle_ini')); ?>">
            </div>
          </th>
          <th>
             <div class="table-first">
              <h4>Sex</h4>
              <input type="checkbox" name="child_sex" value="Male" <?php if(old('child_sex')=='Male'): ?>) checked <?php endif; ?>> 
              <label>Male </label>
              <input type="checkbox" name="child_sex" value="Female" <?php if(old('child_sex')=='Female'): ?>) checked <?php endif; ?>> 
              <label>Female </label>
            </div>
           <input type="hidden" name="child_sex" id="sex_check">
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="child_dob" value="<?php echo e(old('child_dob')); ?>">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="child_ssn_digits" value="<?php echo e(old('child_ssn_digits')); ?>">
            </div>
          </td>
          <td rowspan="2" colspan="2">
             <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
              <input type="checkbox" name="child_blood_transfusion_within_the_past_three_months" value="Yes" <?php if(old('child_blood_transfusion_within_the_past_three_months')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
            <input type="checkbox" name="child_blood_transfusion_within_the_past_three_months" value="No" <?php if(old('child_blood_transfusion_within_the_past_three_months')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
             <input type="checkbox" name="child_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php if(old('child_had_a_bone_marrow_or_stem_cell_transplant')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="child_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php if(old('child_had_a_bone_marrow_or_stem_cell_transplant')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
            <input type="checkbox" name="child_hve_you_previously_participated_in_a_parentage_test" value="Yes" <?php if(old('child_hve_you_previously_participated_in_a_parentage_test')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="child_hve_you_previously_participated_in_a_parentage_test" value="No" <?php if(old('child_hve_you_previously_participated_in_a_parentage_test')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox"  name="child_race"value="Caucasian" <?php if(old('child_race')=='Caucasian'): ?>) checked <?php endif; ?>>
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name="child_race" value="Native-American" <?php if(old('child_race')=='Native-American'): ?>) checked <?php endif; ?>>
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="child_race" value="Hispanic" <?php if(old('child_race')=='Hispanic'): ?>) checked <?php endif; ?>> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="child_race" value="Black" <?php if(old('child_race')=='Black'): ?>) checked <?php endif; ?>> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="child_race" value="Asian" <?php if(old('child_race')=='Asian'): ?>) checked <?php endif; ?>> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox"  name="child_race" value="Other" <?php if(old('child_race')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other <span>(specify): <input type="text" name="child_other_spacify" value="<?php echo e(old('child_other_spacify')); ?>"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="child_form_of_photo_id_check" value="Driver's License" <?php if(old('child_form_of_photo_id_check')=="Driver's License"): ?>) checked <?php endif; ?>>
                  <label>Driver's License</label>
                </li>
                <li>
         <input type="checkbox"  name="child_form_of_photo_id_check" value="Military ID" <?php if(old('child_form_of_photo_id_check')=='Military ID'): ?>) checked <?php endif; ?>>
                  <label>Military ID</label>
                </li>
                <li>
             <input type="checkbox" name="child_form_of_photo_id_check" value="Other" <?php if(old('child_form_of_photo_id_check')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other</label> <span>(specify): <input type="text" name="child_photoId_other_spacify" value="<?php echo e(old('child_photoId_other_spacify')); ?>"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="4">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Custodian's Signature:</label>
                <input type="text" name="custodian_signature" value="<?php echo e(old('custodian_signature')); ?>">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="custodian_date" value="<?php echo e(old('custodian_date')); ?>">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="first-table">
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-child">
          <h4>Alleged Father</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="alleged_father_first_name" style="text-transform: capitalize;" value="<?php echo e(old('alleged_father_first_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input type="text" name="alleged_father_last_name" style="text-transform: capitalize;" value="<?php echo e(old('alleged_father_last_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="alleged_father_middle_ini" style="text-transform: capitalize;" value="<?php echo e(old('alleged_father_middle_ini')); ?>">
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="alleged_father_dob" value="<?php echo e(old('alleged_father_dob')); ?>">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="alleged_father_ssn" value="<?php echo e(old('alleged_father_ssn')); ?>">
            </div>
          </td>
          <td rowspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
                    <input type="checkbox" name="alleged_father_blood_transfusion_within_the_past_three_months" value="Yes" <?php if(old('alleged_father_blood_transfusion_within_the_past_three_months')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="alleged_father_blood_transfusion_within_the_past_three_months" value="No" <?php if(old('alleged_father_blood_transfusion_within_the_past_three_months')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                   <input type="checkbox" name="alleged_father_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php if(old('alleged_father_had_a_bone_marrow_or_stem_cell_transplant')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
               <input type="checkbox" name="alleged_father_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php if(old('alleged_father_had_a_bone_marrow_or_stem_cell_transplant')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="alleged_father_hve_you_previously_participated_parentage_test" value="Yes" <?php if(old('alleged_father_hve_you_previously_participated_parentage_test')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="alleged_father_hve_you_previously_participated_parentage_test" value="No" <?php if(old('alleged_father_hve_you_previously_participated_parentage_test')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Caucasian" <?php if(old('alleged_father_race')=='Caucasian'): ?>) checked <?php endif; ?>>
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Native-American" <?php if(old('alleged_father_race')=='Native-American'): ?>) checked <?php endif; ?>>
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Hispanic" <?php if(old('alleged_father_race')=='Hispanic'): ?>) checked <?php endif; ?>> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Black" <?php if(old('alleged_father_race')=='Black'): ?>) checked <?php endif; ?>> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Asian" <?php if(old('alleged_father_race')=='Asian'): ?>) checked <?php endif; ?>> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="alleged_father_race" value="Other" <?php if(old('alleged_father_race')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other <span>(specify): <input type="text" name="alleged_father_other_spacify_race" value="<?php echo e(old('alleged_father_other_spacify_race')); ?>"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
            <input type="checkbox" name="alleged_father_form_of_photo_id_check" value="Driver's License" <?php if(old('alleged_father_form_of_photo_id_check')=="Driver's License"): ?>) checked <?php endif; ?>>
                  <label>Driver's License</label>
                </li>
                <li>
            <input type="checkbox" name="alleged_father_form_of_photo_id_check" value="Military ID" <?php if(old('alleged_father_form_of_photo_id_check')=='Military ID'): ?>) checked <?php endif; ?>>
                  <label>Military ID</label>
                </li>
                <li>
      <input type="checkbox" name="alleged_father_form_of_photo_id_check" value="Other" <?php if(old('alleged_father_form_of_photo_id_check')=='Other'): ?>) checked <?php endif; ?>>
       <label>Other</label> <span>(specify): 
        <input type="text" name="alleged_father_other_spacify_photoid" value="<?php echo e(old('alleged_father_other_spacify_photoid')); ?>"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="3">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Alleged Father's Signature</label>
                <input type="text" name="alleged_father_signature" value="<?php echo e(old('alleged_father_signature')); ?>">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="alleged_father_date" value="<?php echo e(old('alleged_father_date')); ?>">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="first-table">
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-child">
          <h4>Additional Party</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="additional_party_first_name" style="text-transform: capitalize;" value="<?php echo e(old('additional_party_first_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input type="text" name="additional_party_last_name" style="text-transform: capitalize;" value="<?php echo e(old('additional_party_last_name')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="additional_party_middle_ini" style="text-transform: capitalize;" value="<?php echo e(old('additional_party_middle_ini')); ?>">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Sex</h4>
              <input type="checkbox" name="additional_party_sex" value="Male" <?php if(old('additional_party_sex')=='Male'): ?>) checked <?php endif; ?>> 
              <label>Male </label>
              <input type="checkbox" name="additional_party_sex" value="Female" <?php if(old('additional_party_sex')=='Female'): ?>) checked <?php endif; ?>> 
              <label>Female </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="additional_party_dob" value="<?php echo e(old('additional_party_dob')); ?>">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="additional_party_ssn" value="<?php echo e(old('additional_party_ssn')); ?>">
            </div>
          </td>
          <td rowspan="2" colspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
            <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
       <input type="checkbox" name="additional_party_blood_transfusion_within_the_past_three_months" value="Yes" <?php if(old('additional_party_blood_transfusion_within_the_past_three_months')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
      <input type="checkbox" name="additional_party_blood_transfusion_within_the_past_three_months" value="No" <?php if(old('additional_party_blood_transfusion_within_the_past_three_months')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3> 
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                    <input type="checkbox" name="additional_party_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php if(old('additional_party_had_a_bone_marrow_or_stem_cell_transplant')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="additional_party_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php if(old('additional_party_had_a_bone_marrow_or_stem_cell_transplant')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="additional_party_hve_you_previously_participated_parentage_test" value="Yes" <?php if(old('additional_party_hve_you_previously_participated_parentage_test')=='Yes'): ?>) checked <?php endif; ?>>
                    <label>Yes</label>
                    <input type="checkbox" name="additional_party_hve_you_previously_participated_parentage_test"value="No" <?php if(old('additional_party_hve_you_previously_participated_parentage_test')=='No'): ?>) checked <?php endif; ?>>
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Caucasian" <?php if(old('additional_party_race')=='Caucasian'): ?>) checked <?php endif; ?>>
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Native American" <?php if(old('additional_party_race')=='Native American'): ?>) checked <?php endif; ?>>
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Hispanic" <?php if(old('additional_party_race')=='Hispanic'): ?>) checked <?php endif; ?>> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Black" <?php if(old('additional_party_race')=='Black'): ?>) checked <?php endif; ?>> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Asian" <?php if(old('additional_party_race')=='Asian'): ?>) checked <?php endif; ?>> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="additional_party_race" value="Other" <?php if(old('additional_party_race')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other <span>(specify): <input type="text" name="additional_party_additional_party_race_other_spacify" value="<?php echo e(old('additional_party_additional_party_race_other_spacify')); ?>"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="additional_party_additional_party_photoid" value="Driver's License" <?php if(old('additional_party_additional_party_photoid')=="Driver's License"): ?>) checked <?php endif; ?>>
                  <label>Driver's License</label>
                </li>
                <li>
                  <input type="checkbox" name="additional_party_additional_party_photoid" value="Military ID" <?php if(old('additional_party_additional_party_photoid')=='Military ID'): ?>) checked <?php endif; ?>>
                  <label>Military ID</label>
                </li>
                <li>
                  <input type="checkbox" name="additional_party_additional_party_photoid" value="Other" <?php if(old('additional_party_additional_party_photoid')=='Other'): ?>) checked <?php endif; ?>>
                  <label>Other</label> <span>(specify): <input type="text" name="additional_party_additional_party_photoid_other_spacify" value="<?php echo e(old('additional_party_additional_party_photoid_other_spacify')); ?>"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="4">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Additional Party's Signature</label>
                <input type="text" name="additional_party_signature" value="<?php echo e(old('additional_party_signature')); ?>">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="additional_party_date" value="<?php echo e(old('additional_party_date')); ?>">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    </div>
   </section>


     <section class="collect-statment">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="statment">
            <h5>Collector Statement</h5>
            <p>I certify that I have properly identified the parties and have collected, packaged and sealed the specimen(s) and have witnessed the signatures. I affirm, under penalties for perjury, that no tampering with the specimen(s) occurred while under my control.</p>
           <div class="signature">
            <label>Collector's Signature:</label><input type="text" disabled="">
          </div>
          <div class="collector-name">
             <label>Collector's <span>(Printed Name):</span></label><input class="legal-name" disabled="" type="text" placeholder=" Al Markoos" name="">
           </div>
             <div class="collect-date">
              <div class="date">
              <label>Collection Date:</label><input disabled="" type="text" name="">
            </div>
            <div class="timee">
              <label>Time:<input disabled="" type="text" name=""></label>
            </div>
              <div class="time">
              <label><input type="checkbox" disabled="">AM</label>
              <label><input type="checkbox" disabled="">PM</label>
            </div>
             </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="statment">
            <h5>Collection Facility Information </h5>
            <p>(If different from address above)</p>
            <div class="facility">
            <label>Facility:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>Address:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>C/S/Zip:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>Phone:</label><input type="text" disabled="">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="contact-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-main">
        <h4>Mother's Contact Information</h4>
      </div>
    </div>
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text" name="mother_contact_info_address" value="<?php echo e(old('mother_contact_info_address')); ?>">
          </div>
          <div class="address-inr">
          <input type="text">
        </div>
        <div class="phone">
           <label>Phone:</label>
           <input type="text" name="mother_contact_info_phone" value="<?php echo e(old('mother_contact_info_phone')); ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text" name="mother_contact_info_zip" value="<?php echo e(old('mother_contact_info_zip')); ?>">
        </div>
      </div>
    </div>
      <div class="row rw-h">
<div class="col-md-12">
        <div class="contact-mainn">
        <h4>Alleged Father's Contact Information</h4>
      </div>
    </div>
     
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text" name="alleged_father_address" value="<?php echo e(old('alleged_father_address')); ?>">
          </div>
          <div class="address-inr">
          <input type="text">
        </div>
        <div class="phone">
           <label>Phone:</label>
           <input type="text" name="alleged_father_phone" value="<?php echo e(old('alleged_father_phone')); ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text" name="alleged_father_zip" value="<?php echo e(old('alleged_father_zip')); ?>">
        </div>
      </div>
    </div>
    <div class="row rw-hh">
      <div class="col-md-12">
        <div class="contact-mainnn">
        <h4>Additional Party's Contact Information</h4>
      </div>
    </div>
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text" name="additional_child_address" value="<?php echo e(old('additional_child_address')); ?>">
          </div>
       <div class="phone">
           <label>Phone:</label>
           <input type="text" name="additional_child_phone" value="<?php echo e(old('additional_child_phone')); ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text" name="additional_contact_info_zip" value="<?php echo e(old('additional_contact_info_zip')); ?>">
        </div>

     </div>
    </div>
  </div>
</section>

<section class="term-sec">
  <div class="container">
    <div class="terms">
      <h5>Terms and Conditions</h5>
      <h6>I acknowledge, consent and agree to the following:</h6>
      <ul>
        <li>I verify that the information contained on this form is correct and true to the best of my knowledge.</li>
        <li> I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
        <li> I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
        <li>I understand that the biological specimens will be used for genetic testing and may be stored for future testing.</li>
        <li>If this test involves a person who is a minor or who is otherwise legally incapable of consenting, I attest that I have the legal authority to consent to
   testing and assume all legal responsibility.</li>
        <li> I witnessed the labeling of my name and/or individual’s name I am consenting for on the envelope/tube or package containing the specimen</li>
        <li>   I acknowledge and agree that the laboratory's liability to me arising out of or in any way related to the provision of testing services contemplated herein shall not exceed the cost of the test, and I agree to indemnify, defend, and hold DDC, its officers, agents, employees, representatives and any persons or entities collecting specimens harmless from all further claims or damages.</li>
        <li>I acknowledge and understand that if for any reason the biological specimen is inadequate for evaluation, DDC or the entities collecting specimensshall not be held liable if it is unable to produce test results due to insufficient specimen or due to the nature or condition of the specimen. DDC may request additional samples.</li>
        <li>   I understand that to ensure testing of the highest quality, DDC reserves the right to perform more testing to satisfy strict laboratory standards and guidelines. If this process delays the reporting of results, I will not hold DDC or the entities collecting specimens liable for any refund or damages.</li>
      </ul>
    </div>
  </div>
</section>
<section class="labortory-sec">
  <div class="container">
    <div class="labortry-blk">
    <div class="labortory-main">
     <div class="labortory-inr">
      <div class="heading">
      <h4>DNA Diagnostics Center Laboratory Use Only</h4>
    </div>
      <div class="pckge-rcve">
        <div class="option">
           <p>Package Received Sealed and Secure:</p>
           <div class="multiple-opt">
         <input type="checkbox" disabled=""><label>Yes</label>
          <input type="checkbox" disabled=""><label>No</label>
        </div>
      </div>
        <div class="confirmation">
          <p>I hereby affirm that I received the specimens for the individuals named on this form and found no evidence that the specimens had been tampered with or that the package had been opened prior to our receipt.</p>
        </div>
        <div class="recive-by">
        <div class="row">
        <div class="col-md-12">
        
        
             <label>Received By<span>(Printed Name):</span></label><input type="text" disabled="">
           </div>
         </div>
         </div>
         <div class="col-md-12">
           <div class="collect-date">
            
              <div class="signaturee">
              <label>Reciptent Signature:</label><input type="text" name="" disabled="">
            </div>
            <div class="date">
               <label>Date:<input type="text" name="" disabled=""></label>
            </div>
            <div class="timee">
              <label>Time:<input type="text" name="" disabled=""></label>
            </div>
              <div class="time-inr"> 
              <label><input type="checkbox" disabled="">AM</label>
              <label><input type="checkbox" disabled="">PM</label>
            </div>       
            </div>
          </div>
  
      <div class="labortory-notes">
              <div class="notes">
                <label>Laboratory Notes:</label>
                <input type="text" disabled="">
              </div>
              <div class="note-input">
              <input type="text" disabled="">
              <input type="text" disabled="">
             </div>
    </div>  
    </div>
  </div>
</div>
</section>
<div class="container">
  <div class="legal-sub-div">
    <button type="submit">Submit</button>
  </div>
</div>
</form>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
// $(document).on('click', 'input[type="checkbox"]', function() {      
//     $('input[type="checkbox"]').not(this).prop('checked', false);      
//  });

        $(document).on('click','.multi-check',function(){
            var favorite = [];
            $.each($("input[name='race']:checked"), function(){
                favorite.push($(this).val());
                $('#mother_race').val(favorite.join(", "));
            });
        
        });

        $(document).on('click','.photo-select',function(){
            var favorite = [];
            $.each($("input[name='photo']:checked"), function(){
                favorite.push($(this).val());
                $('#photo_check').val(favorite.join(", "));
            });
        
        });

         $(document).on('click','.sex-select',function(){
            var favorite = [];
            $.each($("input[name='Sex']:checked"), function(){
                favorite.push($(this).val());
                $('#sex_check').val(favorite.join(", "));
            });
        
        });

          $(document).on('click','.blood-tranfusion-select',function(){
            var favorite = [];
            $.each($("input[name='blood_transfusion']:checked"), function(){
                favorite.push($(this).val());
                $('#blood_transfusion').val(favorite.join(", "));
            });
        
        });

           $(document).on('click','.bone-marrow-select',function(){
            var favorite = [];
            $.each($("input[name='bone_marrow']:checked"), function(){
                favorite.push($(this).val());
                $('#bone_marrow_transplant').val(favorite.join(", "));
            });
        
        });
           $(document).on('click','.participated_percntge',function(){
            var favorite = [];
            $.each($("input[name='participated_test']:checked"), function(){
                favorite.push($(this).val());
                $('#').val(favorite.join(", "));
            });
        
        });
 



        
</script>
<?php /**PATH /home2/digitalservicesc/public_html/mymobiledna-dev/resources/views/web/legal-form.blade.php ENDPATH**/ ?>