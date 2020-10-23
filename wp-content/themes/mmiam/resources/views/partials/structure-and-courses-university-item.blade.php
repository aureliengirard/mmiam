<li class="structure-and-courses__university">
	@if($name)
	<div class="university-name">
		<div class="number">{{ $loop->iteration }}</div>
		{{ $name }}
	</div>
	@endif
	@if($city_and_country)
	<div class="university-country">{{ $city_and_country }}</div>
	@endif
	@if($credits_detail)
	<div class="university-credits">{{ $credits_detail }}</div>
	@endif
	@if($period_detail)
	<div class="univertity-period">{{ $period_detail }}</div>
	@endif

	@if( !empty($courses_list[0]['course_id']) )
	<ul class="university-courses">
		@foreach($courses_list[0]['course_id'] as $course_id)
			<li class="university-course">
				<a class="university-course__link" href="{{ get_permalink($course_id) }}">
					{!! get_the_title($course_id) !!}	
				</a>
			</li>
		@endforeach
	</ul>
	@endif

	@if($campus_abroad)
		@if($campus_abroad_link)
		<a class="campus-abroad__link" href="{{ $campus_abroad_link_url }}" {{ $campus_abroad_link_target !== '' ? 'rel=noopener target='.$campus_abroad_link_target : '' }}>
			{{ $campus_abroad }}
		</a>
		@else
			{{ $campus_abroad }}
		@endif
	@endif
</li>