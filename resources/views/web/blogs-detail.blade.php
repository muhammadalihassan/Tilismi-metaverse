@include('web.layouts.links')
<div class="inner-header">
	<a href="{{route('welcome')}}">
		<img src="{{asset('web/images/logo.png')}}" alt="logo">
	</a>
</div>
<div class="inner-news-main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="inner-news">
					<h4>{{isset($blogs->heading)?html_entity_decode($blogs->heading):''}}</h4>
					<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>{{date('M d,Y' , strtotime($blogs->created_at))}}</span>
										</span>
										<span class="by">
											by <span>{{isset($blogs->name)?ucfirst($blogs->name):''}}</span>
										</span>
								</div>
					<img src="{{asset($blogs->img)}}" alt="news">
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
						@foreach($all_latest_blogs as $latestBlog)
						<a href="{{route('blogs_detail',['id'=>urlencode(base64_encode($latestBlog->id))])}}">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="{{asset($latestBlog->img)}}" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5>{{isset($latestBlog->heading)?Str::limit($latestBlog->heading,30):''}}</h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>{{date('M d,Y' , strtotime($latestBlog->created_at))}}</span>
										</span>
									</div>
								</div>
							
						</div>
					</a>
					@endforeach
					
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('web.layouts.footer')
@include('web.layouts.scripts')