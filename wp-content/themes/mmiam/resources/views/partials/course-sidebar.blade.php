@if($course_list_by_category)
	@foreach($course_list_by_category as $course_category)
		@include('partials.course-list-by-category', $course_category)
	@endforeach
@endif