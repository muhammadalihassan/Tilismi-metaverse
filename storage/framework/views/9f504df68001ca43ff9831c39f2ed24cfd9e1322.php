<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="inner-header">
	<a href="<?php echo e(route('welcome')); ?>">
		<img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
	</a>
</div>
<div class="inner-news-main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="inner-news">
					<h4><?php echo e(isset($blogs->heading)?html_entity_decode($blogs->heading):''); ?></h4>
					<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($blogs->created_at))); ?></span>
										</span>
										<span class="by">
											by <span><?php echo e(isset($blogs->name)?ucfirst($blogs->name):''); ?></span>
										</span>
								</div>
					<img src="<?php echo e(asset($blogs->img)); ?>" alt="news">
					<p><?=html_entity_decode($blogs->desc)?></p>
				
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest-news-sec">
					<div class="latest-head">
						<h4>latest blogs</h4>
					</div>
					<div class="all-news-main">
					<div class="all-news">
						<?php $__currentLoopData = $all_latest_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('blogs_detail',['id'=>urlencode(base64_encode($latestBlog->id))])); ?>">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="<?php echo e(asset($latestBlog->img)); ?>" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5><?php echo e(isset($latestBlog->heading)?Str::limit($latestBlog->heading,30):''); ?></h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($latestBlog->created_at))); ?></span>
										</span>
									</div>
								</div>
							
						</div>
					</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tilismi_new_update\resources\views/web/blogs-detail.blade.php ENDPATH**/ ?>