<form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
  <label>
    <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field w-100" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
  </label>
  <button type="submit" class="search-submit"><span>{{ esc_attr_x( 'Search', 'submit button' ) }}</span></button>
</form>