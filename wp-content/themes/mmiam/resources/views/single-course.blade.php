@extends('layouts.course')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-course')
  @endwhile
@endsection
