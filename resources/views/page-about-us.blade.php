@extends('layouts.app')
@section('content')
@php
$flexibleContent = get_field('flexible_content')
@endphp

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
           <a href="#core-values"><li class="anchor" >Core Values</li></a>
           <a href="#core-goals"><li class="anchor" >Core Goals</li></a>
           <a href="#staff"><li class="anchor" >Staff</li></a>
           <a href="#foundation"><li class="anchor" >Foundation</li></a>
           <a href="#jobs"><li class="anchor" >Jobs</li></a>
        </ul>
      </div>
    </div>
    @endif

    {{-- Content --}}

    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/about-us.hero-text')
      @foreach($flexibleContent as $fc)
        @if ($fc['acf_fc_layout'] == 'core_values')
          @include('partials/about-us.core-values')
        @endif
        @if ($fc['acf_fc_layout'] == 'core_goals')
          @include('partials/about-us.core-goals')
        @endif
        @if ($fc['acf_fc_layout'] == 'staff')
          @include('partials/about-us.staff')
        @endif
      @endforeach
      @include('partials/about-us.foundation')
      @include('partials/about-us.jobs')
    </div>
    </div>
    {{-- @foreach ($flexibleContent as $fc)
      @if ($fc['acf_fc_layout'] == 'section:_header_section')
      @include('partials/frontpage.intro-section')
      @endif
      @if ($fc['acf_fc_layout'] == 'section:_big_buttons_and_short_text')
      @include('partials/frontpage.entrypoint-links')
      @endif
      @if ($fc['acf_fc_layout'] == 'section:_short_text_and_repeatable_tabs')
      @include('partials/frontpage.tabs-section')
      @endif
      @if ($fc['acf_fc_layout'] == 'section:_core_values_-_enabled_or_disabled')
      @include('partials/frontpage.core-values')
      @endif
      @if ($fc['acf_fc_layout'] == 'section:_house_image_sliders_-_enabled_or_disabled')
      @include('partials/frontpage.image-slider')
      @endif
  </div> --}}
@endsection
