@extends('layouts.app')

@php
  $flexibleContent = get_field('flexible_content')
@endphp



@section('content')
       {{-- @include('partials.page-header')--}}


@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == 'section:_header_section')
@include('partials/frontpage.Intro-section')
@endif
@if ($fc['acf_fc_layout'] == 'section:_big_buttons_and_short_text')
@include('partials/frontpage.entrypoint-links')
@include('partials/frontpage.news-section')
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

@endforeach

@include('partials/caseworker.reachout')
@include('partials.content-front-page')

@endsection
