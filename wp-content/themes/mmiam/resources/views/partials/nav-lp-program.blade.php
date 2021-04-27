<div class="navigation">
    <img src="{{ $landing_menu_logo->url }}" alt="{{ $landing_menu_logo->alt }}"/>

    <nav class="nav">
      <ul>
        <div class='item'>
          @foreach($lp_menu_items as $menu_item)
            @include('partials.nav-lp-program-item', $menu_item)
          @endforeach
        </div>
        <div class="icon">
          @foreach($lp_social_link as $social_item)
            @include('partials.nav-lp-program-social-item', $social_item)
          @endforeach
        </div>
      </ul>
    </nav>
</div>
