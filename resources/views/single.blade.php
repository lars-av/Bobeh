@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
    I am a post - Check single.blade for my markup
    Forture lars - make IF statement that checks the post's type and changes markup depending wether it is house or news
  @endwhile
@endsection
