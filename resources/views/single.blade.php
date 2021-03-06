@extends('layouts.app')
@section('content')

@php $theID = get_the_ID() @endphp
@php $flexibleContent = get_field('flexiblecontent', get_the_ID()) @endphp
@php $postType = get_post_type($theID) @endphp

@if ($postType == 'house')

<div class="wrapper-large">

@if ("true" == "true")
  <div class="wrap-side-nav">
    <div class="side-nav">
      <ul>
        @foreach ($flexibleContent as $sh)
        @if ($sh['section_name'])
          <a href="#{{str_replace(' ', '', $sh['section_name'])}}"><li class="anchor" >{{$sh['section_name']}}</li></a>
        @endif
        @endforeach
      </ul>
    </div>
  </div>
@endif

<div class="wrap-side-content">

{{-- id="{{str_replace(' ', '', $fc['section_name'])}}" --}}
@include('partials/specific-house-post/house-intro')
@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == 'section:_text_image_text')
  @include('partials/specific-house-post/about-house')
@endif
@if ($fc['acf_fc_layout'] == 'section:_4_by_4')
  @include('partials/specific-house-post/activities')
@endif
@if ($fc['acf_fc_layout'] == 'section:_interactive_cards')
  @include('partials/specific-house-post/responsibility-section')
@endif
@if ($fc['acf_fc_layout'] == 'section:_4_images_with_text_between')
  @include('partials/specific-house-post/living-conditions')
@endif


@endforeach
</div>
</div>

@endif

{{-- @foreach ($flexibleContent as $fc)
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
@dump($post_fields) --}}
@endsection
