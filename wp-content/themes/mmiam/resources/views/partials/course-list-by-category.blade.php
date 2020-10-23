@if($course_category['name'])
<h3 class="course-sidebar__title">{{ $course_category['name'] }}</h3>
@endif

@if( !empty($course_category['course_list'][0]['course_id']) )
<ul class="no-bullet course-sidebar__list">
	@foreach($course_category['course_list'][0]['course_id'] as $course_id)
		<li class="course-sidebar__item {{ $post->ID === $course_id ? 'active' : '' }}">
			<a class="course-sidebar__link" href="{{ get_permalink($course_id) }}">
				{!! get_the_title($course_id) !!}	
			</a>
		</li>
	@endforeach
</ul>
@endif