<li class="structure-and-courses-skills__item d-flex align-items-center">
	<span class="index">{{ $loop->iteration }}</span>
	@if($text)
	<span>{!! $text !!}</span>
	@endif
</li>