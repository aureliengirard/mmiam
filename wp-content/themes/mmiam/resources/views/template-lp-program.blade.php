{{--
  Template Name: Program LP program
--}}

@extends('layouts.lp')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-lp-program')
  @endwhile
@endsection
