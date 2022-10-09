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
					<h4><?php echo e(isset($news->heading)?html_entity_decode($news->heading):''); ?></h4>
					<span class="creation-date">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span><?php echo e(date('M d,Y' , strtotime($news->created_at))); ?></span>
										</span>
					<img src="<?php echo e(asset($news->img)); ?>" alt="news">
					<p><?=html_entity_decode($news->desc,30)?></p>
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest-news-sec">
					<div class="latest-head">
						<h4>latest news</h4>
					</div>
					<div class="all-news-main">
					<div class="all-news">
						<?php $__currentLoopData = $all_latest_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allLatesNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="#">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="<?php echo e(asset($allLatesNews->img)); ?>" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5><?php echo e(isset($allLatesNews->heading)?Str::limit($allLatesNews->heading,30):''); ?></h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($allLatesNews->created_at))); ?></span>
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




<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\fareeha shah\Tilismi\resources\views/web/news-detail.blade.php ENDPATH**/ ?>