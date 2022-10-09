
<?php $__env->startSection('content'); ?>    
<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><span class="h4 my-auto">User Profile</span></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="position-relative">
                            <div class="background-image-maker py-5"></div>
                            <div class="holder-image">
                                <img src="<?php echo e(asset('images/portfolio13.jpg')); ?>" alt="" class="img-fluid d-none">
                            </div>
                            <div class="position-relative px-3 py-5">
                                <div class="media d-md-flex d-block">
                                    <?php if($user->profile_pic != ""): ?>
                                    <?php $path = $user->profile_pic; ?>
                                    <?php else: ?>
                                    <?php $path = "images/no-img.png"; ?>
                                    <?php endif; ?>
                                    <a href="#"><img src="<?php echo e(asset($path)); ?>" width="100" alt="<?php echo e($user->name); ?>" class="img-fluid rounded-circle" id="blah"></a>
                                    <form method="POST" action="<?php echo e(route('upload_image')); ?>" enctype="multipart/form-data" id="form-image-upload">
                                    <?php echo csrf_field(); ?>
                                    <input type="file" id="upload-img" name="pic_attach" style="display:none"/> 
                                    </form>
                                    <div class="media-body z-index-1">
                                        <div class="pl-4">
                                            <h1 class="display-4 text-uppercase text-white mb-0"><?php echo e($user->name); ?></h1>
                                            <h6 class="text-uppercase text-white mb-0">Created at: <?php echo e($user->created_at->diffForHumans()); ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <?php if($message = Session::get('success')): ?>
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong><?php echo e($message); ?></strong>
                                            </div>
                                            <?php endif; ?>
                                            <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('user_infoupdate')); ?>" enctype="multipart/form-data" id="form-image-upload">
                                            <?php echo csrf_field(); ?>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Full name</label>
                                                        <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Full name" value="<?php echo e($user->name); ?>" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Username</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" readonly="" disabled="" name="name" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?php echo e($user->username); ?>" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom03">Gender</label>
                                                        <select class="form-control bg-transparent" name="gender" required="">
                                                                    <option value="">Please Select your Gender</option>
                                                                    <option <?php if($user->gender == "male"): ?> selected="" <?php endif; ?> value="male">Male</option>
                                                                    <option <?php if($user->gender == "female"): ?> selected="" <?php endif; ?> value="female">Female</option>
                                                                </select>
                                                        <div class="invalid-feedback">
                                                            Please select your Gender.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Phone Number</label>
                                                        <div class="input-group">
                                                            
                                                            <input type="tel" class="form-control" name="phonenumber" id="validationCustomUsername" placeholder="Contact Number" data-inputmask="'mask': '0399-99999999'" aria-describedby="inputGroupPrepend" value="<?php echo e($user->phonenumber); ?>" required>
                                                            <div class="invalid-feedback">
                                                                Please enter your Contact number.
                                                            </div>
                                                        </div>
                                                    </div>

                                              
                                                    

                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">DOB</label>
                                                        <div class="input-group">
                                                            
                                                            <input type="date" max="<?php echo e(date('Y-m-d' , strtotime('-18 years'))); ?>" class="form-control" name="dob" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo e($user->dob); ?>" required>
                                                            <div class="invalid-feedback">
                                                                Please enter your Date of Birth.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-8 mb-3">
                                                        <label for="validationCustomUsername">Residential Address</label>
                                                        <div class="input-group">
                                                            
                                                            <input type="text" class="form-control" name="residential_address" placeholder="Enter your Residential Address" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo e($user->residential_address); ?>" required>
                                                            <div class="invalid-feedback">
                                                                Please enter your Residential Address.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Personnel Email</label>
                                                        <input type="email" class="form-control" readonly="" disabled="" value="<?php echo e($user->email); ?>" id="validationCustom03" placeholder="Email" required>
                                                        <div class="invalid-feedback" name="email">
                                                            Please enter your email.
                                                        </div>
                                                    </div>
                                                     <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Password </label>
                                                        <input type="password" class="form-control"   value="" id="validationCustom03" placeholder="Password" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your password.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationCustom03">Blood Group</label>
                                                        <!-- <input type="email" class="form-control" readonly="" disabled="" value="<?php echo e($user->blood_group); ?>" id="validationCustom03" placeholder="Blood Group" required> -->

                                                        <select class="form-control bg-transparent" name="blood_group" required="">
                                                            <option value="">Select Blood Group</option>
                                                                    <option <?php if($user->blood_group == 'A+VE'): ?> selected="" <?php endif; ?> value="A+VE">A+VE</option>
                                                                    <option <?php if($user->blood_group == 'A-VE'): ?> selected="" <?php endif; ?> value="A-VE">A-VE</option>
                                                                    <option <?php if($user->blood_group == 'B+VE'): ?> selected="" <?php endif; ?> value="B+VE">B+VE</option>
                                                                    <option <?php if($user->blood_group == 'B-VE'): ?> selected="" <?php endif; ?> value="B-VE">B-VE</option>
                                                                    <option <?php if($user->blood_group == 'O+VE'): ?> selected="" <?php endif; ?> value="O+VE">O+VE</option>
                                                                    <option <?php if($user->blood_group == 'O-VE'): ?> selected="" <?php endif; ?> value="O-VE">O-VE</option>
                                                                    <option <?php if($user->blood_group == 'AB+VE'): ?> selected="" <?php endif; ?> value="AB+VE">AB+VE</option>
                                                                    <option <?php if($user->blood_group == 'AB-VE'): ?> selected="" <?php endif; ?> value="AB-VE">AB-VE</option>
                                                                    <option <?php if($user->blood_group == ''): ?> selected="" <?php endif; ?> value="">Unknown</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter your Blood Group.
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom03">Marital Status</label>
                                                        <select class="form-control bg-transparent" name="marital_status" id="validationCustom11">
                                                                    <option value="">-Select Marital Status-</option>
                                                                    <option <?php if($user->marital_status == 'single'): ?> selected="" <?php endif; ?> value="single">Single</option>
                                                                    <option <?php if($user->marital_status == 'married'): ?> selected="" <?php endif; ?> value="Married">Married</option>
                                                                    <option <?php if($user->marital_status == 'widowed'): ?> selected="" <?php endif; ?> value="Widowed">Widowed</option>
                                                                    <option <?php if($user->marital_status == 'separated'): ?> selected="" <?php endif; ?> value="Separated">Separated</option>
                                                                    <option <?php if($user->marital_status == 'divorced'): ?> selected="" <?php endif; ?> value="Divorced">Divorced</option>
                                                                </select>
                                                        <div class="invalid-feedback">
                                                            Please select your Marital Status.
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                                
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="row mt-3"></div>
                <!-- END: Card DATA-->
            </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>

    $('document').ready(function(){
        $('#blah').click(function(){ 
            $('#upload-img').trigger('click'); 
        });    
    });
    
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#upload-img").change(function() {
      $("#heading_upload").hide();
      readURL(this);
    });
    
    $("#upload-img").change(function(e) {
        var val = $(this).val();
        if (val.match(/(?:gif|jpg|png|bmp)$/)) {
            if (confirm('Do you really want to change your profile image?')) {
                $("#form-image-upload").submit();
            } else {
                alert('No image has been updated');
            }
        }
    });
    
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\fareeha shah\Tilismi_new_update\resources\views/user-profile.blade.php ENDPATH**/ ?>