{{--
  Template Name: Generic Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-generic')
  @endwhile
@endsection
