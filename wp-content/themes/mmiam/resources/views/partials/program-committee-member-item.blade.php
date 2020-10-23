<li class="col-12 member__item">
	@if($name)
	<div class="item-name">{{ $name }}</div>
	@endif
	@if($title)
	<div class="item-title">{!! $title !!}</div>
	@endif
	@if($company || $city)
	<div class="item-detail">{{ $company }}{{ $company !== '' && $city !== '' ? ', ' : '' }}{{ $city }}</div>
	@endif
</li>