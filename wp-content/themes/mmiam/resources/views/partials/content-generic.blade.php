@if($generic_content_block)
@foreach($generic_content_block as $content_block)
<section class="section section-content-block @if($content_block['anchor'])section-{{ $content_block['anchor'] }}@endif">
	
	@if($content_block['anchor'])
	<a id="{{ $content_block['anchor'] }}"></a>
	@endif

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">		
				@if ($content_block['image_banner'])
					<div class="content-block__banner" style="background-image:url({{ $content_block['image_banner_url'] }});">
						@if ($content_block['main_title'])
							<h1 class="content-block__main-title">{!! $content_block['main_title'] !!}</h1>
						@endif
					</div>
				@endif
			</div>
		</div>

		@if ($content_block['secondary_title'])
		<div class="row">
			<div class="col-12">
				<h2 class="content-block__secondary-title">
					{!! $content_block['secondary_title'] !!}
				</h2>
			</div>
		</div>
		@endif

		@if ($content_block['left_column_content'] || $content_block['right_column_images'] || $content_block['right_column_content'])
		<div class="row">
			<div class="col-12 col-lg-6">
				@if ($content_block['left_column_content'])
				<div class="content-block__left-column-content">
					<div class="wysiwyg">
						{!! $content_block['left_column_content'] !!}
					</div>
				</div>
				@endif
			</div>

			<div class="col-12 col-lg-6">
				@if ($content_block['right_column_images'])
				<div class="content-block__right-column-images">
					@foreach($content_block['right_column_images'] as $image)
					 @include('partials.right-column-images-item', $image)
					@endforeach
				</div>
				@else
				<div class="content-block__right-column-images">
					<div class="content-block__right-column-image image-1">
						<img class="img-fluid" src="@asset('images/temp/square-picture.jpg')">
					</div>
					<div class="content-block__right-column-image image-2">
						<img class="img-fluid" src="@asset('images/temp/square-picture.jpg')">
					</div>
					<div class="content-block__right-column-image image-3">
						<img class="img-fluid" src="@asset('images/temp/square-picture.jpg')">
					</div>
				</div>
				@endif

				@if ($content_block['right_column_content'])
				<div class="content-block__right-column-content">
					<div class="wysiwyg">
						{!! $content_block['right_column_content'] !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if ($content_block['call_to_action'])
		<div class="row align-items-center">
			<div class="col-12 px-0">
				<div class="content-block__call-to-action">
					<div class="wysiwyg">
						{!! $content_block['call_to_action'] !!}
					</div>
				</div>
			</div>
		</div>
		@endif

		@if ($content_block['faq_content'])			
		<div class="row">
			<div class="col-12">
				<div class="accordions__wrapper">
					@foreach($content_block['faq_content'] as $faq)
					<div class="accordions__item">
						<div class="accordions__panel collapsed" data-toggle="collapse" data-target="#accordion{{ $loop->iteration }}" aria-expanded="false">
							@if($faq['content_block_faq_question'])
							<h3 class="accordions__title">
								{{ $faq['content_block_faq_question'] }}
							</h3>
							@endif
						</div>
						<div id="accordion{{ $loop->iteration }}" class="accordions__content collapse">
							@if($faq['content_block_faq_answer'])
							<div class="wysiwyg">
								{!! $faq['content_block_faq_answer'] !!}
							</div>
							@endif
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>			
		@endif

		@if ($content_block['useful_links_content'])			
		<div class="row content-block__useful-links">
			<div class="col-12">
				@if ($content_block['useful_links_title'])
				<h3 class="content-block__useful-links-title">
					{{ $content_block['useful_links_title'] }}
				</h3>
				@endif

				<ul class="content-block__useful-links-content mb-0">
					@foreach($content_block['useful_links_content'] as $useful_link)
						<li class="content-block__useful-link-item">
							<a class="content-block__useful-link-link" href="{{ esc_url($useful_link['content_block_useful_link_url']) }}" target="_blank" rel="noopener">
								{{ $useful_link['content_block_useful_link_label'] }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		@endif

	</div>

</section>
@endforeach
@endif