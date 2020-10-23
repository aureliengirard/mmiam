<section class="section section-program-bloc section-vision-and-goals">
	@if($vision_and_goals->anchor)
	<a id="{{ $vision_and_goals->anchor }}"></a>
	@endif

	<div class="container-fluid">
		
		@if($vision_and_goals->main_title || $vision_and_goals->subsection_1_title || $vision_and_goals->subsection_1_content)
		<div class="row program-bloc">
			<div class="col-12">
				@if($vision_and_goals->main_title)
					<h1 class="program-bloc__title">
						<span>{{ $vision_and_goals->main_title }}</span>
					</h1>
				@endif

				@if($vision_and_goals->subsection_1_title)
					<h2 class="program-bloc__subtitle h1">
						{{ $vision_and_goals->subsection_1_title }}
					</h2>
				@endif

				@if($vision_and_goals->subsection_1_content)
					<div class="program-bloc__content">
						<div class="wysiwyg">
							{!! $vision_and_goals->subsection_1_content !!}
						</div>
					</div>
				@endif
			</div>
		</div>
		@endif

		@if($vision_and_goals->subsection_1_left_column_content || $vision_and_goals->subsection_1_right_column_content)
		<div class="row subsection-1">
			@if($vision_and_goals->subsection_1_left_column_content)
			<div class="col-lg-6 col-md-12 bg-brand-2 d-flex align-items-center">
				<div class="row align-items-center justify-content-center subsection-1__left-column mx-auto">
					@if($vision_and_goals_subsection1->part_1)
					<div>
						<div class="subsection-1__left-column-part1">
							{!! $vision_and_goals_subsection1->part_1 !!}
						</div>
					</div>
					@endif
					@if($vision_and_goals_subsection1->part_2)
					<div>
						<div class="subsection-1__left-column-part2 mx-auto">
							{{ $vision_and_goals_subsection1->part_2 }}
						</div>
					</div>
					@endif
					@if($vision_and_goals_subsection1->part_3)
					<div class="col-lg-5 col-md-5 col-sm-12">
						<div class="subsection-1__left-column-part3">
							{!! $vision_and_goals_subsection1->part_3 !!}
						</div>
					</div>
					@endif
				</div>
			</div>
			@endif

			@if($vision_and_goals->subsection_1_right_column_content)
			<div class="col-lg-6 col-md-12 bg-brand-1 d-flex align-items-center">
				<div class="subsection-1__right-column">
					<p class="mb-0">{!! $vision_and_goals->subsection_1_right_column_content !!}</p>
				</div>
			</div>
			@endif
		</div>
		@endif

		@if($vision_and_goals->subsection_2_title)
		<div class="row">
			<div class="col-12 pb-3">
				<h2 class="program-bloc__subtitle h1">
					{{ $vision_and_goals->subsection_2_title }}
				</h2>
			</div>
		</div>
		@endif

		@if($vision_and_goals->subsection_2_content || $vision_and_goals_features || $vision_and_goals->subsection_2_call_to_action)
		<div class="row subsection-2">
			<div class="col-12">
				@if($vision_and_goals->subsection_2_content)
					<div class="program-bloc__content pl-xl-3">
						<div class="wysiwyg">
							{!! $vision_and_goals->subsection_2_content !!}
						</div>
					</div>
				@endif

				@if($vision_and_goals_features)
				<ul class="vision-and-goals-features__list no-bullet clearfix">
					@foreach($vision_and_goals_features as $feature)
						@include('partials.vision-and-goals-feature-item', $feature)
					@endforeach
				</ul>
				@endif

				@if($vision_and_goals->subsection_2_call_to_action)
				<div class="content-block__call-to-action">
					<div class="wysiwyg">
						{!! $vision_and_goals->subsection_2_call_to_action !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

	</div>
</section>

<section class="section section-program-bloc section-structure-and-courses">
	@if($structure_and_courses->anchor)
	<a id="{{ $structure_and_courses->anchor }}"></a>
	@endif

	<div class="container-fluid">
		
		@if($structure_and_courses->main_title || $structure_and_courses->subsection_1_title || $structure_and_courses_skills)
		<div class="row">
			<div class="col-12">
				@if($structure_and_courses->main_title)
				<h1 class="program-bloc__title">
					<span>{{ $structure_and_courses->main_title }}</span>
				</h1>
				@endif

				@if($structure_and_courses->subsection_1_title)
				<h2 class="program-bloc__subtitle h1 mx-auto">
					{!! $structure_and_courses->subsection_1_title !!}
				</h2>
				@endif

				@if($structure_and_courses_skills)
				<ol class="structure-and-courses-skills__list no-bullet d-flex flex-column">
					@foreach($structure_and_courses_skills as $skill)
						@include('partials.structure-and-courses-skill-item', $skill)
					@endforeach
				</ol>
				@endif
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_2_title || $structure_and_courses->subsection_2_content)
		<div class="row justify-content-center">
			<div class="col-12 pb-3">
				@if($structure_and_courses->subsection_2_title)
				<h2 class="program-bloc__subtitle">
					{{ $structure_and_courses->subsection_2_title }}
				</h2>
				@endif

				@if($structure_and_courses->subsection_2_content)
				<div class="program-bloc__content">
					<div class="wysiwyg">
						{!! $structure_and_courses->subsection_2_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if($structure_and_courses_program_attributes)
		<div class="row">
			<div class="col-12 p-0 mb-3 mt-3">
				<ul class="structure-and-courses__program-attributes d-flex no-bullet flex-wrap">
					@foreach($structure_and_courses_program_attributes as $program_attribute)
						@include('partials.structure-and-courses-program-attribute-item', $program_attribute)
					@endforeach
				</ul>
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_3_title)
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-12 pb-3">
				<h2 class="program-bloc__subtitle h1">
					{!! $structure_and_courses->subsection_3_title !!}
				</h2>
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_3_content || $structure_and_courses_universities)
		<div class="row subsection-3">
			<div class="col-12">
				@if($structure_and_courses->subsection_3_content)
					<div class="program-bloc__content">
						<div class="wysiwyg">
							{!! $structure_and_courses->subsection_3_content !!}
						</div>
					</div>
				@endif

				@if($structure_and_courses_universities)
				<ol class="structure-and-courses__universities no-bullet">
					@foreach($structure_and_courses_universities as $university)
						@include('partials.structure-and-courses-university-item', $university)
					@endforeach
				</ol>
				@endif
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_4_title)
		<div class="row">
			<div class="col-12 pb-3">
				<h2 class="program-bloc__subtitle h1">
					{{ $structure_and_courses->subsection_4_title }}
				</h2>
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_4_left_column_content || $structure_and_courses->subsection_4_right_column_content)
		<div class="row subsection-4">
			@if($structure_and_courses->subsection_4_left_column_content)
			<div class="col-lg-6 col-md-12 bg-brand-2 d-flex align-items-center justify-content-center">
				<div class="subsection-4__left-column">
					<div class="wysiwyg">
						{!! $structure_and_courses->subsection_4_left_column_content !!}
					</div>
				</div>
			</div>
			@endif
			
			@if($structure_and_courses->subsection_4_right_column_content)
			<div class="col-lg-6 col-md-12 bg-brand-1 d-flex align-items-center justify-content-center">
				<div class="subsection-4__right-column">
					<div class="wysiwyg">
						{!! $structure_and_courses->subsection_4_right_column_content !!}
					</div>
				</div>
			</div>
			@endif
		</div>
		@endif

		@if($structure_and_courses->subsection_4_data_table)
		<div class="row">
			<div class="col-12 p-0">
				<div class="subsection-4__data-table">
					<div class="wysiwyg">
						{!! $structure_and_courses->subsection_4_data_table !!}
					</div>
				</div>
			</div>
		</div>
		@endif

		@if($structure_and_courses->subsection_4_call_to_action)
		<div class="row">
			<div class="col-12 p-0 mb-5">
				<div class="subsection-4__call-to-action content-block__call-to-action">
					<div class="wysiwyg">
						{!! $structure_and_courses->subsection_4_call_to_action !!}
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-program-bloc section-meet-our-team">
	@if($meet_our_team->anchor)
	<a id="{{ $meet_our_team->anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($meet_our_team->main_title || $meet_our_team->subsection_1_title)
		<div class="row">
			<div class="col-12">
				@if($meet_our_team->main_title)
				<h1 class="program-bloc__title">
					<span>{{ $meet_our_team->main_title }}</span>
				</h1>
				@endif

				@if($meet_our_team->subsection_1_title)
				<h2 class="program-bloc__subtitle h1 mx-auto mb-3">
					{!! $meet_our_team->subsection_1_title !!}
				</h2>
				@endif
			</div>
		</div>
		@endif

		@if($international_advisory_committee)
		<div class="row">
			<div class="col-12">
				@if($international_advisory_committee->title)
				<h3 class="program-bloc__third-level-title">
					{{ $international_advisory_committee->title }}
				</h3>
				@endif

				@if($international_advisory_committee->content)
				<div class="program-bloc__content mb-lg-5 mb-3">
					<div class="wysiwyg">
						{!! $international_advisory_committee->content !!}
					</div>
				</div>
				@endif

				@if($international_advisory_committee->members)
				<ul class="member__list no-bullet d-flex flex-wrap">
					@foreach($international_advisory_committee->members as $member)
						@include('partials.international-advisory-committee-member-item', $member)
					@endforeach
				</ul>
				@endif
			</div>
		</div>
		@endif

		@if($program_coordinator_team || $program_committee)
		<div class="row">
			@if($program_coordinator_team)
			<div class="col-md-6 col-sm-12">
				@if($program_coordinator_team->title)
				<h3 class="program-bloc__third-level-title">
					{{ $program_coordinator_team->title }}
				</h3>
				@endif

				@if($program_coordinator_team->logo)
				<div class="program-coordinator-team__logo">
					<img src="{{ $program_coordinator_team->logo_url }}" alt="{{ $program_coordinator_team->logo_alt }}">
				</div>
				@endif

				@if($program_coordinator_team->members)
				<ul class="member__list no-bullet d-flex flex-wrap">
					@foreach($program_coordinator_team->members as $member)
						@include('partials.program-coordinator-team-member-item', $member)
					@endforeach
				</ul>
				@endif
			</div>
			@endif
			
			@if($program_committee)
			<div class="col-md-6 col-sm-12">
				@if($program_committee->title)
				<h3 class="program-bloc__third-level-title">
					{{ $program_committee->title }}
				</h3>
				@endif

				@if($program_committee->members)
				<ul class="member__list no-bullet d-flex flex-wrap">
					@foreach($program_committee->members as $member)
						@include('partials.program-committee-member-item', $member)
					@endforeach
				</ul>
				@endif
			</div>
			@endif
		</div>
		@endif
	</div>
</section>