<div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="footer-partners">
      @if ($footer->partners_title)
      <h3 class="footer-partners__title">{{ $footer->partners_title }}</h3>
      @endif
      
      @if ($footer_partners)
      <ul class="footer-partners__list">
        @foreach($footer_partners as $partner)
          @include('partials.partner-item', $partner)
        @endforeach
      </ul>
      @endif
    </div>

    <div class="footer-sitemap">
      @if ($footer->sitemap_title)
      <h3 class="footer-sitemap__title">{{ $footer->sitemap_title }}</h3>
      @endif

      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-sitemap__menu', 'depth' => 1]) !!}
      @endif
    </div>
  </div>
  
  <div class="col-md-6 col-sm-12">
    <div class="footer-search">
      <h3 class="footer-search__title screen-reader-text">
        {{ __('Search', 'mmiam') }}
      </h3>

      {!! get_search_form(false) !!}
    </div>

    <div class="footer-social">
      @if ($footer->social_title)
      <h3 class="footer-social__title">{{ $footer->social_title }}</h3>
      @endif
      
      @if (has_nav_menu('social_navigation'))
        {!! wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'footer-social__menu', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'depth' => 1]) !!}
      @endif
    </div>

    @if ($footer->blog_cta_text && $footer->blog_cta_url)
    <div class="footer-blog">
      @if ($footer->blog_title)
      <h3 class="footer-blog__title">{{ $footer->blog_title }}</h3>
      @endif

      <div class="footer-blog__text">
        <a class="footer-blog__link" href="{{ $footer->blog_cta_url }}">
          {!! $footer->blog_cta_text !!}
          <svg class="footer-contact__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="170.691px" height="83.725px" viewBox="0 0 170.691 83.725" enable-background="new 0 0 170.691 83.725"
             xml:space="preserve">
            <g>
              <defs>
                <rect id="SVGID_1_" y="0" width="170.691" height="83.725"></rect>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  overflow="visible"></use>
              </clipPath>
              
              <line clip-path="url(#SVGID_2_)" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.5" y1="41.862" x2="166.24" y2="41.862"></line>
              
              <polyline clip-path="url(#SVGID_2_)" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                128.829,2.5 168.191,41.862 128.829,81.225   "></polyline>
            </g>
          </svg>
        </a>
      </div>
    </div>
    @endif

    @if ($footer->contact_cta_text && $footer->contact_cta_url)
    <div class="footer-contact">
      @if ($footer->contact_title)
      <h3 class="footer-contact__title">{{ $footer->contact_title }}</h3>
      @endif
      
      <div class="footer-contact__text">
        <a class="footer-contact__link" href="{{ $footer->contact_cta_url }}">
          {!! $footer->contact_cta_text !!}
          <svg class="footer-contact__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="170.691px" height="83.725px" viewBox="0 0 170.691 83.725" enable-background="new 0 0 170.691 83.725"
             xml:space="preserve">
            <g>
              <defs>
                <rect id="SVGID_1_" y="0" width="170.691" height="83.725"></rect>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  overflow="visible"></use>
              </clipPath>
              
              <line clip-path="url(#SVGID_2_)" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.5" y1="41.862" x2="166.24" y2="41.862"></line>
              
              <polyline clip-path="url(#SVGID_2_)" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                128.829,2.5 168.191,41.862 128.829,81.225   "></polyline>
            </g>
          </svg>
        </a>
      </div>
    </div>
    @endif
  </div>

</div>