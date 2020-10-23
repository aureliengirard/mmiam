{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="slider vertical-slider">
    	<div class="slick home-slider">
	    	@include('partials.content-home')
	    </div>
  	</div>
    @include('partials.content-cta-newsletter')
  @endwhile
@endsection
