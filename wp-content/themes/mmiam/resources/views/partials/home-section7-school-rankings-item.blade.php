<li class="school-rankings__item d-flex align-items-center">
	@if( $text )
	<div>
	{!! $text !!}
	</div>
	@endif

	@if( $icon )
	<span class="school-rankings__icon icon icon-{{ $icon_value }}"></span>
	@endif
</li>