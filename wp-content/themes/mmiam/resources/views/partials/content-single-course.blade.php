<article @php post_class() @endphp>
	<header>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-12">
			    <h1 class="entry-title">{!! get_the_title() !!}</h1>
			    
			    @if($course_professors)
						<div class="professor">
						@foreach($course_professors as $professor_bloc)
							@include('partials.course-professor-bloc-item', $professor_bloc)
						@endforeach
						</div>
					@endif

					@if($course->number_of_credits)
						<div class="credits d-flex flex-column align-items-center">
							<div class="credits__number d-inline-flex justify-content-center align-items-center">
								{{ $course->number_of_credits }}
							</div>
							<div class="credits__text">
								@php echo _n( 'credit', 'credits', $course->number_of_credits, 'mmiam' ); @endphp
							</div>
						</div>
					@endif
				</div>
			</div>
		</div>
  </header>

  <div class="entry-content">
		<div class="container-fluid">
			<div class="row">
				
				<div class="entry-content__main pl-xl-4">
					<div class="row">
						@if($course->where)
						<div class="course-data d-flex align-items-center col-xl-6 col-lg-12 col-md-12">
							<div>
								<div class="course-data__label">{{ __('Where', 'mmiam') }}<span class="sr-only">{{ __(':', 'mmiam') }}</span></div>
							</div>
							<div class="course-data__detail">{!! $course->where !!}</div>
						</div>
						@endif

						@if($course->when)
						<div class="course-data d-flex align-items-center col-xl-6 col-lg-12 col-md-12">
							<div>
								<div class="course-data__label">{{ __('When', 'mmiam') }}<span class="sr-only">{{ __(':', 'mmiam') }}</span></div>
							</div> 
							<div class="course-data__detail">{{ $course->when }}</div>
						</div>
						@endif
					</div>

					@if($course->description)
					<div class="row">
						<div class="course-description col-sm-12">
					    <div class="wysiwyg">
						    {!! $course->description !!}
						  </div>
					  </div>
					</div>
					@endif
				</div>
				@if (App\display_sidebar())
	        <aside class="sidebar">
	        	<div class="course-sidebar">
		          @include('partials.course-sidebar')
		        </div>
	        </aside>
	      @endif
		    
	    </div>
		</div>
  </div>

  <footer class="entry-footer">
    @if(App\is_paginated_post())
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @endif

    <nav class="post-nav">
      <ul class="d-flex pager no-bullet">
        <li class="col-6 pager__link previous"><?php previous_post_link( '%link', 'previous', false, '', 'course_taxonomy' ); ?></li>
        <li class="col-6 pager__link next"><?php next_post_link( '%link', 'next', false, '', 'course_taxonomy' ); ?></li>
      </ul>
    </nav>  
  </footer>
  
  @if(comments_open())
  @php comments_template('/partials/comments.blade.php') @endphp
  @endif
</article>