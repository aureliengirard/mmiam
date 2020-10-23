<li class="col-md-3 col-sm-12 application-process__step">
	@if($link)
	<a class="application-process__step-anchor" href="{{ esc_url($link) }}">
	@endif
		<div class="application-process__step-number">{{ $loop->iteration }}</div>
		
		@if($name)
		{{ $name }}
		@endif

	@if($link)
	</a>
	@endif
</li>