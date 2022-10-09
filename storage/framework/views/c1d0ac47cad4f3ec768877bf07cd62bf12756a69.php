<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="inner-header">
	<a href="index.php">
		<img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
	</a>
</div>
<div class="news-banner-main">
	<h4>tilismi <span>news</span></h4>
</div>
<div class="news-main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="all-news-main">
					<div class="most-latest">

						<a href="<?php echo e(route('news_detail',['id'=>urlencode(base64_encode($news_latest->id))])); ?>">
							<h4><?php echo e(isset($news_latest->heading)?$news_latest->heading:''); ?></h4>
						<img src="<?php echo e(asset($news_latest->img)); ?>" alt="news">
						<div class="latest-txt">
							<h5><?=html_entity_decode(Str::limit($news_latest->desc,30))?></h5>
							<span class="creation-date">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span><?php echo e(date('M d,Y' , strtotime($news_latest->created_at))); ?></span>
							</span>
						</div>
					</a>
					</div>
					
					<div class="all-news pt-4">
						<?php $__currentLoopData = $all_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('news_detail',['id'=>urlencode(base64_encode($allNews->id))])); ?>">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="<?php echo e(asset($allNews->img)); ?>" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										
										<h5><?php echo e(isset($allNews->heading)?Str::limit($allNews->heading,30):''); ?></h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($allNews->created_at))); ?></span>
										</span>
									</div>
								</div>
							
						</div>
					</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					  <?php echo $all_news->render(); ?>

					
				

					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div class="all-news-main">
					<div class="all-news">
						<?php $__currentLoopData = $all_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val_allNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('news_detail',['id'=>urlencode(base64_encode($val_allNews->id))])); ?>">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="<?php echo e(asset($val_allNews->img)); ?>" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5><?php echo e(isset($val_allNews->heading)?Str::limit($val_allNews->heading,30):''); ?></h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($allNews->created_at))); ?></span>
										</span>
									</div>
								</div>
							
						</div>
					</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					  <?php echo $all_news->render(); ?>

					
					
				
					
					</div>
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
						<a href="<?php echo e(route('news_detail',['id'=>urlencode(base64_encode($allLatesNews->id))])); ?>">
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
											<span><?php echo e(date('M d,Y' , strtotime($news_latest->created_at))); ?></span>
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

<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tilismi\resources\views/web/news.blade.php ENDPATH**/ ?>