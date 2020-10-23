@extends('layouts.app')

@section('content')
	<section class="section section-page-content">
		<div class="container-fluid">
			<div class="row justify-content-center">	  
			  <div class="col-md-10 col-sm-12 m-auto">
			    @include('partials.page-header')

				  @if( !have_posts() )
				    <div class="alert-wrapper">
					    <div class="alert">
					      <p>{{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}</p>
					    </div>
					    {!! get_search_form(false) !!}
				    </div>
				  @endif
			  </div>
			</div>
		</div>
	</section>
@endsection
