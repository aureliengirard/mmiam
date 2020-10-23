@extends('layouts.app')

@section('hero')
  @include('partials.archive-hero')
@endsection

@section('content') 
  @if( is_archive() )
    @include('partials.page-header')
  @endif

  @if (!have_posts())
    <div class="alert-wrapper"> 
      <div class="alert alert-warning">
        <p>{{ __('Sorry, no results were found.', 'sage') }}</p>
      </div>
      {!! get_search_form(false) !!}
    </div>
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  @php
    $args = array(
      'show_all' => true,
      'prev_next' => false,
    );
  @endphp
  {!! the_posts_pagination( $args ) !!}
@endsection
