<?php  
$project_open = App\Models\attributes::where('attribute' , 'project')->where('is_active' ,1)->get();
?>
<div class="modal fade" id="exampleModaltooltip2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle2">Switch to</h5>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <?php if($project_open): ?>
                                            <?php $__currentLoopData = $project_open; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(route('switch_project' , [$project->id])); ?>">
                                                <div class="col-12 col-md-12 col-lg-12 mt-12 role-assign-modal" data-role_id="<?php echo e($project->id); ?>" data-rolename='<?php echo e($project->role); ?>' style="cursor: pointer;">
                                                    <div class="card border-bottom-0">
                                                        <div class="card-content border-bottom border-primary border-w-5" style="border-color: <?php echo e($project->color); ?> !important;">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="circle-50 outline-badge-primary" style="color: <?php echo e($project->color); ?>;border: 1px solid <?php echo e($project->color); ?>;"><span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                                                    <div class="media-body align-self-center pl-3">
                                                                        <span class="mb-0 h6 font-w-600"><?php echo e($project->name); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                            <div id="addrole-modal" class="modal fade" role="dialog">
            <div class="modal-dialog text-left">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title show-role-name" id="model-header"></h4>
                    </div>
                    <div class="modal-body">
                        <form method='POST' action="<?php echo e(route('roleassign_submit')); ?>" id='assign-role-form'>
                        <?php echo csrf_field(); ?>
                        <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Create</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody id="body_modal">
                        </tbody>
                        
                      </table>
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button id="former-submit" type="button" class="btn btn-primary eventbutton">Save and Update</button>
                    </div>
                </div>
            </div>
        </div><?php /**PATH D:\FareehaShah\files_updated\resources\views/layouts/popup.blade.php ENDPATH**/ ?>