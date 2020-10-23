<li class="professor__item">
	@if($professor_link)
	<a class="professor__link" href="{{ esc_url($professor_link) }}" target="_blank" rel="noopener">
		{{ $professor_name }}
	</a>
	@else
	{{ $professor_name }}
	@endif
</li>