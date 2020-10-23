@if($professor_title)
<h2 class="professor__title">{{ $professor_title }}</h2>
@endif

@if($professor_list)
<ul class="professor__list no-bullet">
	@foreach($professor_list as $professor)
		@include('partials.course-professor-item', $professor)
	@endforeach
</ul>
@endif