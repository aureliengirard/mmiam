<article @php post_class() @endphp>
  <header>
    <div class="row post-header">
      <div class="post-summary">
        @if (get_post_type() === 'post')
        <div class="entry-meta">
          @include('partials.entry-meta')
        </div>
        @endif

        <h3 class="entry-title">
          {{ get_the_title() }}
        </h3>

        @if( get_post_type() === 'post' && get_field('post_subtitle', get_the_id()) )
          <h4 class="entry-subtitle">
            @php the_field('post_subtitle', get_the_id()) @endphp
          </h4>
        @endif

        @if( get_post_type() === 'post' && get_field('post_author', get_the_id()) ) 
          <p class="byline entry-author">
            {{ __('by', 'sage') }} @php the_field('post_author', get_the_id()) @endphp.
            </a>
          </p>
        @endif
      </div>
    </div>
  </header> 

  @if( get_post_type() === 'page' )
    @if( get_field('page_excerpt', get_the_id()) )
    <div class="entry-summary">
      <p>@php the_field('page_excerpt', get_the_id()) @endphp</p>
    </div>
    @elseif( get_the_excerpt() != '' )
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
    @endif
  @elseif( get_post_type() === 'post' )
    @if( get_the_excerpt() != '' )
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
    @endif
  @endif

  <a class="read-more" href="{{ get_permalink() }}">{{ __('Read More', 'sage') }}</a>
</article>