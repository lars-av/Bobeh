@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    hello i am the shit
    @include('partials.content-page')
  @endwhile
@endsection
