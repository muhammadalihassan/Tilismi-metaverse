<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid" style="padding-top: 10px; padding-left: 20px; ">
  
   <button type="button" class="btn btn-dark" onclick="CreatePDFfromHTML()">Download PDF</button>

  

</div>

<section class="testform-sec">
 
      <div class="container">
          <div class="row">
              
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <p><!-- Please complete and submit Your testing party's information.The name and information you provide on this Form will be used on your Test results.  --></p>
                      <div class="user-basic">
       <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" value="<?php echo e($nonlegalInquiry->client_name); ?>" /></label>
            <label>Address:<input type="text" style="text-transform: capitalize;" name="address" value="<?php echo e($nonlegalInquiry->address); ?>"/></label>
             <div class="Apt"><label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" value="<?php echo e($nonlegalInquiry->apt_unit); ?>"/></label></div>
      <label>City/State:<input type="text" id="city_state" name="city_state" value="<?php echo e($nonlegalInquiry->city_state); ?>" /></label>
        <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" value="<?php echo e($nonlegalInquiry->zip); ?>"/></div>
   <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" value="<?php echo e($nonlegalInquiry->country); ?>" /></label>
         <label>Phone:<input type="text" id="phonnumber" name="phonenumber" value="<?php echo e($nonlegalInquiry->phonenumber); ?>"/></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
            <input type="text" id="alleged_father" name="alleged_father_name" value="<?php echo e($nonlegalInquiry->alleged_father_name); ?>"/>
                          </div>
          <label>DOB:<input type="text" id="alleged_father_dob" name="alleged_father_dob" value="<?php echo e($nonlegalInquiry->alleged_father_dob == '' ? '-' : $nonlegalInquiry->alleged_father_dob); ?>"/></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
             <input type="text" id="child1_name" name="child1_name" value="<?php echo e($nonlegalInquiry->child1_name == '' ? '-' : $nonlegalInquiry->child1_name); ?>"/>
                              </div>
                            
         <label>DOB:<input type="text" id="child1_dob" name="child1_dob" value="<?php echo e($nonlegalInquiry->child1_dob == '' ? '-' : $nonlegalInquiry->child1_dob); ?>"/></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
              <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" value="<?php echo e($nonlegalInquiry->child2_name); ?>"/></div>
                              <label>DOB:<input type="text" id="child2_dob" name="child2_dob" value="<?php echo e($nonlegalInquiry->child2_dob == '' ? '-' : $nonlegalInquiry->child2_dob); ?>" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                        <h6 class="client-name">Type of Test</h6>
       <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" <?php echo e($nonlegalInquiry->paternity_trio == 'Paternity Trio' ? 'checked' : ''); ?> />Paternity Trio</label>
           <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" <?php echo e($nonlegalInquiry->paternity_motherless == 'Paternity Motherless' ? 'checked' : ''); ?>/>Paternity Motherless</label>
                              <div class="additional-child">
       <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" <?php echo e($nonlegalInquiry->additional_af_chck == 'Additional AF(s)' ? 'checked' : ''); ?> />Additional AF(s)</label>
            <input type="text" class="inputt" id="additional_af" name="additional_af" value="<?php echo e($nonlegalInquiry->additional_af); ?>"/>
                              </div>
                              <div class="additional-child">
          <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" <?php echo e($nonlegalInquiry->additional_child == 'Additional Child(ren)' ? 'checked' : ''); ?> />Additional Child(ren)</label>
            <input type="text" class="inputt" id="additional_child" name="additional_child" value="<?php echo e($nonlegalInquiry->additional_child); ?>"/>
                              </div>
         <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" <?php echo e($nonlegalInquiry->maternity_check == 'Maternity' ? 'checked' : ''); ?> />Maternity</label>

        <label><input type="checkbox" id="other" name="other_check" value="Other" <?php echo e($nonlegalInquiry->maternity_check == 'Other' ? 'checked' : ''); ?> />Other<input type="text" class="inputt" id="other" name="other" value="<?php echo e($nonlegalInquiry->other); ?>" /></label>
                              
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="client-form" id="client_form">
                    <h5>Client Information Form</h5>
                    <div class="user-basic">
     <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" value="<?php echo e($nonlegalInquiry->client_name); ?>" /></label>
   <label>Address:<input type="text" style="text-transform: capitalize;" name="address" value="<?php echo e($nonlegalInquiry->address); ?>" /></label>
      <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" value="<?php echo e($nonlegalInquiry->apt_unit); ?>" /></label>
     <label>City/State:<input type="text" id="city_state" name="city_state"  value="<?php echo e($nonlegalInquiry->city_state); ?>" /></label>
     <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip"  value="<?php echo e($nonlegalInquiry->zip); ?>"/></div>
         <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country"  value="<?php echo e($nonlegalInquiry->country); ?>"/></label>
         <label>Phone:<input type="text" id="phonenumber" name="phonenumber" value="<?php echo e($nonlegalInquiry->phonenumber); ?>" /></label>
                    </div>
                    <div class="testedparty-frm">
                        <h6 class="client-name">Tested Party Information</h6>
                        <div class="alleged-father">
                            <label>Alleged Father Name:</label>
                            <input type="text" id="alleged_father" name="alleged_father_name" value="<?php echo e($nonlegalInquiry->alleged_father_name); ?>" />
                        </div>
                        <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" value="<?php echo e($nonlegalInquiry->alleged_father_dob == '' ? '-' : $nonlegalInquiry->alleged_father_dob); ?>" /></label>
                        <!--             <label>Race:<input type="text"></label>-->
                        <div class="first-child">
                            <div class="child1-name">
                                <label>Child1 Name:</label>
                                <input type="text" id="child1_name" name="child1_name" value="<?php echo e($nonlegalInquiry->child1_name == '' ? '-' : $nonlegalInquiry->child1_name); ?>" />
                            </div>
       <label>DOB:<input type="date" id="child1_dob" name="child1_dob" value="<?php echo e($nonlegalInquiry->child1_dob == '' ? '-' : $nonlegalInquiry->child1_dob); ?>" /></label>
                            <!--             <label>Race:<input type="text"></label>-->
                        </div>
                        <div class="second-child">
           <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" value="<?php echo e($nonlegalInquiry->child2_name); ?>" /></div>
      <label>DOB:<input type="date" id="child2_dob" name="child2_dob" value="<?php echo e($nonlegalInquiry->child2_dob == '' ? '-' : $nonlegalInquiry->child2_dob); ?>" /></label>
                            <!--             <label>Race:<input type="text"></label>-->
                        </div>
                        <div class="type-test">
                            <h6 class="client-name">Type of Test</h6>
        <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" value="Paternity Trio" <?php echo e($nonlegalInquiry->paternity_trio == 'Paternity Trio' ? 'checked' : ''); ?> />Paternity Trio</label>
       <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" <?php echo e($nonlegalInquiry->paternity_motherless == 'Paternity Motherless' ? 'checked' : ''); ?> />Paternity Motherless</label>
                          <div class="additional-child">
     <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" <?php echo e($nonlegalInquiry->additional_af_chck == 'Additional AF(s)' ? 'checked' : ''); ?> />Additional AF(s)</label>
         <input type="text" class="inputt" id="additional_af" name="additional_af" value="<?php echo e($nonlegalInquiry->additional_af); ?>" />
                            </div>
                            <div class="additional-child">
            <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" <?php echo e($nonlegalInquiry->additional_child == 'Additional Child(ren)' ? 'checked' : ''); ?> />Additional Child(ren)</label>
                    <input type="text" class="inputt" id="additional_child" name="additional_child" value="<?php echo e($nonlegalInquiry->additional_child); ?>" />
                            </div>
                       <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" <?php echo e($nonlegalInquiry->maternity_check == 'Maternity' ? 'checked' : ''); ?> />Maternity</label>
          <label><input type="checkbox" id="other" name="other_check" value="Other" <?php echo e($nonlegalInquiry->maternity_check == 'Other' ? 'checked' : ''); ?> />Other<input type="text" class="inputt" id="other" name="other"  value="<?php echo e($nonlegalInquiry->other); ?>"/></label>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="client-form" id="client_form">
                      <h5>Client Information Form</h5>
                      <div class="user-basic">
       <label><span class="client-name">Name:</span><input type="text" id="client_name" style="text-transform: capitalize;" name="client_name" value="<?php echo e($nonlegalInquiry->client_name); ?>" /></label>
         <label>Address:<input type="text" style="text-transform: capitalize;" name="address" value="<?php echo e($nonlegalInquiry->address); ?>"/></label>
       <label>Bldg. # Apt #, Unit #, Or / NA:<input type="text" style="text-transform: capitalize;" name="apt_unit" id="apt_unit" value="<?php echo e($nonlegalInquiry->apt_unit); ?>" /></label>
        <label>City/State:<input type="text" id="city_state" name="city_state"  value="<?php echo e($nonlegalInquiry->city_state); ?>" /></label>
         <div class="zip"><label>Zip/Postal Code:</label><input type="text" id="zip" name="zip" value="<?php echo e($nonlegalInquiry->zip); ?>" /></div>
          <label>Country:<input type="text" style="text-transform: capitalize;" id="country" name="country" value="<?php echo e($nonlegalInquiry->country); ?>" /></label>
         <label>Phone:<input type="text" id="phonnumber" name="phonenumber" value="<?php echo e($nonlegalInquiry->phonenumber); ?>" /></label>
                      </div>
                      <div class="testedparty-frm">
                          <h6 class="client-name">Tested Party Information</h6>
                          <div class="alleged-father">
                              <label>Alleged Father Name:</label>
       <input type="text" id="alleged_father" name="alleged_father_name" value="<?php echo e($nonlegalInquiry->alleged_father_name); ?>" />
                          </div>
                          <label>DOB:<input type="date" id="alleged_father_dob" name="alleged_father_dob" value="<?php echo e($nonlegalInquiry->alleged_father_dob == '' ? '-' : $nonlegalInquiry->alleged_father_dob); ?>" /></label>
                          <!--             <label>Race:<input type="text"></label>-->
                          <div class="first-child">
                              <div class="child1-name">
                                  <label>Child1 Name:</label>
                                  <input type="text" id="child1_name" name="child1_name" value="<?php echo e($nonlegalInquiry->child1_name == '' ? '-' : $nonlegalInquiry->child1_name); ?>" />
                              </div> 
         <label>DOB:<input type="date" id="child1_dob" name="child1_dob" value="<?php echo e($nonlegalInquiry->child1_dob == '' ? '-' : $nonlegalInquiry->child1_dob); ?>" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="second-child">
             <div class="child1-name"><label>Child2 Name:</label><input type="text" id="child2_name" name="child2_name" value="<?php echo e($nonlegalInquiry->child2_name); ?>" /></div>
         <label>DOB:<input type="date" id="child2_dob" name="child2_dob" value="<?php echo e($nonlegalInquiry->child2_dob == '' ? '-' : $nonlegalInquiry->child2_dob); ?>" /></label>
                              <!--             <label>Race:<input type="text"></label>-->
                          </div>
                          <div class="type-test">
                              <h6 class="client-name">Type of Test</h6>
       <label><input type="checkbox" id="paternity_trio" name="paternity_trio" value="Paternity Trio" <?php echo e($nonlegalInquiry->paternity_trio == 'Paternity Trio' ? 'checked' : ''); ?> />Paternity Trio</label>
         <label><input type="checkbox" id="paternity_motherless" name="paternity_motherless" value="Paternity Motherless" <?php echo e($nonlegalInquiry->paternity_motherless == 'Paternity Motherless' ? 'checked' : ''); ?> />Paternity Motherless</label>
                              <div class="additional-child">
         <label><input type="checkbox" id="additional_af" name="additional_af_chck" value="Additional AF(s)" <?php echo e($nonlegalInquiry->additional_af_chck == 'Additional AF(s)' ? 'checked' : ''); ?> />Additional AF(s)</label>
                        <input type="text" class="inputt" id="additional_af" name="additional_af" value="<?php echo e($nonlegalInquiry->additional_af); ?>" />
                              </div>
                              <div class="additional-child">
              <label><input type="checkbox" id="additional_child_chk" name="additional_child" value="Additional Child(ren)" <?php echo e($nonlegalInquiry->additional_child == 'Additional Child(ren)' ? 'checked' : ''); ?> />Additional Child(ren)</label>
             <input type="text" class="inputt" id="additional_child" name="additional_child" value="<?php echo e($nonlegalInquiry->additional_child); ?>" />
                              </div>
                         <label><input type="checkbox" id="maternity" name="maternity_check" value="Maternity" value="Maternity" <?php echo e($nonlegalInquiry->maternity_check == 'Maternity' ? 'checked' : ''); ?> />Maternity</label>
                              <label><input type="checkbox" id="other" name="other_check" value="Other" <?php echo e($nonlegalInquiry->maternity_check == 'Other' ? 'checked' : ''); ?> />Other<input type="text" class="inputt" id="other" name="other"  value="<?php echo e($nonlegalInquiry->other); ?>"/></label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
       
      </div>
  
</section>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<script>

$(document).ready(function() {

    $("input[type=text]").prop("readonly", true);

    $("input[type=number]").prop("readonly", true);
  
});

function CreatePDFfromHTML() {
    var HTML_Width = $(".testform-sec").width();
    var HTML_Height = $(".testform-sec").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + top_left_margin * 2;
    var PDF_Height = PDF_Width * 1.5 + top_left_margin * 2;
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    

    html2canvas($(".testform-sec")[0], {
        scale:3, logging: false,
        }).then(function (canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF("p", "pt" ,[PDF_Width, PDF_Height]);
            pdf.addImage(imgData, "JPG", top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, "JPG", top_left_margin, -(PDF_Height * i) + top_left_margin * 4, canvas_image_width, canvas_image_height);
            }
        pdf.save("non legal Inquiry.pdf");
        //$(".html-content").hide();
    });
}


</script>

<?php $__env->startSection('js'); ?>

<?php echo $__env->make('web.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/invoice.blade.php ENDPATH**/ ?>