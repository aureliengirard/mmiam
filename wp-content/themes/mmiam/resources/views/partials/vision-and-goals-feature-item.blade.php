<li class="vision-and-goals-features__item">
	@if($icon['value'])
	<span class="icon icon-{{ $icon['value'] }}"></span>
	@endif

	@if($text)
	{{ $text }}
	@endif
</li>