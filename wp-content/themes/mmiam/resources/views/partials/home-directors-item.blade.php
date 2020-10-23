<li class="directors-list__item d-flex">
	@if($picture_url)
	<div class="directors-list__picture">
		<img class="img-fluid" src="{{ $picture_url }}" alt="{{ $picture_alt }}">
	</div>
	@endif
	
	<div>
		@if($name)
		<div class="directors-list__name">
			{{ $name }}
		</div>
		@endif

		@if($title)
		<div class="directors-list__title">
			{{ $title }}
		</div>
		@endif

		@if($company)
		<div class="directors-list__company">
			{{ $company }}
		</div>
		@endif

		@if($city)
		<div class="directors-list__city">
			{{ $city }}
		</div>
		@endif
	</div>
</li>