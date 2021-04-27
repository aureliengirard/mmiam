<div class="container-fluid lp-program">
    <!--- header section --->
    <div class="head text-center" style="background-image:url('{{ $landing_hero_bg->url }}');">
      @if($landing_hero_logo)
        <div class="main-logo">
            	<img class="school-logo" src="{{ $landing_hero_logo->url }}" alt="{{ $landing_hero_logo->alt }}">
        </div>
      @endif

      @if($landing_hero->hero_quote)
        <div class="title text-left">
          <h1>{!! $landing_hero->hero_quote !!}</h1>
        </div>
      @endif
        <div class="thin-title text-right">
          <h2>{!! $landing_hero->hero_quote_author !!}</h2>
            <span>
              {!! $landing_hero->hero_quote_author_title !!}
          </span>
        </div>
        @if($landing_general->lp_cta_label_short)
          <div class="divider-line">
            <p><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label_short !!}</a></p>
          </div>
         @endif
        <div class="arrow">
            <a href="#{!! $landing_sections_id->section_ue_id !!}" class="go-down"><img src="@asset('images/arrow-down.png')"/></a>
        </div>
    </div>
    <!-- end header section -->

    <section id="{!! $landing_sections_id->section_ue_id !!}" >
        <div class="wrap">
            <div class="row">
                <div class="col-lg-4 col-md-4 section_nav">
                    @include('partials.nav-lp-program')
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="content">
                        {!! $landing_sections_content->section_ue_content !!}

                        @if($landing_sections_content->section_ue_video)
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe  class="embed-responsive-item" src="{!! $landing_sections_content->section_ue_video !!}" allowfullscreen></iframe>
                          </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if($landing_general->lp_cta_label_short)
          <div class="divider-line">
            <p><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label_short !!}</a></p>
          </div>
         @endif
    </section>

    <section id="{!! $landing_sections_id->section_ois_id !!}" >
        <div class="wrap">
            <div class="row">
                <div class="col-lg-4 col-md-4 section_nav">
                    @include('partials.nav-lp-program')
                </div>
                <div class="col-lg-8 col-md-8" id="register">
                    <div class="content custom">
                      {!! $landing_sections_content->section_ois_content !!}

                       @if($landing_general->lp_form)
                         <!-- IFRAME STARTS HERE -->
                         <iframe class="embeded-form "src="{!! $landing_general->lp_form !!}" height="1100px" width="80%" Style="border:none; margin-top:20px;" scrolling="no"></iframe>
                      <!-- END OF IFRAME -->
                      @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-online footer">
            <div class="row mx-0">
              @foreach($lp_ois_img as $images)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                    <img class="img-fluid" alt="{!! $images['img_alt'] !!}" src="{!! $images['img'] !!}"/>
                </div>
              @endforeach
            </div>
        </div>
    </section>

    <section id="{!! $landing_sections_id->section_ic_id !!}" >
        <div class="wrap">
            <div class="row">
                <div class="col-lg-4 col-md-4 section_nav">
                    @include('partials.nav-lp-program')
                </div>
                <div class="col-lg-8 col-md-8">
                  @if($landing_general->lp_cta_label)
                    <div class="bandler">
                      <p class="bandle-text"><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label !!}</a></p>
                      <div class="triangle-left"></div>
                    </div>
                   @endif
                    <div class="info">
                      {!! $landing_sections_content->section_ic_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="{!! $landing_sections_id->section_iify_id !!}" class="has-top-border">
        <div class="wrap">
            <div class="row">
                <div class="col-lg-4 col-md-4 section_nav">
                    @include('partials.nav-lp-program')
                </div>
                <div class="col-lg-8 col-md-8">
                  @if($landing_general->lp_cta_label)
                    <div class="bandler">
                      <p class="bandle-text"><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label !!}</a></p>
                      <div class="triangle-left"></div>
                    </div>
                   @endif
                    <div class="info custom">
                        {!! $landing_sections_content->section_iify_content !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer international" style="background-image: url({{ $landing_ic_quote_img->url }});">
            <div class="footer-wrap">
                <div class="row">
                    <div class="col-xl-2 col-0"></div>
                    <div class="col-xl-5 col-md-6 col-sm-5 col-6">
                        <h3 class="footer-title">{!! $landing_sections_content->section_ic_qtitle !!}</h3>
                        <div class="footer-nav intern">
                            <ul>
                                @foreach($lp_ic_quotes as $quote)
                                  @include('partials.lp-program-nav', $quote)
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-5 col-md-6 col-sm-7 col-6">
                        <div class="career-text inner-content">
                          @foreach($lp_ic_quotes as $quotes)
                            @if ($loop->first)
                              <p>{!! $quotes['quote'] !!}</p>
                            @endif
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(".footer-nav.intern > ul li").each(function() {
                $($(this)).click(function() {
                  @foreach($lp_ic_quotes as $quotes)
                    if ($(this).siblings().hasClass('active')){
                        $(this).siblings().removeClass( 'active' );
                    }
                    if ($(this).attr('class') === '{!! $quotes['id'] !!}'){
                       $(this).addClass( 'active' );
                       $( '.career-text p' ).text( '{!! $quotes['quote'] !!}' );
                    }
                  @endforeach
                });
            });
        });
    </script>

    <section id="{!! $landing_sections_id->section_op_id !!}" >
        <div class="wrap">
             <div class="row">
                 <div class="col-lg-4 col-md-4 section_nav">
                     @include('partials.nav-lp-program')
                 </div>
                 <div class="col-lg-8 col-md-8">
                   @if($landing_general->lp_cta_label)
                     <div class="bandler">
                       <p class="bandle-text"><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label !!}</a></p>
                       <div class="triangle-left"></div>
                     </div>
                    @endif
                    <div class="info">
                        {!! $landing_sections_content->section_op_content !!}
                    </div>

                </div>
             </div>
        </div>

        <div class="footer programes-background"
          @foreach($lp_op_cities as $cities) @if ($loop->first)style="background-image: url('{!! $cities['bg_img'] !!}');" @endif @endforeach
          >
            <div class="footer-wrap">
                <div class="row">
                    <div class="col-xl-2 col-0"></div>
                    <div class="col-xl-5 col-md-6 col-sm-5 col-6">
                        <h3 class="footer-title">{!! $landing_sections_content->section_op_travel_title !!}</h3>
                        <div class="footer-nav courses">
                            <ul>
                              @foreach($lp_op_cities as $cities)
                                <li class="{!! $cities['id'] !!}@if ($loop->first) active @endif"><a>{!! $cities['title'] !!}</a></li>
                              @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-5 col-md-6 col-sm-7 col-6">
                        <div class="inner-content">
                            @foreach($lp_op_cities as $cities)
                                @if ($loop->first)
                                    <div class="ville-text"><p>{!! $cities['city'] !!}</p></div>
                                    <div class="programe-text"><p>{!! $cities['desc'] !!}</p></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
      jQuery(document).ready(function($){
        $('.footer-nav.courses > ul li').each(function() {
            $($(this)).click(function() {
              @foreach($lp_op_cities as $cities)
                if ($(this).siblings().hasClass('active')){
                  $(this).siblings().removeClass( 'active' );
                }
                if ($(this).attr('class') === '{!! $cities['id'] !!}'){
                  $('.programes-background').css({'background-image':'url({!! $cities['bg_img'] !!})'});
                  $( '.ville-text p' ).text( '{!! $cities['city'] !!}' ).fadeIn();
                  $( '.programe-text p' ).text( '{!! $cities['desc'] !!}' ).fadeIn();
                }
              @endforeach
            });
        });
      });
    </script>

    <section id="{!! $landing_sections_id->section_faq_id !!}" class="FAQ">
        <div class="wrap" id="down">
             <div class="row">
                 <div class="col-lg-4 col-md-4 section_nav">
                     @include('partials.nav-lp-program')
                 </div>

                 <div class="col-lg-8 col-md-8 ">
                   @if($landing_general->lp_cta_label)
                     <div class="bandler">
                       <p class="bandle-text"><a href="#{!! $landing_general->lp_cta_link !!}" class="form-link">{!! $landing_general->lp_cta_label !!}</a></p>
                       <div class="triangle-left"></div>
                     </div>
                    @endif
                    <div class="info">
                        {!! $landing_sections_content->section_faq_content !!}
                    </div>
                </div>
             </div>
        </div>

        <div class="back-to-top">
          <a id="back-to-top"><img src="@asset('images/back-to-top.png')"/></a>
          <p>Back to top</p>
          @if($landing_general->lp_cta_back_home)
            <p><a href="{{ home_url('/') }}">{!! $landing_general->lp_cta_back_home !!}</a></p>
          @endif
        </div>
        <footer>
            <div class="backgroung"><img src="{{ $landing_footer_img->url }}" style="width:100%;"/></div>
        </footer>
    </section>
</div>


<!-- end container-fluid -->
