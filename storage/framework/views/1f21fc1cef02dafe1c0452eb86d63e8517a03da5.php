<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="inner-header">
	<a href="<?php echo e(route('welcome')); ?>">
		<img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
	</a>
</div>
<div class="news-banner-main">
	<h4>tilismi <span>blogs</span></h4>
</div>
<div class="news-main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="all-blogs-main">
					<div class="row">
						<?php $__currentLoopData = $blogs_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-6">
							<a href="<?php echo e(route('blogs_detail',['id'=>urlencode(base64_encode($latestBlog->id))])); ?>">
							<div class="blog-wid">
								<img src="<?php echo e(asset($latestBlog->img)); ?>" alt="blog">
								<h4><?php echo e(isset($latestBlog->heading)?html_entity_decode($latestBlog->heading):''); ?></h4>
								<p><?=html_entity_decode(Str::limit($latestBlog->desc,30))?></p>
								<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($latestBlog->created_at))); ?></span>
										</span>
										<span class="by">
											by <span><?php echo e(isset($latestBlog->name)?ucfirst($latestBlog->name):''); ?></span>
										</span>
								</div>
							</div>
						</a>

						
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php $__currentLoopData = $all_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="col-md-4">
							<a href="<?php echo e(route('blogs_detail',['id'=>urlencode(base64_encode($all->id))])); ?>">
							<div class="blog-wid">
								<img src="<?php echo e(asset($all->img)); ?>" alt="blog">
								<h4><?php echo e(isset($all->heading)?html_entity_decode($all->heading):''); ?></h4>
								<p><?=html_entity_decode(Str::limit($all->desc,30))?></p>
								<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($all->created_at))); ?></span>
										</span>
										<span class="by">
											by <span><?php echo e(isset($all->name)?ucfirst($all->name):''); ?></span>
										</span>
								</div>
							</div>
						</a>
						</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest-news-sec">
					<div class="latest-head">
						<h4>latest blogs</h4>
					</div>
					<div class="all-news-main">
					<div class="all-news">
						<?php $__currentLoopData = $all_latest_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('blogs_detail',['id'=>urlencode(base64_encode($latest_blog->id))])); ?>">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="<?php echo e(asset($latest_blog->img)); ?>" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5><?php echo e(isset($latest_blog->heading)?Str::limit($latest_blog->heading,30):''); ?></h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?php echo e(date('M d,Y' , strtotime($latest_blog->created_at))); ?></span>
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


<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tilismi\resources\views/web/blogs.blade.php ENDPATH**/ ?>