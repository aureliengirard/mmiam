@if ( is_page() )		
	@php
		$post_ID = $post->ID;
		$sub_menu_items = App\wp_nav_submenu('primary_navigation', $post_ID); 
	@endphp
@endif

<header class="site-header fixed-top {{ !empty($sub_menu_items) ? 'header-with-submenu' : '' }}">
  <div class="container-fluid">
		<div class="row">
			<nav class="nav navbar navbar-primary">
				
  			<a class="navbar-brand d-inline-block d-xl-none" href="{{ home_url('/') }}"><span class="sr-only">{{ get_bloginfo('name', 'display') }}</span></a>

				<button class="navbar-toggler menu menu--close collapsed" type="button" 
								data-toggle="collapse"
			          data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
			          aria-label="Toggle navigation">
			    <div class="menu__icon">
	          <div class="menu__line menu__line--1"></div>
	          <div class="menu__line menu__line--2"></div>
	          <div class="menu__line menu__line--3"></div>
	        </div>
			  </button>

			  <div class="primary-nav">
					@if (has_nav_menu('primary_navigation'))
		        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav__menu', 'depth' => 1, 'link_before' => '<span>', 'link_after' => '</span>']) !!}
		      @endif
			  </div>

			  <div class="mobile-nav">
				  <div class="collapse navbar-collapse" id="navbarContent">
						@if (has_nav_menu('primary_navigation'))
			        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-nav__menu', 'depth' => 1]) !!}
			      @endif
				  </div>
				</div>
				
			</nav>
		</div>
		@if ( !empty($sub_menu_items) )		
			<div class="row">
				<nav class="nav primary-subnav">
					<ul class="primary-subnav__menu">
						@foreach ($sub_menu_items as $sub_menu_item)
							
							@php
								$title = empty($sub_menu_item->post_title) ? $sub_menu_item->title : $sub_menu_item->post_title;								
								$url = $sub_menu_item->url;
								$target = $sub_menu_item->target;
								$classes = implode(" ", $sub_menu_item->classes);
							@endphp

							<li class="nav-item{{ $sub_menu_item->object_id == $post_ID ? ' active' : '' }}">
								<a 	class="nav-link {{ !empty($classes) ? $classes : '' }}" 
										href="{{ esc_url($url) }}"
										{{ !empty($target) ? 'target=' . $target : '' }}>
									{{ $title }}	
								</a>
							</li>

						@endforeach
    			</ul>
				</nav>
			</div>
		@endif
  </div>
</header>
