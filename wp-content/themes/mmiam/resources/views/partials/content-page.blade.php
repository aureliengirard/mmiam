<section class="section section-page-content">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12">
				@include('partials.page-header')

				<div class="wysiwyg">
					@php the_content() @endphp
				</div>
			</div>
		</div>
	</div>
</section>
