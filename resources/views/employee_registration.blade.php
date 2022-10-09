@extends('layouts.main')
@section('content')  
<!-- START: Main Content-->
<div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
      <div class="col-12  align-self-center">
         <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
            <div class="w-sm-100 mr-auto">
               <h4 class="mb-0">Registration Form</h4>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Breadcrumbs-->
   <!-- START: Card Data-->
   <div class="row">
      <div class="col-12 col-sm-12">
         <div class="row">
            <div class="col-12 col-md-12 mt-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row p-3">
                        <ul class="col-sm-2 nav nav-tabs d-block d-sm-flex mb-4">
                           <li class="nav-item  mb-4">
                              <a class="nav-link p-0 active" data-tabname="tab7" data-toggle="tab" href="#tab7">
                                 <div class="d-flex">
                                    <div class="mr-3 mb-0 h1">1</div>
                                    <div class="media-body align-self-center">
                                       <h6 class="mb-0 text-uppercase font-weight-bold">Basic</h6>
                                       Basic account info
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="nav-item  mb-4">
                              <a class="nav-link p-0" data-tabname="tab8" data-toggle="tab" href="#tab8">
                                 <div class="d-flex">
                                    <div class="mr-3 mb-0 h1">2</div>
                                    <div class="media-body align-self-center">
                                       <h6 class="mb-0 text-uppercase font-weight-bold">Personnel</h6>
                                       Office Account info
                                    </div>
                                 </div>
                              </a>
                           </li>
                           {{--
                           <li class="nav-item mb-4">
                              <a class="nav-link p-0" data-toggle="tab" href="#tab9">
                                 <div class="d-flex">
                                    <div class="mr-3 h1 mb-0">3</div>
                                    <div class="media-body align-self-center">
                                       <h6 class="mb-0 text-uppercase font-weight-bold">Confirmation</h6>
                                       Thanks for information
                                    </div>
                                 </div>
                              </a>
                           </li>
                           --}}
                        </ul>
                        <div class="tab-content col-sm-9">
                           <form class="needs-validation" novalidate method="POST" action="{{route('registration_submit')}}" enctype="multipart/form-data" id="registration">
                              @csrf
                              <div class="tab-pane fade active show" id="tab7">
                                 <div class="form row">
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom01">Full Name <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom01" class="form-control bg-transparent" required name="name" placeholder="" value="{{ old('name') }}">
                                       <small class="form-text">Enter your Full name here.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom02">Username <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom02" class="form-control bg-transparent" name="username" value="{{ old('username') }}" placeholder="">
                                       <small class="form-text">Enter your username here, must be unique one.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom03">Personal Email Address <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="email" id="validationCustom03" class="form-control bg-transparent" name="personal_email" placeholder="" value="{{ old('personal_email') }}">
                                       <small class="form-text">Enter your personal email address here</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom04">Phone Number <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom04" data-inputmask="'mask': '0399-9999999'" class="form-control bg-transparent" name="phonenumber" placeholder="" value="{{ old('phonenumber') }}">
                                       <small class="form-text">Enter your active contact number here.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom05">Emergency Number <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom05" data-inputmask="'mask': '0399-9999999'" pattern=".{12,}" class="form-control bg-transparent" name="emergency_number" placeholder="" value="{{ old('emergency_number') }}">
                                       <small class="form-text">Enter your emergency contact number.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom06">CNIC <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" data-inputmask="'mask': '99999-9999999-9'" id="validationCustom06" class="form-control bg-transparent" name="cnic" placeholder="XXXXX-XXXXXXX-X" value="{{ old('cnic') }}">
                                       <small class="form-text">Enter your valid CNIC number.</small>
                                    </div>
                                    <div class="col-md-12 form-group">
                                       <label for="validationCustom07">Residential Address <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom07" class="form-control bg-transparent" name="residential_address" value="{{ old('residential_address') }}" placeholder="">
                                       <small class="form-text">Enter your current residential address.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom08">Blood Group</label>
                                       <select class="form-control bg-transparent" id="validationCustom08" name="blood_group">
                                          <option value="">Select Blood Group</option>
                                          <option @if(old('blood_group') == 'A+VE') selected="" @endif value="A+VE">A+VE</option>
                                          <option @if(old('blood_group') == 'A-VE') selected="" @endif value="A-VE">A-VE</option>
                                          <option @if(old('blood_group') == 'B+VE') selected="" @endif value="B+VE">B+VE</option>
                                          <option @if(old('blood_group') == 'B-VE') selected="" @endif value="B-VE">B-VE</option>
                                          <option @if(old('blood_group') == 'O+VE') selected="" @endif value="O+VE">O+VE</option>
                                          <option @if(old('blood_group') == 'O-VE') selected="" @endif value="O-VE">O-VE</option>
                                          <option @if(old('blood_group') == 'AB+VE') selected="" @endif value="AB+VE">AB+VE</option>
                                          <option @if(old('blood_group') == 'AB-VE') selected="" @endif value="AB-VE">AB-VE</option>
                                          <option @if(old('blood_group') == '') selected="" @endif value="">Unknown</option>
                                       </select>
                                       <small class="form-text">Choose your blood group.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom09">DOB <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="date" id="validationCustom09" class="form-control bg-transparent" name="dob" max="{{date('Y-m-d' , strtotime('-18 years'))}}" placeholder="" value="{{ old('dob') }}">
                                       <small class="form-text">Select your date of birth.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom10">Gender <span class="text-danger font-weight-bold">*</span></label>
                                       <select class="form-control bg-transparent" id="validationCustom10" name="gender" >
                                          <option value="">Please Select your Gender</option>
                                          <option @if(old('gender') == "male") selected="" @endif value="male">Male</option>
                                          <option @if(old('gender') == "female") selected="" @endif value="female">Female</option>
                                       </select>
                                       <small class="form-text">Select your gender.</small>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for="validationCustom11">Marital Status <span class="text-danger font-weight-bold">*</span></label>
                                       <select class="form-control bg-transparent" name="marital_status" id="validationCustom11">
                                          <option value="">-Select Marital Status-</option>
                                          <option @if(old('marital_status') == 'single') selected="" @endif value="single">Single</option>
                                          <option @if(old('marital_status') == 'married') selected="" @endif value="Married">Married</option>
                                          <option @if(old('marital_status') == 'widowed') selected="" @endif value="Widowed">Widowed</option>
                                          <option @if(old('marital_status') == 'separated') selected="" @endif value="Separated">Separated</option>
                                          <option @if(old('marital_status') == 'divorced') selected="" @endif value="Divorced">Divorced</option>
                                       </select>
                                       <small class="form-text">Your marital status.</small>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="button" data-tabname="tab7" data-tabcome="tab8" class="btn float-right btn-primary nexttab">Next</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="tab8">
                                 <div class="form row">
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom12">Project name <span class="text-danger font-weight-bold">*</span></label>
                                       <select class="form-control bg-transparent" name="project_id" id="validationCustom14">
                                          <option value="">-Select Project-</option>
                                          @foreach($projects as $project)
                                          <option  @if(old('project_id') == $project->id) selected="" @endif value="{{ $project->id }}">{{ $project->name }}</option>
                                          @endforeach
                                       </select>
                                       <small class="form-text">Enter your registered project name.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom12">Employee ID <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="number" name="emp_id" id="validationCustom12" class="form-control bg-transparent" placeholder="" value="{{ old('emp_id') }}">
                                       <small class="form-text">Enter your registered Employee ID.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom13">Office Email Address <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="email" id="validationCustom13" name="email" class="form-control bg-transparent" placeholder="" value="{{ old('email') }}">
                                       <small class="form-text">Enter your office email address.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom14">Designation <span class="text-danger font-weight-bold">*</span></label>
                                       <!--  <input type="text" name="designation" id="validationCustom14" class="form-control bg-transparent" placeholder="" value="{{ old('designation') }}"> -->
                                       <select class="form-control bg-transparent" name="designation" id="validationCustom14">
                                          <option value="">-Select Designation-</option>
                                          @foreach($designations as $designation)
                                          <option  @if(old('designation') == $designation->id) selected="" @endif value="{{ $designation->id }}">{{ $designation->name }}</option>
                                          @endforeach
                                       </select>
                                       <small class="form-text">Enter your current designation.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom15">Department <span class="text-danger font-weight-bold">*</span></label>
                                       <!-- <input type="text" id="validationCustom15" name="department" class="form-control bg-transparent" placeholder="" value="{{ old('department') }}"> -->
                                       <select class="form-control bg-transparent" id="validationCustom15" name="department">
                                          <option value="">-Select Department-</option>
                                          @foreach($departments as $department)
                                          <option  @if(old('department') == $department->id) selected="" @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                          @endforeach
                                       </select>
                                       <small class="form-text">Enter your Department name.</small>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="validationCustom16">Joining Date <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="date" name="join_date" id="validationCustom16" class="form-control bg-transparent" placeholder="" value="{{ old('join_date') }}" max="{{date('Y-m-d')}}" min="2021-03-01">
                                       <small class="form-text">Select your date of joining.</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom17">Reporting Line Manager <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="email" id="validationCustom17" name="reporting_line" class="form-control bg-transparent" placeholder="" value="{{ old('reporting_line') }}">
                                       <small class="form-text">Enter your reporting line person email.</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom27">Bank Account Number <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="text" id="validationCustom27" name="bank_account_number" class="form-control bg-transparent" placeholder="" value="{{ old('bank_account_number') }}">
                                       <small class="form-text">Enter your own bank account number.</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom28">Picture Attach (Avatar) <span class="text-danger font-weight-bold">*</span></label>
                                       <input type="file" id="validationCustom28" accept="image/gif, image/jpeg, image/png" name="avatar" class="form-control bg-transparent">
                                       <small class="form-text">Upload your avatar (Accepts : PNG, JPG, JPEG).</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom29">Document Attach(CNIC) {{-- <span class="text-danger font-weight-bold">*</span> --}}</label>
                                       <input type="file" id="validationCustom29" accept="image/gif, image/jpeg, image/png" name="cnic_file" class="form-control bg-transparent">
                                       <small class="form-text">Upload your CNIC Copy (Accepts : PNG, JPG, JPEG).</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom30">Document Attach(CV) {{-- <span class="text-danger font-weight-bold">*</span> --}}</label>
                                       <input type="file" id="validationCustom30" accept=".doc, .docx, .pdf" name="cv_file" class="form-control bg-transparent">
                                       <small class="form-text">Upload your Resume (Accepts : DOC, PDF).</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="validationCustom31">Document Attach(Last Education)</label>
                                       <input type="file" id="validationCustom31" accept="image/gif, image/jpeg, image/png" name="education_file" class="form-control bg-transparent">
                                       <small class="form-text">Upload your educational document (Accepts : PNG, JPG, JPEG).</small>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                       <div class="custom-control custom-checkbox custom-control-inline"> 
                                          <input type="checkbox" class="custom-control-input" name="company_vehicle" value="has-vehicle" @if(old('v_model_name') == 'has-vehicle') checked="" @endif id="checkfleet">
                                          <label class="custom-control-label checkbox-info outline" for="checkfleet">Company Vehicle (If have any)</label>
                                       </div>
                                    </div>
                                    <div class="row" id="havecar">
                                       <div class="form-group col-md-3">
                                          <label for="validationCustom20">Model name <span class="text-danger font-weight-bold">*</span></label>
                                          <input type="text" name="v_model_name" id="validationCustom20" class="form-control bg-transparent" value="{{ old('v_model_name') }}">
                                          <small class="form-text">Enter your car model name.</small>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label for="validationCustom21">Model year <span class="text-danger font-weight-bold">*</span></label>
                                          <input type="text" name="v_model_year" id="validationCustom21" class="form-control bg-transparent" value="{{ old('v_model_year') }}">
                                          <small class="form-text">Enter your car model year.</small>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label for="validationCustom22">Car Number <span class="text-danger font-weight-bold">*</span></label>
                                          <input type="text" name="v_number_plate" id="validationCustom22" class="form-control bg-transparent" value="{{ old('v_number_plate') }}">
                                          <small class="form-text">Enter your car number.</small>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="button" data-tabname="tab8" data-tabcome="tab7" class="float-left btn btn-primary prevtab">Previous</button>
                                       <button type="button" class="btn float-right btn-primary nexttab" id="submit-form">Submit</button>
                                    </div>
                                    <!-- <div class="d-flex">
                                       <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>
                                       
                                       </div> -->
                                 </div>
                              </div>
                           </form>
                           <div class="tab-pane fade" id="tab9">
                              <div class="form p-5 text-center">
                                 <h3>Thank you !</h3>
                                 <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                 <button type="button" class="btn btn-primary prevtab">Previous</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Card DATA-->
</div>
<!-- END: Content-->
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
<script type="text/javascript">
   $("#havecar").hide();
   $("#tab8").css("display" , "none")
   $(".nav-link").click(function(){
       var tab_name = $(this).data("tabname");
       $(".tab-pane").css("display" , "none")
       $("#"+tab_name).css("display" , "block")
   })
   
   $("#checkfleet").click(function(){
       if ($(this).prop('checked')==true){ 
           $("#havecar").show();
       }else{
           $("#havecar").hide();
       }
   })
   
   @if ($errors->any())
       @foreach ($errors->all() as $error)
           toastr.error("{{ $error }}");
       @endforeach
   @endif
   
   $("#submit-form").click(function(){
       if($("#validationCustom02").hasClass("is-invalid")){
           toastr.error("Username is invalid, please make user its valid");
           return false;
       }else{
           $("#registration").submit();
       }
   })
</script>
<script type="text/javascript">
   $(function () {
   
       jQuery('#validationCustom02').on('input', function () {
   
           $("#validationCustom02").removeClass("is-valid");
           $("#validationCustom02").removeClass("is-invalid");
   
           var username = $(this).val();
           var isValid = /^[a-zA-Z0-9]*$/.test(username);
           if (isValid)
               $("#validationCustom02").addClass("is-valid");
           else
               $("#validationCustom02").addClass("is-invalid");
       });
       
        jQuery('#validationCustom04').on('input', function () {
           $("#validationCustom04").removeClass("is-valid");
           $("#validationCustom04").removeClass("is-invalid");
           var username = $(this).val();
           if(username == ""){
               $("#validationCustom04").addClass("is-invalid");
           }else{
               if (username.indexOf('_') > -1){
                   $("#validationCustom04").addClass("is-invalid");
               }else{
                   $("#validationCustom04").addClass("is-valid");
               }
           }
        });
        
        jQuery('#validationCustom05').on('input', function () {
           $("#validationCustom05").removeClass("is-valid");
           $("#validationCustom05").removeClass("is-invalid");
           var username = $(this).val();
           if(username == ""){
               $("#validationCustom05").addClass("is-invalid");
           }else{
               if (username.indexOf('_') > -1){
                   $("#validationCustom05").addClass("is-invalid");
               }else{
                   $("#validationCustom05").addClass("is-valid");
               }
           }
        });
        
        jQuery('#validationCustom06').on('input', function () {
           $("#validationCustom06").removeClass("is-valid");
           $("#validationCustom06").removeClass("is-invalid");
           var username = $(this).val();
           if(username == ""){
               $("#validationCustom06").addClass("is-invalid");
           }else{
               if (username.indexOf('_') > -1){
                   $("#validationCustom06").addClass("is-invalid");
               }else{
                   $("#validationCustom06").addClass("is-valid");
               }
           }
           
        });
        
        
        
        jQuery('.bg-transparent').on('input', function () {
           $(this).removeClass("is-valid");
           $(this).removeClass("is-invalid");
           var data = $(this).val();
           if(data == ""){
               $(this).addClass("is-invalid");
           }else{
               if (data.indexOf('_') > -1){
                   $(this).addClass("is-invalid");
               }else{
                   $(this).addClass("is-valid");
               }
           }
           
        });
        
   });
</script>
@endsection