<div class="accordions__item">
	<div class="accordions__panel collapsed" data-toggle="collapse" data-target="#accordion{{ $loop->iteration }}" aria-expanded="false">
		@if($question)
		<h2 class="accordions_title">
			{{ $question }}
		</h2>
		@endif
	</div>
	<div id="accordion{{ $loop->iteration }}" class="accordions__content collapse">
		@if($answer)
		<div class="wysiwyg">
			{!! $answer !!}
		</div>
		@endif
	</div>
</div>