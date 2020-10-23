<section class="section section-applying-bloc section-admission-process">
	@if($admission_process->anchor)
	<a id="{{ $admission_process->anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($admission_process->main_title)
		<div class="row">
			<div class="col-12">
				<h1 class="applying-bloc__title">
					{{ $admission_process->main_title }}
				</h1>
			</div>
		</div>
		@endif

		<div class="row">
			@if($admission_process->subsection_1_title || $admission_process->subsection_1_content)
			<div class="col-md-6 col-sm-12 applying-bloc__deadlines-wrapper">
				<div class="d-inline-block applying-bloc__deadlines">
					@if($admission_process->subsection_1_title)
					<h2 class="applying-bloc__subtitle">
						{{ $admission_process->subsection_1_title }}
					</h2>
					@endif

					@if($admission_process->subsection_1_content)
					<div class="applying-bloc__content">
						<div class="wysiwyg">
							{!! $admission_process->subsection_1_content !!}
						</div>
					</div>
				</div>
				@endif
			</div>
			@endif

			@if($admission_process->subsection_2_title || $admission_process->subsection_2_content)
			<div class="col-md-6 col-sm-12 applying-bloc__where-to-send-wrapper">
				<div class="d-inline-block applying-bloc__where-to-send">
					@if($admission_process->subsection_2_title)
					<h2 class="applying-bloc__subtitle">
						{{ $admission_process->subsection_2_title }}
					</h2>
					@endif
					
					@if($admission_process->subsection_2_content)
					<div class="applying-bloc__content">
						<div class="wysiwyg">
							{!! $admission_process->subsection_2_content !!}
						</div>
					</div>
					@endif
				</div>
			</div>
			@endif
		</div>
	</div>
</section>

<section class="section section-applying-bloc section-application-process">
	<div class="container-fluid">		
		@if($application_process->main_title)
		<div class="row justify-content-center">
			<div class="col-lg-6 col-sm-12">
				<div class="applying-bloc__subtitle">
					{!! $application_process->main_title !!}
				</div>
			</div>
		</div>
		@endif

		@if($application_process_steps)
		<div class="row">
			<div class="col-12 px-0">
				<ol class="d-flex no-bullet application-process__steps">
					@foreach($application_process_steps as $step)
						@include('partials.application-process-step-item', $step)
					@endforeach
				</ol>
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-applying-bloc section-application">
	<div class="container-fluid">
		@if($application_process->step_1_title || $application_process->step_1_a_title)
		<div class="row">
			<div class="col-12">
				@if($application_process->step_1_anchor)
				<a id="{{ $application_process->step_1_anchor }}"></a>
				@endif

				@if($application_process->step_1_title)
				<h2 class="applying-bloc__title">
					<div class="applying-bloc__title-number">1</div>
					{{ $application_process->step_1_title }}
				</h2>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_1_a_title || $application_process->step_1_a_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_1_a_anchor)
				<a id="{{ $application_process->step_1_a_anchor }}"></a>
				@endif

				@if($application_process->step_1_a_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_1_a_title }}
				</h3>
				@endif

				@if($application_process->step_1_a_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg">
						{!! $application_process->step_1_a_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_1_b_title || $application_process->step_1_b_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_1_b_anchor)
				<a id="{{ $application_process->step_1_b_anchor }}"></a>
				@endif

				@if($application_process->step_1_b_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_1_b_title }}
				</h3>
				@endif

				@if($application_process->step_1_b_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg two-columns">
						{!! $application_process->step_1_b_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_1_c_title || $application_process->step_1_c_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_1_c_anchor)
				<a id="{{ $application_process->step_1_c_anchor }}"></a>
				@endif

				@if($application_process->step_1_c_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_1_c_title }}
				</h3>
				@endif

				@if($application_process->step_1_c_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg">
						{!! $application_process->step_1_c_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_1_d_title || $application_process->step_1_d_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_1_d_anchor)
				<a id="{{ $application_process->step_1_d_anchor }}"></a>
				@endif

				@if($application_process->step_1_d_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_1_d_title }}
				</h3>
				@endif

				@if($application_process->step_1_d_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg two-columns">
						{!! $application_process->step_1_d_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_1_e_title || $application_process->step_1_e_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_1_e_anchor)
				<a id="{{ $application_process->step_1_e_anchor }}"></a>
				@endif

				@if($application_process->step_1_e_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_1_e_title }}
				</h3>
				@endif

				@if($application_process->step_1_e_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg two-columns">
						{!! $application_process->step_1_e_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-applying-bloc section-review">
	@if($application_process->step_2_anchor)
	<a id="{{ $application_process->step_2_anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($application_process->step_2_title)
		<div class="row">
			<div class="col-12">
				@if($application_process->step_2_title)
				<h2 class="applying-bloc__title">
					<div class="applying-bloc__title-number">2</div>
					{{ $application_process->step_2_title }}
				</h2>
				@endif
			</div>
		</div>
		@endif

		@if($application_process->step_2_a_title || $application_process->step_2_content || $application_process->step_2_a_content)
		<div class="row bordered-content bordered-content__open-left bordered-content__with-title">
			<div class="col-12">
				@if($application_process->step_2_a_title)
				<h3 class="applying-bloc__third-level-title">
					{{ $application_process->step_2_a_title }}
				</h3>
				@endif

				@if($application_process->step_2_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg">
						{!! $application_process->step_2_content !!}
					</div>
				</div>
				@endif

				@if($application_process->step_2_a_content)
				<div class="applying-bloc__content">
					<div class="wysiwyg two-columns">
						{!! $application_process->step_2_a_content !!}
					</div>
				</div>
				@endif
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-applying-bloc section-decision">
	@if($application_process->step_3_anchor)
	<a id="{{ $application_process->step_3_anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($application_process->step_3_title)
		<div class="row">
			<div class="col-12">
				<h2 class="applying-bloc__title">
					<div class="applying-bloc__title-number">3</div>
					{{ $application_process->step_3_title }}
				</h2>
			</div>
		</div>
		@endif

		@if($application_process->step_3_content)
		<div class="row bordered-content bordered-content__open-right">
			<div class="col-12">
				<div class="applying-bloc__content">
					<div class="wysiwyg">
						{!! $application_process->step_3_content !!}
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-applying-bloc section-confirmation">
	@if($application_process->step_4_anchor)
	<a id="{{ $application_process->step_4_anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($application_process->step_4_title)
		<div class="row">
			<div class="col-12">
				<h2 class="applying-bloc__title">
					<div class="applying-bloc__title-number">4</div>
					{{ $application_process->step_4_title }}
				</h2>
			</div>
		</div>
		@endif

		@if($application_process->step_4_content)
		<div class="row bordered-content bordered-content__open-left">
			<div class="col-12">
				<div class="applying-bloc__content">
					<div class="wysiwyg two-columns">
						{!! $application_process->step_4_content !!}
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
</section>

<section class="section section-applying-bloc section-admission-faq">
	@if($admission_faq->anchor)
	<a id="{{ $admission_faq->anchor }}"></a>
	@endif

	<div class="container-fluid">
		@if($admission_faq->main_title)
		<div class="row">
			<div class="col-12">
				<h2 class="applying-bloc__title">
					{{ $admission_faq->main_title }}
				</h2>
			</div>
		</div>
		@endif

		@foreach($admission_faq_bloc as $faq_bloc)
			@include('partials.admission-faq-bloc-item', $faq_bloc)
		@endforeach
	</div>	
</section>
