<div class="faq__item">
	@if($question)
	<h4 class="faq__title">
		{{ $question }}
	</h4>
	@endif

	@if($answer)
	<div class="wysiwyg faq__answer">
		{!! $answer !!}
	</div>
	@endif
</div>