@extends('layouts.app')

@section('content')
       {{-- @include('partials.page-header')--}}
    @include('partials/frontpage.intro-section')
    @include('partials/frontpage.entrypoint-links')
    @include('partials/frontpage.news-section')
    @include('partials/frontpage.tabs-section')
    @include('partials/frontpage.core-values')
    @include('partials/frontpage.image-slider')
    @include('partials.content-front-page')

@endsection
