@if($cta_contact_us)
<section class="section section-content-block section-cta-contact-us">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">
				<div class="content-block__call-to-action">
					<div class="wysiwyg">	
						{!! $cta_contact_us->content !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endif