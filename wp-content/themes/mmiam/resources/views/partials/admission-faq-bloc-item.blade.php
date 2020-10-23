<div class="row">
	<div class="col-12">
		@if($bloc_anchor)
		<a id="{{ $bloc_anchor }}"></a>
		@endif

		<div class="accordions__wrapper">
			<div class="accordions__item">
				<div class="accordions__panel collapsed" data-toggle="collapse" data-target="#accordion{{ $loop->iteration }}" aria-expanded="false">
					@if($bloc_subtitle)
					<h3 class="applying-bloc__third-level-title">
						{{ $bloc_subtitle }}
					</h3>
					@endif
				</div>

				<div id="accordion{{ $loop->iteration }}" class="accordions__content collapse">
					@if($bloc_faq)
					<div class="faq__wrapper">
					@foreach($bloc_faq as $faq)
						@include('partials.admission-faq-item', $faq)
					@endforeach
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>