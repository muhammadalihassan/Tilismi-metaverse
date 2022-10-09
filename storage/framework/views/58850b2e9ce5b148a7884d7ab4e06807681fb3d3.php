<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="inner-header">
	<a href="<?php echo e(route('welcome')); ?>">
		<img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
	</a>
</div>
<div class="news-banner-main">
	<h4>tilismi <span>news</span></h4>
</div>
<div class="news-main">
	<div class="container-fluid">
		<div class="row">
			<?php $__currentLoopData = $all_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$allNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($key == 0): ?>
			<div class="col-md-4">
				<div class="all-news-main">
					<div class="most-latest">
					<a href="<?php echo e(route('news_detail',['id'=>urlencode(base64_encode($allNews->id))])); ?>">
							<h4><?php echo e(isset($allNews->heading)?Str::limit($allNews->heading,50):''); ?></h4>
							<img src="<?php echo e(asset($allNews->img)); ?>" alt="news">
							<div class="latest-txt">
								<h5><?=html_entity_decode(Str::limit($allNews->desc,30))?></h5>
								<span class="creation-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span><?php echo e(date('M d,Y' , strtotime($allNews->created_at))); ?></span>
								</span>
							</div>
						</a>
					</div>
					<div class="all-news pt-4">
						<?php elseif($key % 4 == 0): ?>
						<div class="col-md-5">
							<div class="all-news-main">
								<div class="all-news pt-4">
									<?php endif; ?>
									<?php if($key != 0): ?>
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
									<?php endif; ?>
									<?php if($key != 0 && ($key % 3 == 0 || $key % (sizeof($all_news) - 1) == 0)): ?>
								</div>
							</div>
							<?php if($key % (sizeof($all_news) - 1) == 0): ?>



                  <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
              
                <ol class="pagination">
                   <?php echo $all_news->render(); ?>

                </ol>
              </div>




							
							<?php endif; ?>
						</div>
						<?php endif; ?>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php if($all_news->count() < 5): ?>
<div class="col-md-5">
							<div class="all-news-main">
								<div class="all-news pt-4">
								</div>
							</div>
						</div>
			<?php endif; ?>
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
<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\fareeha shah\Tilismi_new_update\resources\views/web/news.blade.php ENDPATH**/ ?>