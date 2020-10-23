@extends('layouts.app')

@section('hero')
  <section class="section section-content-block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 px-0">   
          @if ($search_results->banner)
            <div class="content-block__banner" style="background-image:url({{ $search_results->banner }});">
              @if ($search_results->main_title)
                <h1 class="content-block__main-title">{!! $search_results->main_title !!}</h1>
              @endif
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert-wrapper"> 
      <div class="alert alert-warning">
        <p>{{ __('Sorry, no results were found.', 'sage') }}</p>
      </div>
      {!! get_search_form(false) !!}
    </div>
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  @php
    $args = array(
      'show_all' => true,
      'prev_next' => false,
    );
  @endphp
  {!! the_posts_pagination( $args ) !!}
@endsection
