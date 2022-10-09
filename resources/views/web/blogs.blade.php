@include('web.layouts.links')
<div class="inner-header">
	<a href="{{route('welcome')}}">
		<img src="{{asset('web/images/logo.png')}}" alt="logo">
	</a>
</div>
<div class="news-banner-main">
	<img src="{{asset('web/images/blogsbg.jpg')}}">
	<h4>blogs</h4>
</div>
<div class="news-main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="all-blogs-main">
					<div class="row">
					@foreach($all_blogs as $key=>$latestBlog)
				   @if($key == 0 || $key == 1 )
						<div class="col-md-6">
							<a href="{{route('blogs_detail',['id'=>urlencode(base64_encode($latestBlog->id))])}}">
							<div class="blog-wid">
								<img src="{{asset($latestBlog->img)}}" alt="blog">
								<h4>{{isset($latestBlog->heading)?Str::limit($latestBlog->heading,30):''}}</h4>
								<div class="blog-para"><p><?=html_entity_decode(Str::limit($latestBlog->desc,150))?></p></div>
								
								<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>{{date('M d,Y' , strtotime($latestBlog->created_at))}}</span>
										</span>
										<span class="by">
											by <span>{{isset($latestBlog->name)?ucfirst($latestBlog->name):''}}</span>
										</span>
								</div>
							</div>
						</a>

						
						</div>
						@else

            <div class="col-md-4">
							<a href="{{route('blogs_detail',['id'=>urlencode(base64_encode($latestBlog->id))])}}">
							<div class="blog-wid">
								<img src="{{asset($latestBlog->img)}}" alt="blog">
								<h4>{{isset($latestBlog->heading)?Str::limit($latestBlog->heading,30):''}}</h4>
								<div class="blog-para">
								<p><?=html_entity_decode(Str::limit($latestBlog->desc,90))?></p></div>
								<div class="blog-by">
									<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>{{date('M d,Y' , strtotime($latestBlog->created_at))}}</span>
										</span>
										<span class="by">
											by <span>{{isset($latestBlog->name)?ucfirst($latestBlog->name):''}}</span>
										</span>
								</div>
							</div>
						</a>
						</div>

						@endif

						@endforeach
						
					</div>

                  <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
              
                <ol class="pagination">
                   {!! $all_blogs->render() !!}
                </ol>
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
						@foreach($all_latest_blogs as $latest_blog)
						<a href="{{route('blogs_detail',['id'=>urlencode(base64_encode($latest_blog->id))])}}">
						<div class="row">
							<div class="col-md-5">
								<div class="news-img">
									<img src="{{asset($latest_blog->img)}}" alt="news">
								</div>
								</div>
								<div class="col-md-7 no-left">
									<div class="news-txt">
										<h5>{{isset($latest_blog->heading)?Str::limit($latest_blog->heading,30):''}}</h5>
										<span class="creation-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>{{date('M d,Y' , strtotime($latest_blog->created_at))}}</span>
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