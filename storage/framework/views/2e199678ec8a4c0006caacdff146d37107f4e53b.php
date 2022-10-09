 
<?php $__env->startSection('content'); ?>
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Card Data-->
        <div class="row">
            <div class="d-inline-flex p-2">
                <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#addevent"><i class="icon-calendar"></i> Add Record</a>
            </div>
        </div>

        <!-- Modal -->
        <div id="addevent" class="modal fade" role="dialog">
            <div class="modal-dialog text-left">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="model-header">Listed</h4>
                    </div>
                    <div class="modal-body">
                        <form class="" id="generic-form" method="POST" action="<?php echo e(route('generic_submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-12">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Attribute:</label>
                                        <div class="d-flex">
                                            <select class="form-control" name="attribute" id="attribute" required="">
                                                <option value="" selected="" disabled="">Please select your attribute</option>
                                                <option value="roles">Roles</option>
                                                <option value="user-creation">User Creation</option>
            
                                                <option value="registration-type">Registration Type</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="assignrole"></div>
                                <div class="col-md-6 col-sm-6 col-12" id="rank-label">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Rank:</label>
                                        <div class="d-flex">
                                            <input id="rankname" placeholder="Rank Name" name="name" class="form-control" type="text" list="name-list" autocomplete="off" required="" />
                                            <?php if($attributes): ?>
                                            <datalist id="name-list">
                                             <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option><?php echo e($att->name); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12" id="role-label">
                                    <div class="form-group end-date">
                                        <label for="end-date" class="">Role:</label>
                                        <div class="d-flex">
                                            <input id="rolename" placeholder="Role Name" type="text" name="role" class="form-control" list="role-list" autocomplete="off" required="" />
                                            <?php if($attributes): ?>
                                            <datalist id="role-list">
                                             <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option><?php echo e($att->role); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputColor" class="">Color:</label>

                                        <input type="color" name="color" class="border-0 m-2" id="inputColor" value="#a7f4ec" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button id="add-generic" type="submit" class="btn btn-primary eventbutton">Create</button>
                    </div>
                </div>
            </div>
        </div>



        
            <?php if($attributes): ?>
                <h3>Roles</h3>
                <div class="row">
                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($att->attribute == "roles"): ?>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 role-assign-modal" data-role_id="<?php echo e($att->id); ?>" data-rolename='<?php echo e($att->role); ?>' style="cursor: pointer;">
                            <div class="card border-bottom-0">
                                <div class="card-content border-bottom border-primary border-w-5" style="border-color: <?php echo e($att->color); ?> !important;">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="circle-50 outline-badge-primary" style="color: <?php echo e($att->color); ?>;border: 1px solid <?php echo e($att->color); ?>;"><span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                            <div class="media-body align-self-center pl-3">
                                                <span class="mb-0 h6 font-w-600"><?php echo e($att->name); ?></span><br />
                                                <p class="mb-0 font-w-500 h6"><?php echo e($att->role); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

<?php $__env->stopSection(); ?> 
<?php $__env->startSection('css'); ?> 

<?php $__env->stopSection(); ?> 
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $("#add-generic").click(function(){
        $("#generic-form").submit();
    })

    $("#attribute").click(function(){
        var otype = $(this).children("option:selected").val();
        if (otype == "roles") {
            $("#role-label").show();
            $("#rank-label").show();
        }else if(otype == "departments"){
            $("#role-label").hide();
            $("#rank-label").show();
        }else if(otype == "designations"){
            $("#role-label").hide();
            $("#rank-label").show();
        }else if(otype == "project"){
            $("#role-label").hide();
            $("#rank-label").show();
        }else if(otype == "registration-type"){
            $("#role-label").hide();
            $("#rank-label").show();
            $("#rolename").val("None")
        }
    })
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            toastr.error("<?php echo e($error); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

</script>
<script type="text/javascript">
  $("#former-submit").click(function(){
    $("#assign-role-form").submit();
  })

  $(".role-assign-modal").click(function(){
    $(".show-role-name").text("Role assign for "+$(this).data("rolename"));
    var role_id = $(this).data('role_id');
// $.ajaxSetup({
//   headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
    $.ajax({
        type: 'post',
        dataType : 'json',
        url: "<?php echo e(route('role_assign_modal')); ?>",        
        data: {role_id, role_id , _token: '<?php echo e(csrf_token()); ?>'},
        success: function (response) {
            if (response.body == "") {
                toastr.error("No rights found");
            }else{
                $('#body_modal').html(response.body);  
                $("#addrole-modal").modal("show");    
            }
            
        }
    });
    
    
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/digitalservicesc/public_html/mymobiledna-dev/resources/views/roles/roles.blade.php ENDPATH**/ ?>