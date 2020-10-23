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

        <h3 class="entry-title">
          {{ get_the_title() }}
        </h3>

        @if( get_field('post_subtitle', get_the_id()) )
          <h4 class="entry-subtitle">
            @php the_field('post_subtitle', get_the_id()) @endphp
          </h4>
        @endif

        @if( get_field('post_author', get_the_id()) ) 
          <p class="byline entry-author">
            {{ __('by', 'sage') }} @php the_field('post_author', get_the_id()) @endphp.
            </a>
          </p>
        @endif
      </div>
    </div>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
  <a class="read-more" href="{{ get_permalink() }}">{{ __('Read More', 'sage') }}</a>
</article>
