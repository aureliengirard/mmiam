{{--
  Template Name: Admission Process Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-admission-process')
    @include('partials.content-cta-contact-us')
  @endwhile
@endsection
