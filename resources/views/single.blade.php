@extends('layouts.app')

@section('content')

@php $flexibleContent = get_field('this_is_the_first_label', get_the_ID()) @endphp
@dump($flexibleContent)

@php
    $theID = get_the_ID()
@endphp
@dump(get_post_type($theID))

@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == 'insideflexcontent1')
<h1>COOL</h1>
<p>{{ $fc['firstactualacfinsidecontainer'] }}</p>
@endif
@if ($fc['acf_fc_layout'] == 'insideflexcontent2')
<section>
<h1>IMAGES?</h1>
<p>{{ $fc['firstactualacfinsidecontainer1'] }}</p>
</section>
@endif
@endforeach

@php $news_list = New_event::News(1) @endphp
    @foreach ($news_list as $news)
    {{ $news['title'] }}
    {{ $news['flex'] }}
    @endforeach

@dump(get_field('this_is_the_first_label', 157))
    
@php
  $post_fields = get_fields(29);
@endphp
@dump($post_fields)

<div class="wrapper-large">
  @if ("true" == "true")
  <div class="wrap-side-nav">
    <div class="side-nav">
      <ul>
         <a href="#about"><li class="anchor" >About</li></a>
         <a href="#day-to-day"><li class="anchor" >Day to Day Life</li></a>
         <a href="#process-of-applying"><li class="anchor" >Process of applying</li></a>
         <a href="#self-determination"><li class="anchor" >Self Determiation</li></a>
         <a href="#duty-of-care"><li class="anchor" >Duty of care</li></a>
         <a href="#involvement-in-development"><li class="anchor" >Involvement In Development</li></a>
      </ul>
    </div>
  </div>
  @endif

<div class="wrap-side-content">
@include('partials/specific-house-post.house-intro')
@include('partials/specific-house-post.about-house')
@include('partials/specific-house-post.activities')
@include('partials/specific-house-post.responsibility-section')
@include('partials/specific-house-post.living-conditions')
</div>
</div>
{{--   @while(have_posts()) @php the_post() @endphp

    @include('partials.content-single-'.get_post_type())

    I am a post - Check single.blade for my markup
    whetever
    Forture lars - make IF statement that checks the post's type and changes markup depending wether it is house or news
  @endwhile --}}
@endsection
