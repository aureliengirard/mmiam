@if (!empty($website_url) && !empty($logo))
<li class="footer-partners__item">
	<a class="footer-partners__link" href="{{ esc_url($website_url) }}" target="_blank">
		@if (!empty($name))
		<img class="img-fluid" src="{{ $logo_url }}" alt="{{ $name }}">
		@else
		<img class="img-fluid" src="{{ $logo_url }}" alt="{{ $logo_alt }}">
		@endif
	</a>
</li>
@endif