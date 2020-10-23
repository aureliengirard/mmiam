<li class="graduate col-lg-6 col-md-6 col-sm-12 d-flex">
	<div class="index">{{ $loop->iteration }}</div>
	<div class="graduate__inner">
		@if($name)
		<div class="graduate__name">{{ $name }}</div>
		@endif

		@if($job_position)
		<div class="graduate__job-position">{!! $job_position !!}</div>
		@endif

		@if($company || $city)
		<div class="graduate__detail">
			{{ $company }}{{ $company !== '' && $city !== '' ? ', ' : '' }}{{ $city }}
		</div>
		@endif
	</div>
</li>