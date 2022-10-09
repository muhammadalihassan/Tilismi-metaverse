<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/formcss.css')); ?>">

    <div class="row" style="padding-top: 10px; padding-left: 50px;">

        <button type="button" class="btn btn-dark" onclick="CreatePDFfromHTML()">Download PDF</button>
    </div>
    <div class="container-fluid pl-0 pr-0 mainDiv">

        <header class="headerr">
            <div class="top-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logos">
                                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo" />
                            </div>
                            <div class="logo-ddc">
                                <h4>
                                    One DDC Way <br />
                                    Fairfield, OH 45014
                                </h4>
                                <h4>
                                    1-800-929-0815 <br />
                                    1-800-363-1707 (fax)
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                              <div class="lab-use">
                                <h4>Customer ID</h4>
                                <input type="text" name="customer_id" id="customer_id"> 
                            </div>
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
                                        <p>
                                            <span>800-363-1707</span>
                                        </p> -->
                                </div>
                                <!-- <div class="col-md-6">
                                    <label>Fax</label>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="lab-use">
                                <h4>LAB USE ONLY</h4>
                                <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
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
                                    <input
                                        required="" type="text" readonly=""
                                        value="<?php echo e($legalinquiry->mother_first_name == '' ? '-' : $legalinquiry->mother_first_name); ?>"
                                        name="mother_first_name" readonly="" disabled=""
                                        style="text-transform: capitalize;"
                                    />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Last Name<span> (Please print clearly)</span></h4>
                                    <input readonly="" disabled="" type="text" name="mother_last_name"
                                    value="<?php echo e($legalinquiry->mother_last_name == '' ? '-' : $legalinquiry->mother_last_name); ?>"
                                    style="text-transform: capitalize;" />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Middle Initial<span> (Please print clearly)</span></h4>
                                    <input readonly="" disabled="" type="text" name="mother_middle_ini"
                                    value="<?php echo e($legalinquiry->mother_middle_ini == '' ? '-' : $legalinquiry->mother_middle_ini); ?>"
                                    style="text-transform: capitalize;" />
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="birth-table">
                                    <h4>Date of Birth</h4>
                                    <input required="" readonly="" disabled="" type="text" name="mother_dob" value="<?php echo e($legalinquiry->mother_dob == '' ? '-' : $legalinquiry->mother_dob); ?>"/>
                                </div>
                            </td>
                            <td>
                                <div class="birth-table">
                                    <h4>SSN Last 4 Digits</h4>
                                    <input readonly="" disabled="" required="" type="text" name="mother_ssn" value="<?php echo e($legalinquiry->mother_ssn == '' ? '-' : $legalinquiry->mother_ssn); ?>"/>
                                </div>
                            </td>
                            <td rowspan="2">
                                <div class="table-History">
                                    <h4>Client History:<span>(Please check applicable)</span></h4>
                                    <ul>
                                        <li>
                                            <h3>
                                                Have you had a blood transfusion within the past 3 months?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="mother_blood_transfusion_within_the_past_three_months" value="Yes" <?php echo e($legalinquiry->mother_blood_transfusion_within_the_past_three_months == 'Yes' ? 'checked' : ''); ?>/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="mother_blood_transfusion_within_the_past_three_months" value="No" <?php echo e($legalinquiry->mother_blood_transfusion_within_the_past_three_months == 'No' ? 'checked' : ''); ?>/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you ever had a bone marrow or stem cell transplant?
                                                <span>
                                                    <input type="checkbox"  name="mother_had_a_bone_marrow_or_stem_cell_transplant" readonly="" disabled="" value="Yes" <?php echo e($legalinquiry->mother_had_a_bone_marrow_or_stem_cell_transplant == 'Yes' ? 'checked' : ''); ?> />
                                                    <label>Yes</label>
                                                    <input type="checkbox" name="mother_had_a_bone_marrow_or_stem_cell_transplant" readonly="" disabled="" value="No" <?php echo e($legalinquiry->mother_had_a_bone_marrow_or_stem_cell_transplant == 'No' ? 'checked' : ''); ?>/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you previously participated in a parentage test?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="mother_hve_you_previously_participated_in_a_parentage_test" value="Yes" <?php echo e($legalinquiry->mother_hve_you_previously_participated_in_a_parentage_test == 'Yes' ? 'checked' : ''); ?>/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="mother_hve_you_previously_participated_in_a_parentage_test" value="No" <?php echo e($legalinquiry->mother_hve_you_previously_participated_in_a_parentage_test == 'No' ? 'checked' : ''); ?>/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table-race" id="checkbox">
                                    <h4>Race:<span>(Please check one)</span></h4>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" class="multi-check" name="mother_race" value="Caucasian" <?php echo e($legalinquiry->mother_race == 'Caucasian' ? 'checked' : ''); ?> />
                                            <label>Caucasian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="mother_race" class="multi-check" value="Native American" <?php echo e($legalinquiry->mother_race == 'Native American' ? 'checked' : ''); ?> />
                                            <label> Native American</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="mother_race" class="multi-check" value="Hispanic" <?php echo e($legalinquiry->mother_race == 'Hispanic' ? 'checked' : ''); ?> />
                                            <label>Hispanic</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="mother_race" class="multi-check" value="Black" <?php echo e($legalinquiry->mother_race == 'Black' ? 'checked' : ''); ?>/>
                                            <label>Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="mother_race" class="multi-check" value="Asian" <?php echo e($legalinquiry->mother_race == 'Asian' ? 'checked' : ''); ?>/>
                                            <label>Asian</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="mother_race" class="multi-check" value="Other" <?php echo e($legalinquiry->mother_race == 'Other' ? 'checked' : ''); ?> />
                                            <label>
                                                Other <span>(specify): <input type="text" readonly="" disabled="" name="check_other_spacify"<?php echo e($legalinquiry->check_other_spacify == '' ? '-' : $legalinquiry->check_other_spacify); ?> /></span>
                                            </label>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="mother_race" id="mother_race" />
                                </div>
                            </td>
                            <td>
                                <div class="table-photo">
                                    <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" class="photo-select" name="mother_form_of_photo_id_check" 
                                            value="Driver's License"
                                            <?php echo e($legalinquiry->mother_form_of_photo_id_check == "Driver's License" ? 'checked' : ''); ?>


                                            />
                                            <label>Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" class="photo-select" name="mother_form_of_photo_id_check"
                                            value="Military ID"
                                            <?php echo e($legalinquiry->mother_form_of_photo_id_check == "Military ID" ? 'checked' : ''); ?>

                                            />
                                            
                                            <label>Military ID</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="photo-select" readonly="" disabled="" name="mother_form_of_photo_id_check" value="Other" />
                                            <label>Other</label> <span>(specify): <input type="text" name="mother_photoId_other_spacify" <?php echo e($legalinquiry->mother_photoId_other_spacify == '' ? '-' : $legalinquiry->mother_photoId_other_spacify); ?> /></span>
                                        </li>
                                        <input type="hidden" name="mother_form_of_photo_id_check" id="photo_check" />
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
                                                    <input type="text" name="mother_signature" readonly="" disabled="" <?php echo e($legalinquiry->mother_signature == '' ? '-' : $legalinquiry->mother_signature); ?>  />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certify-Date">
                                                    <label>Date:</label>
                                                    <input type="text" readonly="" disabled="" name="mother_date" <?php echo e($legalinquiry->mother_date == '' ? '-' : $legalinquiry->mother_signature); ?>  />
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
                                    <input type="text" readonly="" disabled="" name="child_first_name" style="text-transform: capitalize;"  value="<?php echo e($legalinquiry->child_first_name == '' ? '-' : $legalinquiry->child_first_name); ?>"  />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Last Name<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="child_last_name" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->child_last_name == '' ? '-' : $legalinquiry->child_last_name); ?>" />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Middle Initial<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="child_middle_ini" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->child_middle_ini == '' ? '-' : $legalinquiry->child_middle_ini); ?>" />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Sex</h4>
                                    <input type="checkbox" readonly="" disabled="" class="sex-select" name="child_sex" value="Male <?php echo e($legalinquiry->child_sex == 'Male' ? 'checked' : ''); ?>"/>
                                    <label>Male </label>
                                    <input type="checkbox" readonly="" disabled="" class="sex-select" name="child_sex" value="Female <?php echo e($legalinquiry->child_sex == 'Female' ? 'checked' : ''); ?>"/>
                                    <label>Female </label>
                                </div>
        
                                <input type="hidden" name="child_sex" id="sex_check" />
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="birth-table">
                                    <h4>Date of Birth</h4>
                                    <input type="text" readonly="" disabled="" name="child_dob" value=" <?php echo e($legalinquiry->child_dob == '' ? '-' : $legalinquiry->child_dob); ?>"  />
                                </div>
                            </td>
                            <td>
                                <div class="birth-table">
                                    <h4>SSN Last 4 Digits</h4>
                                    <input type="text" readonly="" disabled="" name="child_ssn_digits" value=" <?php echo e($legalinquiry->child_ssn_digits == '' ? '-' : $legalinquiry->child_ssn_digits); ?>" />
                                </div>
                            </td>
                            <td rowspan="2" colspan="2">
                                <div class="table-History">
                                    <h4>Client History:<span>(Please check applicable)</span></h4>
                                    <ul>
                                        <li>
                                            <h3>
                                                Have you had a blood transfusion within the past 3 months?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" class="blood-tranfusion-select" name="child_blood_transfusion_within_the_past_three_months" value="Yes" <?php echo e($legalinquiry->child_blood_transfusion_within_the_past_three_months == 'Yes' ? 'checked' : ''); ?>/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" class="blood-tranfusion-select" name="child_blood_transfusion_within_the_past_three_months" value="No" <?php echo e($legalinquiry->child_blood_transfusion_within_the_past_three_months == 'No' ? 'checked' : ''); ?>/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                            <input type="hidden" name="child_blood_transfusion_within_the_past_three_months" id="blood_transfusion" />
                                        </li>
                                        <li>
                                            <h3>
                                                Have you ever had a bone marrow or stem cell transplant?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" class="bone-marrow-select" name="child_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php echo e($legalinquiry->child_had_a_bone_marrow_or_stem_cell_transplant == 'Yes' ? 'checked' : ''); ?> />
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" class="bone-marrow-select" name="child_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php echo e($legalinquiry->child_had_a_bone_marrow_or_stem_cell_transplant == 'No' ? 'checked' : ''); ?> />
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                            <input type="hidden" name="child_had_a_bone_marrow_or_stem_cell_transplant" id="bone_marrow_transplant" />
                                        </li>
                                        <li>
                                            <h3>
                                                Have you previously participated in a parentage test?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" class="participated_percntge" name="child_hve_you_previously_participated_in_a_parentage_test" value="Yes" <?php echo e($legalinquiry->child_hve_you_previously_participated_in_a_parentage_test == 'Yes' ? 'checked' : ''); ?>/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" class="participated_percntge" name="child_hve_you_previously_participated_in_a_parentage_test" value="No" <?php echo e($legalinquiry->child_hve_you_previously_participated_in_a_parentage_test == 'No' ? 'checked' : ''); ?>/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                            <input type="hidden" name="child_hve_you_previously_participated_in_a_parentage_test" id="partcpt_test" />
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
                                            <input type="checkbox" readonly="" disabled="" name="child_race " value="Caucasian" <?php echo e($legalinquiry->child_race == 'Caucasian' ? 'checked' : ''); ?> />
                                            <label>Caucasian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_race" value=" Native-American" <?php echo e($legalinquiry->child_race == 'Native-American' ? 'checked' : ''); ?>/>
                                            <label> Native American</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_race" value="Hispanic" <?php echo e($legalinquiry->child_race == 'Hispanic' ? 'checked' : ''); ?> />
                                            <label>Hispanic</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_race" value="Black" <?php echo e($legalinquiry->child_race == 'Black' ? 'checked' : ''); ?>/>
                                            <label>Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_race" value="Asian" <?php echo e($legalinquiry->child_race == 'Asian' ? 'checked' : ''); ?>/>
                                            <label>Asian</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_race" value="Other" />
                                            <label>
                                                Other <span>(specify): <input type="text" readonly="" disabled="" name="child_other_spacify" <?php echo e($legalinquiry->child_other_spacify == '' ? '-' : $legalinquiry->child_other_spacify); ?> /></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="table-photo">
                                    <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_form_of_photo_id_check" value="Driver's License" <?php echo e($legalinquiry->child_form_of_photo_id_check == "Driver's License" ? 'checked' : ''); ?> />
                                            <label>Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_form_of_photo_id_check" value="Military ID" <?php echo e($legalinquiry->child_form_of_photo_id_check == "Military ID" ? 'checked' : ''); ?> />
                                            <label>Military ID</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="child_form_of_photo_id_check" value="Other" <?php echo e($legalinquiry->child_form_of_photo_id_check == "Other" ? 'checked' : ''); ?> />
                                            <label>Other</label> <span>(specify): <input type="text" name="child_photoId_other_spacify" /></span>
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
                                                    <input type="text" readonly="" disabled="" name="custodian_signature" <?php echo e($legalinquiry->custodian_signature == '' ? '-' : $legalinquiry->custodian_signature); ?> />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certify-Date">
                                                    <label>Date:</label>
                                                    <input type="text" readonly="" disabled="" name="custodian_date" <?php echo e($legalinquiry->custodian_date == '' ? '-' : $legalinquiry->custodian_date); ?> />
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
                                    <input type="text" readonly="" disabled="" name="alleged_father_first_name" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->alleged_father_first_name == '' ? '-' : $legalinquiry->alleged_father_first_name); ?> "/>
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Last Name<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="alleged_father_last_name" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->alleged_father_last_name == '' ? '-' : $legalinquiry->alleged_father_last_name); ?> "/>
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Middle Initial<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="alleged_father_middle_ini" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->alleged_father_middle_ini == '' ? '-' : $legalinquiry->alleged_father_middle_ini); ?> "/>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="birth-table">
                                    <h4>Date of Birth</h4>
                                    <input type="text" readonly="" disabled="" name="alleged_father_dob" value=" <?php echo e($legalinquiry->alleged_father_dob == '' ? '-' : $legalinquiry->alleged_father_dob); ?> "/>
                                </div>
                            </td>
                            <td>
                                <div class="birth-table">
                                    <h4>SSN Last 4 Digits</h4>
                                    <input type="text" readonly="" disabled="" name="alleged_father_ssn" value=" <?php echo e($legalinquiry->alleged_father_ssn == '' ? '-' : $legalinquiry->alleged_father_ssn); ?> "/>
                                </div>
                            </td>
                            <td rowspan="2">
                                <div class="table-History">
                                    <h4>Client History:<span>(Please check applicable)</span></h4>
                                    <ul>
                                        <li>
                                            <h3>
                                                Have you had a blood transfusion within the past 3 months?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_blood_transfusion_within_the_past_three_months" value="Yes <?php echo e($legalinquiry->alleged_father_blood_transfusion_within_the_past_three_months == 'Yes' ? 'checked' : ''); ?> "/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_blood_transfusion_within_the_past_three_months" value="No <?php echo e($legalinquiry->alleged_father_blood_transfusion_within_the_past_three_months == 'No' ? 'checked' : ''); ?> "/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you ever had a bone marrow or stem cell transplant?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_had_a_bone_marrow_or_stem_cell_transplant" value="Yes  <?php echo e($legalinquiry->alleged_father_had_a_bone_marrow_or_stem_cell_transplant == 'Yes' ? 'checked' : ''); ?> "/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_had_a_bone_marrow_or_stem_cell_transplant" value="No  <?php echo e($legalinquiry->alleged_father_had_a_bone_marrow_or_stem_cell_transplant == 'No' ? 'checked' : ''); ?> "/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you previously participated in a parentage test?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_hve_you_previously_participated_parentage_test" value="Yes <?php echo e($legalinquiry->alleged_father_hve_you_previously_participated_parentage_test == 'Yes' ? 'checked' : ''); ?> "/>
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="alleged_father_hve_you_previously_participated_parentage_test" value="No <?php echo e($legalinquiry->alleged_father_hve_you_previously_participated_parentage_test == 'No' ? 'checked' : ''); ?> "/>
                                                    <label>No</label>
                                                </span>
                                            </h3>
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
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value="Caucasian" <?php echo e($legalinquiry->alleged_father_race == 'Caucasian' ? 'checked' : ''); ?>/>
                                            <label>Caucasian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value=" Native-American" <?php echo e($legalinquiry->alleged_father_race == ' Native-American' ? 'checked' : ''); ?>/>
                                            <label> Native American</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value="Hispanic" <?php echo e($legalinquiry->alleged_father_race == 'Hispanic' ? 'checked' : ''); ?> />
                                            <label>Hispanic</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value="Black" <?php echo e($legalinquiry->alleged_father_race == 'Black' ? 'checked' : ''); ?> />
                                            <label>Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value="Asian" <?php echo e($legalinquiry->alleged_father_race == 'Asian' ? 'checked' : ''); ?> />
                                            <label>Asian</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_race" value="Other" <?php echo e($legalinquiry->alleged_father_race == 'Other' ? 'checked' : ''); ?> />
                                            <label>
                                                Other <span>(specify): <input type="text" readonly="" disabled="" name="alleged_father_other_spacify_race" <?php echo e($legalinquiry->alleged_father_other_spacify_race == '' ? '-' : $legalinquiry->alleged_father_other_spacify_race); ?>  /></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="table-photo">
                                    <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_form_of_photo_id_check" value="Driver's License" <?php echo e($legalinquiry->alleged_father_form_of_photo_id_check == "Driver's License" ? 'checked' : ''); ?> />
                                            <label>Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_form_of_photo_id_check" value="Military ID" <?php echo e($legalinquiry->alleged_father_form_of_photo_id_check == 'Military ID' ? 'checked' : ''); ?> />
                                            <label>Military ID</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="alleged_father_form_of_photo_id_check" value="Other" <?php echo e($legalinquiry->alleged_father_form_of_photo_id_check == 'Other' ? 'checked' : ''); ?> />
                                            <label>Other</label> <span>(specify): <input type="text" name="alleged_father_other_spacify_photoid" /></span>
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
                                                    <input type="text" readonly="" disabled="" name="alleged_father_signature" <?php echo e($legalinquiry->alleged_father_signature == '' ? '-' : $legalinquiry->alleged_father_signature); ?> />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certify-Date">
                                                    <label>Date:</label>
                                                    <input type="text" readonly="" disabled="" name="alleged_father_date" <?php echo e($legalinquiry->alleged_father_date == '' ? '-' : $legalinquiry->alleged_father_date); ?> />
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
                                    <input type="text" readonly="" disabled="" name="additional_party_first_name" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->additional_party_first_name == '' ? '-' : $legalinquiry->additional_party_first_name); ?>" />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Last Name<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="additional_party_last_name" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->additional_party_last_name == '' ? '-' : $legalinquiry->additional_party_last_name); ?>" />
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Middle Initial<span> (Please print clearly)</span></h4>
                                    <input type="text" readonly="" disabled="" name="additional_party_middle_ini" style="text-transform: capitalize;" value=" <?php echo e($legalinquiry->additional_party_middle_ini == '' ? '-' : $legalinquiry->additional_party_middle_ini); ?> "/>
                                </div>
                            </th>
                            <th>
                                <div class="table-first">
                                    <h4>Sex</h4>
                                    <input type="checkbox" readonly="" disabled="" name="additional_party_sex" value="Male" value=" <?php echo e($legalinquiry->additional_party_sex == 'Male' ? 'checked' : ''); ?>" />
                                    <label>Male </label>
                                    <input type="checkbox" readonly="" disabled="" name="additional_party_sex" value="Female" <?php echo e($legalinquiry->additional_party_sex == 'Female' ? 'checked' : ''); ?> />
                                    <label>Female </label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="birth-table">
                                    <h4>Date of Birth</h4>
                                    <input type="text" readonly="" disabled="" name="additional_party_dob" value=" <?php echo e($legalinquiry->additional_party_dob == '' ? '-' : $legalinquiry->additional_party_dob); ?>" />
                                </div>
                            </td>
                            <td>
                                <div class="birth-table">
                                    <h4>SSN Last 4 Digits</h4>
                                    <input type="text" readonly="" disabled="" name="additional_party_ssn" value=" <?php echo e($legalinquiry->additional_party_ssn == '' ? '-' : $legalinquiry->additional_party_ssn); ?> "/>
                                </div>
                            </td>
                            <td rowspan="2" colspan="2">
                                <div class="table-History">
                                    <h4>Client History:<span>(Please check applicable)</span></h4>
                                    <ul>
                                        <li>
                                            <h3>
                                                Have you had a blood transfusion within the past 3 months?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_blood_transfusion_within_the_past_three_months" value="Yes" <?php echo e($legalinquiry->additional_party_blood_transfusion_within_the_past_three_months == 'Yes' ? 'checked' : ''); ?> />
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_blood_transfusion_within_the_past_three_months" value="No" <?php echo e($legalinquiry->additional_party_blood_transfusion_within_the_past_three_months == 'No' ? 'checked' : ''); ?> />
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you ever had a bone marrow or stem cell transplant?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_had_a_bone_marrow_or_stem_cell_transplant" value="Yes" <?php echo e($legalinquiry->additional_party_had_a_bone_marrow_or_stem_cell_transplant == 'Yes' ? 'checked' : ''); ?> />
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_had_a_bone_marrow_or_stem_cell_transplant" value="No" <?php echo e($legalinquiry->additional_party_had_a_bone_marrow_or_stem_cell_transplant == 'No' ? 'checked' : ''); ?> />
                                                    <label>No</label>
                                                </span>
                                            </h3>
                                        </li>
                                        <li>
                                            <h3>
                                                Have you previously participated in a parentage test?
                                                <span>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_hve_you_previously_participated_parentage_test" value="Yes" <?php echo e($legalinquiry->additional_party_hve_you_previously_participated_parentage_test == 'Yes' ? 'checked' : ''); ?> />
                                                    <label>Yes</label>
                                                    <input type="checkbox" readonly="" disabled="" name="additional_party_hve_you_previously_participated_parentage_test" value="No" <?php echo e($legalinquiry->additional_party_hve_you_previously_participated_parentage_test == 'No' ? 'checked' : ''); ?> />
                                                    <label>No</label>
                                                </span>
                                            </h3>
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
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Caucasian"  <?php echo e($legalinquiry->additional_party_race == 'Caucasian' ? 'checked' : ''); ?> />
                                            <label>Caucasian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Native American" <?php echo e($legalinquiry->additional_party_race == 'Native American' ? 'checked' : ''); ?> />
                                            <label> Native American</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Hispanic" <?php echo e($legalinquiry->additional_party_race == 'Hispanic' ? 'checked' : ''); ?> />
                                            <label>Hispanic</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Black" <?php echo e($legalinquiry->additional_party_race == 'Black' ? 'checked' : ''); ?> />
                                            <label>Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Asian" <?php echo e($legalinquiry->additional_party_race == 'Asian' ? 'checked' : ''); ?> />
                                            <label>Asian</label>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_race" value="Other" <?php echo e($legalinquiry->additional_party_race == 'Other' ? 'checked' : ''); ?> />
                                            <label>
                                                Other <span>(specify): <input type="text" readonly="" disabled="" name="additional_party_additional_party_race_other_spacify" /></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="table-photo">
                                    <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
                                    <ul>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_additional_party_photoid" value="Driver's License" <?php echo e($legalinquiry->additional_party_additional_party_photoid == "Driver's License" ? 'checked' : ''); ?> />
                                            <label>Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_additional_party_photoid" value="Military ID" <?php echo e($legalinquiry->additional_party_additional_party_photoid == "Military ID" ? 'checked' : ''); ?> />
                                            <label>Military ID</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" readonly="" disabled="" name="additional_party_additional_party_photoid" value="Other" <?php echo e($legalinquiry->additional_party_additional_party_photoid == "Other" ? 'checked' : ''); ?> />
                                            <label>Other</label> <span>(specify): <input type="text" name="additional_party_additional_party_photoid_other_spacify" /></span>
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
                                                    <input type="text" readonly="" disabled="" name="additional_party_signature" <?php echo e($legalinquiry->additional_party_signature == '' ? '-' : $legalinquiry->additional_party_signature); ?> />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certify-Date">
                                                    <label>Date:</label>
                                                    <input type="text" readonly="" disabled="" name="additional_party_date" value="<?php echo e($legalinquiry->additional_party_date == '' ? '-' : $legalinquiry->additional_party_date); ?> "/>
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
                            <p>
                                I certify that I have properly identified the parties and have collected, packaged and sealed the specimen(s) and have witnessed the signatures. I affirm, under penalties for perjury, that no tampering with the
                                specimen(s) occurred while under my control.
                            </p>
                            <div class="signature"><label>Collector's Signature:</label><input type="text" disabled="" /></div>
                            <div class="collector-name">
                                <label>Collector's <span>(Printed Name):</span></label><input class="legal-name" disabled="" type="text" placeholder=" Al Markoos" name="" />
                            </div>
                            <div class="collect-date">
                                <div class="date"><label>Collection Date:</label><input disabled="" type="text" name="" /></div>
                                <div class="timee">
                                    <label>Time:<input disabled="" type="text" name="" /></label>
                                </div>
                                <div class="time">
                                    <label><input type="checkbox" disabled="" />AM</label>
                                    <label><input type="checkbox" disabled="" />PM</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="statment">
                            <h5>Collection Facility Information</h5>
                            <p>(If different from address above)</p>
                            <div class="facility"><label>Facility:</label><input type="text" disabled="" /></div>
                            <div class="facility"><label>Address:</label><input type="text" disabled="" /></div>
                            <div class="facility"><label>C/S/Zip:</label><input type="text" disabled="" /></div>
                            <div class="facility"><label>Phone:</label><input type="text" disabled="" /></div>
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
                            <input type="text" readonly="" disabled="" name="mother_contact_info_address" value="<?php echo e($legalinquiry->mother_contact_info_address == '' ? '-' : $legalinquiry->mother_contact_info_address); ?> "/> 
                        </div>
                        <div class="address-inr">
                            <input type="text" />
                        </div>
                        <div class="phone">
                            <label>Phone:</label>
                            <input type="text" readonly="" disabled="" name="mother_contact_info_phone" value="<?php echo e($legalinquiry->mother_contact_info_phone == '' ? '-' : $legalinquiry->mother_contact_info_phone); ?> "/> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="zipp">
                            <label>C/S/ZIP:</label>
                            <input type="text" readonly="" disabled="" name="mother_contact_info_zip" value="<?php echo e($legalinquiry->mother_contact_info_zip == '' ? '-' : $legalinquiry->mother_contact_info_zip); ?> "/> 
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
                            <input type="text" readonly="" disabled="" name="alleged_father_address" value="<?php echo e($legalinquiry->alleged_father_address == '' ? '-' : $legalinquiry->alleged_father_address); ?> "/>
                        </div>
                        <div class="address-inr">
                            <input type="text" />
                        </div>
                        <div class="phone">
                            <label>Phone:</label>
                            <input type="text" readonly="" disabled="" name="alleged_father_phone" value="<?php echo e($legalinquiry->alleged_father_phone == '' ? '-' : $legalinquiry->alleged_father_phone); ?> "/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="zipp">
                            <label>C/S/ZIP:</label>
                            <input type="text" readonly="" disabled="" name="alleged_father_zip" value="<?php echo e($legalinquiry->alleged_father_zip == '' ? '-' : $legalinquiry->alleged_father_zip); ?> "/>
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
                            <input type="text" readonly="" disabled="" name="additional_child_address" value="<?php echo e($legalinquiry->additional_child_address == '' ? '-' : $legalinquiry->additional_child_address); ?> "/>
                        </div>
                        <div class="address-inr">
                            <input type="text"  readonly="" disabled="" name="additional_child_phone" />
                        </div>
                        <div class="phone">
                            <label>Phone:</label>
                            <input type="text" name="additional_child_phone" readonly="" disabled="" value="<?php echo e($legalinquiry->additional_child_phone == '' ? '-' : $legalinquiry->additional_child_phone); ?> "/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="zipp">
                            <label>C/S/ZIP:</label>
                            <input type="text" name="additional_contact_info_zip" readonly="" disabled="" value="<?php echo e($legalinquiry->additional_contact_info_zip == '' ? '-' : $legalinquiry->additional_contact_info_zip); ?> "/>
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
                        <li>I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
                        <li>I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
                        <li>I understand that the biological specimens will be used for genetic testing and may be stored for future testing.</li>
                        <li>If this test involves a person who is a minor or who is otherwise legally incapable of consenting, I attest that I have the legal authority to consent to testing and assume all legal responsibility.</li>
                        <li>I witnessed the labeling of my name and/or individual’s name I am consenting for on the envelope/tube or package containing the specimen</li>
                        <li>
                            I acknowledge and agree that the laboratory's liability to me arising out of or in any way related to the provision of testing services contemplated herein shall not exceed the cost of the test, and I agree to indemnify,
                            defend, and hold DDC, its officers, agents, employees, representatives and any persons or entities collecting specimens harmless from all further claims or damages.
                        </li>
                        <li>
                            I acknowledge and understand that if for any reason the biological specimen is inadequate for evaluation, DDC or the entities collecting specimensshall not be held liable if it is unable to produce test results due to
                            insufficient specimen or due to the nature or condition of the specimen. DDC may request additional samples.
                        </li>
                        <li>
                            I understand that to ensure testing of the highest quality, DDC reserves the right to perform more testing to satisfy strict laboratory standards and guidelines. If this process delays the reporting of results, I will
                            not hold DDC or the entities collecting specimens liable for any refund or damages.
                        </li>
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
                                    <div class="multiple-opt"><input type="checkbox" disabled="" /><label>Yes</label> <input type="checkbox" disabled="" /><label>No</label></div>
                                </div>
                                <div class="confirmation">
                                    <p>
                                        I hereby affirm that I received the specimens for the individuals named on this form and found no evidence that the specimens had been tampered with or that the package had been opened prior to our receipt.
                                    </p>
                                </div>
                                <div class="recive-by">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Received By<span>(Printed Name):</span></label><input type="text" disabled="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="collect-date">
                                        <div class="signaturee"><label>Reciptent Signature:</label><input type="text" name="" disabled="" /></div>
                                        <div class="date">
                                            <label>Date:<input type="text" name="" disabled="" /></label>
                                        </div>
                                        <div class="timee">
                                            <label>Time:<input type="text" name="" disabled="" /></label>
                                        </div>
                                        <div class="time-inr">
                                            <label><input type="checkbox" disabled="" />AM</label>
                                            <label><input type="checkbox" disabled="" />PM</label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="labortory-notes">
                                    <div class="notes">
                                        <label>Laboratory Notes:</label>
                                        <input type="text" disabled="" />
                                    </div>
                                    <div class="note-input">
                                        <input type="text" disabled="" />
                                        <input type="text" disabled="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>

    </div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    $("input[type=text]").prop("readonly", true);

    $("input[type=number]").prop("readonly", true);

});

function CreatePDFfromHTML() {

    var HTML_Width = $(".mainDiv").width();
    var HTML_Height = $(".mainDiv").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + top_left_margin * 2;
    var PDF_Height = PDF_Width * 1.5 + top_left_margin * 2;
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;
    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".mainDiv")[0], {
        scale:3, logging: false
        }).then(function (canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF("p", "pt", [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, "JPG", top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, "JPG", top_left_margin, -(PDF_Height * i) + top_left_margin * 4, canvas_image_width, canvas_image_height);
            }
        pdf.save("legal Inquiry.pdf");
        //$(".html-content").hide();
    });
}

</script>

<?php $__env->startSection('js'); ?>

<?php echo $__env->make('web.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?><?php /**PATH D:\Malaika\dna_update_4\dna_update_4\resources\views/web/edit_legal_invoice.blade.php ENDPATH**/ ?>