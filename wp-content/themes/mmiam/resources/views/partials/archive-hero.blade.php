@if($blog->banner)
<section class="section section-blog-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 px-0">   
        <div class="blog-banner__background" style="background-image:url({{ $blog->banner }});">
          <div class="blog-banner__text">
            @if ($blog->main_title)
              <h1 class="blog-banner__main-title">{!! $blog->main_title !!}</h1>
            @endif

            @if($blog->subtitle)
              <h2 class="blog-banner__subtitle">{!! $blog->subtitle !!}</h2>
            @endif
          </div>
        </div>
      </div>
    </div>
</section>
@endif