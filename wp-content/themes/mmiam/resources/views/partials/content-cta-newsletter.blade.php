@if($cta_newsletter)
<section class="section section-content-block section-newsletter">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0 section-newsletter__wrapper">
				<div class="row align-items-center content-block__call-to-action">
					<div class="wysiwyg col-md-6 col-sm-12">
						{!! $cta_newsletter->content !!}
					</div>
					<div class="col-md-6 col-sm-12 content-block__iframe">
						<iframe src="https://gda.secure.force.com/users/EmailSignup?type=MMIAM"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endif