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
					<h4>{{isset($news->heading)?html_entity_decode($news->heading):''}}</h4>
					<span class="creation-date">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span>{{date('M d,Y' , strtotime($news->created_at))}}</span>
										</span>
					<img src="{{asset($news->img)}}" alt="news">
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
										<h5>{{isset($allLatesNews->heading)?Str::limit($allLatesNews->heading,30):''}}</h5>
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