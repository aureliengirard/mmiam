<article @php post_class() @endphp>
  <header>
    <div class="row post-header">
      @if( has_post_thumbnail() )
        <a class="post-thumbnail col-md-4 col-sm-12" href="{{ get_permalink() }}">
          {!! get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ) !!}
        </a>
      @endif

      <div class="post-summary">
        <div class="entry-meta">
          @include('partials.entry-meta')
        </div>

        <h1 class="entry-title">{!! get_the_title() !!}</h1>

        @if( $single_post->subtitle )
        <h2 class="entry-subtitle">
          {{ $single_post->subtitle }}
        </h2>
        @endif

        @if( $single_post->author ) 
        <p class="byline entry-author">
          {{ __('by', 'sage') }} {{ $single_post->author }}.
          </a>
        </p>
        @endif
      </div>
    </div>
  </header>

  <div class="entry-content">
    <div class="wysiwyg">
      @if( $single_post->introduction )
      <p class="entry-introduction">
        <strong>{!! $single_post->introduction !!}</strong>
      </p>
      @endif    
  
      @php the_content() @endphp
    </div>
  </div>
  
  <footer class="entry-footer">
    @if(App\is_paginated_post())
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @endif

    <nav class="post-nav">
      <ul class="d-flex pager no-bullet">
        <li class="col-6 pager__link previous"><?php previous_post_link( '%link', 'previous', false, '', 'category' ); ?></li>
        <li class="col-6 pager__link next"><?php next_post_link( '%link', 'next', false, '', 'category' ); ?></li>
      </ul>
    </nav>
  </footer>

  @if(comments_open())
    @php comments_template('/partials/comments.blade.php') @endphp
  @endif
</article>
