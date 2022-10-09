
<?php $__env->startSection('content'); ?>    
<main>
   <div class="container-fluid site-width">
      <!-- START: Breadcrumbs-->
      <div class="row ">
         <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto">
                  <h4 class="mb-0">File Manager</h4>
               </div>
               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">User</li>
                  <li class="breadcrumb-item active"><a href="#">User File Details</a></li>
               </ol>
            </div>
         </div>
      </div>
      <!-- END: Breadcrumbs-->
      <!-- START: Card Data-->
      <div class="row row-eq-height">
         <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
            <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
            <div class="card border h-100 document-menu-section">
               <div class="p-4 card-header d-flex justify-content-between align-items-center" style="padding: 4px!important;"> 
                  <a href="#"  class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" data-toggle="modal" data-target="#newcontact">
                  <span class="d-none d-xl-inline-block">Files Details</span>
                  </a>                              
               </div>
               <ul class="nav flex-column document-menu">
                  <li class="nav-item">
                     <a class="nav-link active" href="#" data-documenttype="document">
                     <i class="icon-list"></i> All
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#" data-documenttype="image-documents">
                     <i class="icon-picture"></i> Images
                     </a>
                  </li>
                  
               </ul>
            </div>
         </div>
         <div class="col-12 col-lg-10 mt-3 pl-lg-0">
            <div class="card border h-100 document-list-section">
               <div class="card-header border-bottom p-1 d-flex">
                  <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                  <input type="text" class="form-control border-0 p-2 w-100 h-100 document-search" placeholder="Search ...">
                  <a href="#" class="list-style search-bar-menu border-0 active"><i class="icon-list"></i></a>
                  <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>
               </div>
               <div class="card-body p-0">
                  <div class="documents list">
                     <div class="document image-documents">
                        <div class="document-content">
                           <?php if(Auth::check()): ?>
                           <?php $user = Auth::user(); ?>
                           <?php if($user->profile_pic != ""): ?>
                           <?php $path = $user->profile_pic; ?>
                           <?php $profile_title =  'Profile Picture' ?>
                           <?php $cross =  '' ?>
                           <?php $icon =  'icon-pencil' ?>
                           <?php else: ?>
                           <?php $profile_title =  'No Profile Picture' ?>
                           <?php $path = "images/no-img.png"; ?>
                           <?php $cross =  "
                           <div class='centered'>X</div>
                           " ?>
                           <?php $icon =  'fa fa-plus' ?>
                           <?php endif; ?>
                           <?php endif; ?>
                           <div class="document-profile">
                              <?php echo $cross;?>                                                   
                              <img src="<?php echo e(asset($path)); ?>" alt="<?php echo e($user->name); ?> Profile"  title="<?php echo e(Auth::user()->name); ?> Dashboard" class="user-image img-fluid">
                              <div class="document-info">
                                 <p class="document-name mb-0"><?php echo e($profile_title); ?></p>
                              </div>
                           </div>
                           <?php 
                              if (env('APP_ENV') == 'local') {
                                  $file_size = "Not Define";
                              }else{
                                  $filename = asset($path);
                                  $headers  = get_headers($filename , 1);
                                  $fsize    = $headers['Content-Length'];
                                  $file_size = number_format($fsize/1000 , 2) . " KB";
                              }
                              ?>
                           <div class="document-email">
                              <p class="mb-0 small">Size:  </p>
                              <p class="user-email"><?php echo e($file_size); ?></p>
                           </div>
                           <div class="line-h-1 h5">
                              <a class="text-success edit-document" href="#" data-toggle="modal" data-target="#ProfileModal"><i class="<?php echo $icon;?>"></i></a>                              
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
</main>
<!-- ProfileModal start -->
<div class="modal fade" id="ProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" style="display: none;" aria-hidden="true">
   <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('profile_submit')); ?>" enctype="multipart/form-data" id="profile">
      <?php echo csrf_field(); ?>
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle1">Profile Picture</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group col-md-6">
                  <label for="validationCustom28">Picture Attach (Avatar) <span class="text-danger font-weight-bold">*</span></label>
                  <input type="file" id="validationCustom28" name="avatar" class="form-control bg-transparent">
                  <small class="form-text">Upload your avatar.</small>
               </div>
               <div class="document-content">
                  <?php if(Auth::check()): ?>
                  <?php $user = Auth::user(); ?>
                  <?php if($user->profile_pic != ""): ?>
                  <?php $path = $user->profile_pic; ?>
                  <?php else: ?>
                  <?php $path = "images/no-img.png"; ?>
                  <?php endif; ?>
                  <?php endif; ?>
                  <div class="document-profile text-center">
                     <img src="<?php echo e(asset($path)); ?>" alt="<?php echo e($user->name); ?> Profile"  title="<?php echo e(Auth::user()->name); ?> Dashboard" class="user-image img-fluid">
                     <div class="document-info">
                     </div>
                  </div>
                  <?php 
                     if (env('APP_ENV') == 'local') {
                         $file_size = "Not Define";
                     }else{
                         $filename = asset($path);
                         $headers  = get_headers($filename , 1);
                         $fsize    = $headers['Content-Length'];
                         $file_size = number_format($fsize/1000 , 2) . " KB";
                     }
                     ?>
                  <div class="document-email">
                     <p class="mb-0 small">Size:  </p>
                     <p class="user-email"><?php echo e($file_size); ?></p>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" id="profile-form" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </form>
</div>
<!-- ProfileModal end -->
<!-- NICModal start -->
<div class="modal fade" id="NICModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" style="display: none;" aria-hidden="true">
   <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('profile_submit')); ?>" enctype="multipart/form-data" id="profile2">
      <?php echo csrf_field(); ?>
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle1">NIC Picture</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group col-md-6">
                  <label for="validationCustom28">Document Attach(CNIC)<span class="text-danger font-weight-bold">*</span></label>
                  <input type="file" id="validationCustom28" name="cnic_file" class="form-control bg-transparent">
                  <small class="form-text">Upload your CNIC Copy.</small>
               </div>
               <div class="document image-documents">
                  <div class="document-content">
                     <?php if(Auth::check()): ?>
                     <?php $user = Auth::user(); ?>
                     <?php if($user->cnic_doc != ""): ?>
                     <?php $path2 = $user->cnic_doc; ?>
                     <?php else: ?>
                     <?php $path2 = "images/no-img.png"; ?>
                     <?php endif; ?>
                     <?php endif; ?>
                     <div class="document-profile text-center">
                        <img src="<?php echo e(asset($path2)); ?>" alt="<?php echo e($user->name); ?> Profile"  title="<?php echo e(Auth::user()->name); ?> Dashboard" class="user-image img-fluid">
                        <div class="document-info">
                        </div>
                     </div>
                     <?php 
                        if (env('APP_ENV') == 'local') {
                            $file_size2 = "Not Define";
                        }else{
                            $filename2 = asset($path2);
                            $headers2  = get_headers($filename2 , 1);
                            $fsize2    = $headers2['Content-Length'];
                            $file_size2 = number_format($fsize2/1000 , 2) . " KB";
                        }     
                        ?>
                     <div class="document-email">
                        <p class="mb-0 small">Size:  </p>
                        <p class="user-email"><?php echo e($file_size2); ?></p>
                     </div>
                     <div class="line-h-1 h5">                             
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" id="profile2-form" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </form>
</div>
<!-- NICModal end -->
<!-- ResumeandCVModal start  -->
<div class="modal fade" id="ResumeandCVModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" style="display: none;" aria-hidden="true">
   <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('profile_submit')); ?>" enctype="multipart/form-data" id="profile3">
      <?php echo csrf_field(); ?>
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle1">Resume/CV Document</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group col-md-6">
                  <label for="validationCustom28">Document Attach(Resume/CV)<span class="text-danger font-weight-bold">*</span></label>
                  <input type="file" id="validationCustom28" name="cv_file" class="form-control bg-transparent">
                  <small class="form-text">Upload your Resume/CV.</small>
               </div>
               <div class="document image-documents">
                  <div class="document-content">
                     <?php if(Auth::check()): ?>
                     <?php $user = Auth::user(); ?>
                     <?php if($user->resume_doc != ""): ?>
                     <?php $path3 = $user->resume_doc; ?>
                     <?php else: ?>
                     <?php $path3 = "images/no-img.png"; ?>
                     <?php endif; ?>
                     <?php endif; ?>
                     <div class="document-profile text-center">
                        <!-- <img src="" alt="<?php echo e($user->name); ?> Profile"  title="<?php echo e(Auth::user()->name); ?> Dashboard" class="user-image img-fluid"> -->
                        <div class="document-info">
                        <a href="<?php echo e(asset($path3)); ?>" target="_blank" rel="noopener noreferrer">Click for view file</a>
                        </div>
                     </div>
                     <?php 
                        if (env('APP_ENV') == 'local') {
                            $file_size3 = "Not Define";
                        }else{
                            $filename3 = asset($path3);
                            $headers3  = get_headers($filename3 , 1);
                            $fsize3    = $headers3['Content-Length'];
                            $file_size3 = number_format($fsize3/1000 , 2) . " KB";
                        }     
                        ?>
                     <div class="document-email">
                        <p class="mb-0 small">Size:  </p>
                        <p class="user-email"><?php echo e($file_size3); ?></p>
                     </div>
                     <div class="line-h-1 h5">                                 
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" id="profile3-form" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </form>
</div>
<!-- ResumeandCVModal end -->
<!-- Education DocumentEducationModal start  -->
<div class="modal fade" id="EducationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" style="display: none;" aria-hidden="true">
   <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('profile_submit')); ?>" enctype="multipart/form-data" id="profile4">
      <?php echo csrf_field(); ?>
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle1">Education Document</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group col-md-6">
                  <label for="validationCustom28">Document Attach(Last Educational)<span class="text-danger font-weight-bold">*</span></label>
                  <input type="file" id="validationCustom28" name="education_file" class="form-control bg-transparent">
                  <small class="form-text">Upload your educational document.</small>
               </div>
               <div class="document image-documents">
                  <div class="document-content">
                     <?php if(Auth::check()): ?>
                     <?php $user = Auth::user(); ?>
                     <?php if($user->education_doc != ""): ?>
                     <?php $path4 = $user->education_doc; ?>
                     <?php else: ?>
                     <?php $path4 = "images/no-img.png"; ?>
                     <?php endif; ?>
                     <?php endif; ?>
                     <div class="document-profile text-center">
                        <!-- <img src="" alt="<?php echo e($user->name); ?> Profile"  title="<?php echo e(Auth::user()->name); ?> Dashboard" class="user-image img-fluid"> -->
                        <div class="document-info">
                        <a href="<?php echo e(asset($path4)); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Click for view file</a>
                        </div>
                     </div>
                     <?php 
                        if (env('APP_ENV') == 'local') {
                            $file_size4 = "Not Define";
                        }else{
                            $filename4 = asset($path4);
                            $headers4  = get_headers($filename4 , 1);
                            $fsize4    = $headers4['Content-Length'];
                            $file_size4 = number_format($fsize4/1000 , 2) . " KB";
                        }     
                        ?>
                     <div class="document-email">
                        <p class="mb-0 small">Size:  </p>
                        <p class="user-email"><?php echo e($file_size4); ?></p>
                     </div>
                     <div class="line-h-1 h5">                                 
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" id="profile4-form" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </form>
</div>
<!-- EducationModal end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style type="text/css">
   .centered {
   position: absolute;
   font-size: 55px;
   color: red;
   transform: translate(20%, -17%);
   }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
   $("#profile-form").click(function(){
          $("#profile").submit();
   });
    $("#profile2-form").click(function(){
          $("#profile2").submit();
   });
   $("#profile3-form").click(function(){
          $("#profile3").submit();
   });
    $("#profile4-form").click(function(){
          $("#profile4").submit();
   });
   $('document').ready(function(){
      $('#blah').click(function(){ 
          $('#upload-img').trigger('click'); 
      });    
   });
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
   <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          toastr.error("<?php echo e($error); ?>");
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php endif; ?>
</script>  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\fareeha shah\Tilismi\resources\views/user-file-details.blade.php ENDPATH**/ ?>