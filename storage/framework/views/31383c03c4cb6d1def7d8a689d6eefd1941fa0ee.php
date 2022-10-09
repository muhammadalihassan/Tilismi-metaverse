<?php  
$user = Auth::user();
$att_tag = App\Models\attributes::where('is_active' ,1)->select('attribute')->distinct()->get();

$role_assign = App\Models\role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
if ($role_assign) {
    $sidebar_data = unserialize($role_assign->assignee);
    $sidebar_data = Helper::create_sidebar($sidebar_data);
}else{
    $sidebar_data = [];
}

?>
<div class="sidebar">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
             <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                     <ul>
          <!-- <li class="active"><a href="<?php echo e(route('dashboard')); ?>"><i class="icon-rocket"></i> Dashboard</a></li> -->

           <li ><a href="<?php echo e(route('welcome')); ?>"><i class="icon-rocket"></i> View Website</a></li>

           
                                    
                            <?php if(Auth::user()->role_id == 1): ?>
                            <li><a href="<?php echo e(route('roles')); ?>"><i class="icon-layers"></i> Attributes</a></li>
                            <?php endif; ?>
                            <?php if($sidebar_data): ?>
                                <?php $__currentLoopData = $sidebar_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e($side==Request::segment(2)?'active':''); ?>"><a href="<?php echo e(route('listing',$side)); ?>" data-actor="<?php echo e($side); ?>"><i class="<?php echo e(Helper::get_sidebar_icon($side)); ?>"></i> <?php echo e(ucwords(str_replace('-', ' ',$side))); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            
                            
                        </ul> 
                    </li>

                    <?php if(Auth::user()->role_id == 1 || Auth::user()->role_id == 36): ?>
                    <li class="dropdown"><a href="#"><i class="icon-organization mr-1"></i> Tools</a>
                        <ul>
                

                         <?php if(Auth::user()->role_id == 1): ?> 
                            
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Website Settings</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('config')); ?>"><i class="icon-energy"></i> Config</a></li>
                                </ul>
                            </li> 
                           
                                     
                 
                     <?php endif; ?>



                            
                            
                        </ul>
                    </li>
                    <?php endif; ?>

                   
                            <?php if(Auth::user()->role_id == 1 || Auth::user()->role_id == 36): ?>
                            
                            <?php endif; ?>
                        </ul>                   
                    </li>

                    
                </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>