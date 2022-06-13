@extends('layouts.app')
@section('content')
@php
    $flexibleContent = get_field('flexiblecontent')
@endphp

{{-- Side navigation --}}
  <div class="wrapper-large"data-barba="container" data-barba-namespace="caseworker">

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

    {{-- Content --}}
<div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>

@include('partials/caseworker.hero-text')

@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == 'section:_image_text_list_link')
@include('partials/caseworker.targetgroup')
@endif
@if ($fc['acf_fc_layout'] == 'section:_image_and_repeatable_textfields')
@include('partials/caseworker.actionplan')
@endif
@if ($fc['acf_fc_layout'] == 'section:_image_text_button_and_repeatable_textfield')
@include('partials/caseworker.pedaprac')
@endif
@endforeach
      @include('partials/caseworker.reachout')
    </div>
  </div>
@endsection

<script>


</script>
