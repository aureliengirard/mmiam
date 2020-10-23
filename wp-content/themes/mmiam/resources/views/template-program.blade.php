{{--
  Template Name: Program Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-header')
    @include('partials.content-program')
    @include('partials.content-generic')
    @include('partials.content-cta-newsletter')
  @endwhile
@endsection
