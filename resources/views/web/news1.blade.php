@include('web.layouts.links')
<div class="inner-header">
	<a href="{{route('welcome')}}">
		<img src="{{asset('web/images/logo.png')}}" alt="logo">
	</a>
</div>
<div class="news-banner-main">
	<h4>tilismi <span>news</span></h4>
</div>
<div class="news-main">
	<div class="container-fluid">
		<div class="row">
			@foreach($all_news as $key=>$allNews)
			@if ($key == 0)
			<div class="col-md-4">
				<div class="all-news-main">
					<div class="most-latest">
						<a href="{{route('news_detail',['id'=>urlencode(base64_encode($allNews->id))])}}">
							<h4>{{isset($allNews->heading)?Str::limit($allNews->heading,50):''}}</h4>
							<img src="{{asset($allNews->img)}}" alt="news">
							<div class="latest-txt">
								<h5><?= html_entity_decode(Str::limit($allNews->desc, 150)) ?></h5>
								<span class="creation-date">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span>{{date('M d,Y' , strtotime($allNews->created_at))}}</span>
								</span>
							</div>
						</a>
					</div>
					<div class="all-news pt-4">
						@elseif($key % 4 == 0 && $key <= 4) 
						<div class="col-md-5">
							<div class="all-news-main">
								<div class="all-news">
									@endif
									@if($key != 0)
									<a href="{{route('news_detail',['id'=>urlencode(base64_encode($allNews->id))])}}">
										<div class="row">
											<div class="col-md-5">
												<div class="news-img">
													<img src="{{asset($allNews->img)}}" alt="news">
												</div>
											</div>
											<div class="col-md-7 no-left">
												<div class="news-txt">

													<h5>{{isset($allNews->heading)?Str::limit($allNews->heading,90):''}}</h5>
													<span class="creation-date">
														<i class="fa fa-calendar" aria-hidden="true"></i>
														<span>{{date('M d,Y' , strtotime($allNews->created_at))}}</span>
													</span>
												</div>
											</div>
										</div>
									</a>
									@endif
									@if($key != 0 && (($key % 3 == 0 && $key <= 3) || $key % (sizeof($all_news) - 1)==0))
								 </div>
								</div>
								@if($key % (sizeof($all_news) - 1) == 0)
								<div class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">

									<ol class="pagination">
										{!! $all_news->render() !!}
									</ol>
								</div>
								@endif
							</div>
							@elseif(sizeof($all_news) == 1)
							</div>
							</div>
							</div>
							@endif
							@endforeach
							@if($all_news->count() < 5) 
							<div class="col-md-5">
								<div class="all-news-main">
									<div class="all-news">
									</div>
								</div>
					</div>
					@endif
					<div class="col-md-3">
						<div class="latest-news-sec">
							<div class="latest-head">
								<h4>latest news</h4>
							</div>
							<div class="all-news-main">
								<div class="all-news">
									@foreach($all_latest_news as $allLatesNews)
									<a href="{{route('news_detail',['id'=>urlencode(base64_encode($allLatesNews->id))])}}">
										<div class="row">
											<div class="col-md-5">
												<div class="news-img">
													<img src="{{asset($allLatesNews->img)}}" alt="news">
												</div>
											</div>
											<div class="col-md-7 no-left">
												<div class="news-txt">
													<h5>{{isset($allLatesNews->heading)?Str::limit($allLatesNews->heading,60):''}}</h5>
													<span class="creation-date">
														<i class="fa fa-calendar" aria-hidden="true"></i>
														<span>{{date('M d,Y' , strtotime($allLatesNews->created_at))}}</span>
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