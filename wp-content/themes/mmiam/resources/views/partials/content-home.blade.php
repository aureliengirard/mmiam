<section class="item section section-home section-home-1">
	<div class="container-fluid">
		<div class="row section-home__row">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center">
				@if($home_section1->main_title)
				<h1 class="home-main-title sr-only">{!! $home_section1->main_title !!}</h1>
				@endif

				<div id="fullwidth-video">
					<div class="fullwidth-video-bg">
						<video src="@video('mmiam.mp4')" autoplay muted loop playsinline>
							<!-- fallback content -->
     					Your browser does not support the video element.
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-2">
	<div class="container-fluid">
		<div class="row section-home__row align-items-center">
			<div class="col-xl-6 col-lg-12 pt-5 pb-5 section-home__left">
				@if($home_section2->main_title)
				<h1 class="section-main-title">{!! $home_section2->main_title !!}</h1>
				@endif

				@if($home_section2->subtitle)
				<h2 class="section-subtitle">{{ $home_section2->subtitle }}</h2>
				@endif

				@if($home_section2->content)
				<div class="section-content wysiwyg">
					{!! $home_section2->content !!}
				</div>
				@endif
			</div>

			<div class="col-xl-6 col-lg-12 h-100">
				<div class="row flex-wrap square__row h-100">
					<div class="col-md-6 col-sm-12 bg-brand-2 square__cell">
						@if($home_section2->box_1_title)
						<h2 class="square__title square__box-title-1">{!! $home_section2->box_1_title !!}</h2>
						@endif
					</div>
					@if($home_section2->box_3_bg)
					<div class="col-md-6 col-sm-12 background-img square__cell" style="background-image:url({{ esc_url($home_section2->box_2_bg) }}">
					@else
					<div class="col-md-6 col-sm-12 bg-black square__cell">
					@endif
						@if($home_section2->box_2_title)
						<h2 class="square__title square__box-title-2">{{ $home_section2->box_2_title }}</h2>
						@endif
					</div>
					@if($home_section2->box_3_bg)
					<div class="col-md-6 col-sm-12 background-img square__cell" style="background-image:url({{ esc_url($home_section2->box_3_bg) }}">
					@else
					<div class="col-md-6 col-sm-12 bg-black square__cell">
					@endif
					</div>
					<div class="col-md-6 col-sm-12 bg-brand-2 square__cell">
						@if($home_section2->box_4_title)
						<h2 class="square__title square__box-title-4">{!! $home_section2->box_4_title !!}</h2>
						@endif
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-3">
	<div class="container-fluid">
		<div class="row section-home__row align-items-center">
			<div class="col-lg-6 col-md-12 pt-3 pb-3 section-home__left">
				@if($home_section3->main_title)
				<h1 class="section-main-title">{!! $home_section3->main_title !!}</h1>
				@endif

				@if($home_section3->subtitle)
				<h2 class="section-subtitle">{!! $home_section3->subtitle !!}</h2>
				@endif

				@if($home_section3->content)
				<div class="section-content wysiwyg">
					{!! $home_section3->content !!}
				</div>
				@endif
			</div>

			<div class="col-lg-6 col-md-12 h-100">
				<div class="row h-100">
					<div class="col-12 rectangle__cell px-0">
						@if($home_section3->cta_content)
						<div class="d-flex align-items-center content-block__call-to-action">	
							<div class="wysiwyg">
								{!! $home_section3->cta_content !!}
							</div>
						</div>
						@endif
					</div>
					<div class="col-12 rectangle__cell rectangle__video bg-black px-0">
						@if($home_section3_video && $home_section3_video->link && $home_section3_video->link)
							<a class="youtube-link" href="{{ esc_url($home_section3_video->link) }}" data-toggle="lightbox" title="{{ $home_section3_video->title }}" style="background-image:url({{ esc_url($home_section3_video->thumbnail) }});">
								<span class="sr-only">{{ __('Watch the video', 'mmiam') }}</span>
							</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-4">
	<div class="container-fluid">
		<div class="row section-home__row">
			<div class="col-lg-6 col-md-12">
				<div class="row h-100">
					<div class="col-12 rectangle__cell rectangle__video bg-black px-0">
						@if($home_section4_video && $home_section4_video->link && $home_section4_video->thumbnail)
							<a class="youtube-link" href="{{ esc_url($home_section4_video->link) }}" data-toggle="lightbox" title="{{ $home_section4_video->title }}" style="background-image:url({{ esc_url($home_section4_video->thumbnail) }});">
								<span class="sr-only">{{ __('Watch the video', 'mmiam') }}</span>
							</a>
						@endif
					</div>

					@if($home_section4->graduates_intro_bg)
					<div class="col-12 graduates-intro background-img rectangle__cell d-flex align-items-center justify-content-center" style="background-image:url({{ esc_url($home_section4->graduates_intro_bg) }}">
					@else				
					<div class="col-12 bg-brand-1 graduates-intro rectangle__cell d-flex align-items-center justify-content-center">
					@endif	
						@if($home_section4->graduates_intro)
						<p>{!! $home_section4->graduates_intro !!}</p>
						@endif
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 statistics bg-brand-2 d-flex flex-column align-items-center justify-content-center">
				@if($home_section4->statistics)
				{!! $home_section4->statistics !!}
				@endif
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-5">
	<div class="container-fluid">
		<div class="row section-home__row">
			<div class="col-12 pt-5 pb-5 section-home__left">
				@if($home_section5_graduates)
					<ul class="no-bullet graduates mb-0 d-flex flex-wrap">
					@foreach($home_section5_graduates as $graduate)
						@include('partials.home-graduate-item', $graduate)
					@endforeach
					</ul>
				@endif
			</div>

			<div class="col-12 px-0 call-to-action__wrapper">
				@if($home_section5->cta_content)
				<div class="d-flex align-items-center content-block__call-to-action">		
					<div class="wysiwyg">
						{!! $home_section5->cta_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>		
	</div>
</section>

<section class="item section section-home section-home-6">
	<div class="container-fluid">
		<div class="row section-home__row align-items-center">
			<div class="col-lg-6 col-md-12 pt-3 pb-3 section-home__left">
				@if($home_section6->main_title)
				<h1 class="section-main-title">{!! $home_section6->main_title !!}</h1>
				@endif

				@if($home_section6->subtitle)
				<h2 class="section-subtitle">{!! $home_section6->subtitle !!}</h2>
				@endif

				@if($home_section6->content)
				<div class="section-content wysiwyg">
					{!! $home_section6->content !!}
				</div>
				@endif
			</div>

			<div class="col-lg-6 col-md-12 h-100 bg-brand-2">
				<div class="row d-flex align-items-center h-100 pt-5 pb-3">
					<div class="col-12">
						@if($home_section6_school_logo)
						<h3 class="text-center">
							<img class="school-logo" src="{{ $home_section6_school_logo->url }}" alt="{{ $home_section6_school_logo->alt }}">
						</h3>
						@endif

						@if($home_section6_school_rankings)
							<ul class="no-bullet school-rankings__list">
							@foreach($home_section6_school_rankings as $rank)
								@include('partials.home-section6-school-rankings-item', $rank)
							@endforeach
							</ul>
						@endif

						@if($home_section6_school_accreditations)
							<ul class="no-bullet d-flex justify-content-center school-accreditations__list">
							@foreach($home_section6_school_accreditations as $accrediatation)
								@include('partials.home-section6-school-accreditations-item', $accrediatation)
							@endforeach
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-7">
	<div class="container-fluid">
		<div class="row section-home__row">
			<div class="col-lg-6 col-md-12 bg-brand-1 d-flex flex-column align-items-center justify-content-center section-home__left">
				@if($home_section7_school_logo)
				<h3><img class="school-logo" src="{{ $home_section7_school_logo->url }}" alt="{{ $home_section7_school_logo->alt }}"></h3>
				@endif

				@if($home_section7_school_rankings)
					<ul class="no-bullet school-rankings__list">
					@foreach($home_section7_school_rankings as $rank)
						@include('partials.home-section7-school-rankings-item', $rank)
					@endforeach
					</ul>
				@endif
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="row h-100">
					@if( $home_section7->content_bg)
					<div class="col-12 background-img d-flex align-items-center justify-content-center content-top" style="background-image:url({{ esc_url($home_section7->content_bg) }}">
					@else
					<div class="col-12 bg-brand-2 d-flex align-items-center justify-content-center content-top">
					@endif

						@if($home_section7->content)
						<div class="section-content-top">
							{{ $home_section7->content }}
						</div>
						@endif
					</div>
					<div class="col-12 bg-brand-1 px-0 call-to-action__wrapper">
						@if($home_section7->cta_content)
						<div class="d-flex align-items-center content-block__call-to-action">
							<div class="wysiwyg">
								{!! $home_section7->cta_content !!}
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="item section section-home section-home-8">
	<div class="container-fluid">
		<div class="row section-home__row align-items-center">
			<div class="col-lg-6 col-md-12 pt-3 pb-3 section-home__left">
				@if($home_section8->main_title)
				<h1 class="section-main-title">{!! $home_section8->main_title !!}</h1>
				@endif

				@if($home_section8->subtitle)
				<h2 class="section-subtitle">{!! $home_section8->subtitle !!}</h2>
				@endif

				@if($home_section8->content)
				<div class="section-content wysiwyg">
					{!! $home_section8->content !!}
				</div>
				@endif
			</div>

			<div class="col-lg-6 col-md-12 h-100">
				<div class="row h-100">
					@if( $home_section8->content_bg)
					<div class="col-12 background-img directors-intro__wrapper d-flex align-items-center" style="background-image:url({{ esc_url($home_section8->content_bg) }}">
					@else
					<div class="col-12 bg-brand-2 rectangle__cell directors-intro__wrapper d-flex align-items-center">
					@endif
						@if($home_section8->directors_intro)
						<p class="directors-intro mb-0">{!! $home_section8->directors_intro !!}</p>
						@endif
					</div>
					
					<div class="col-12 rectangle__cell directors-list__wrapper d-flex">
						@if($home_section8_directors_list)
							<ul class="no-bullet directors-list d-flex flex-column align-items-center">
							@foreach($home_section8_directors_list as $director)
								@include('partials.home-directors-item', $director)
							@endforeach
							</ul>
						@endif
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="item section section-home site-footer section-home-9">
	<div class="container-fluid">
		@include('partials.footer-inner')
	</div>
</section>
