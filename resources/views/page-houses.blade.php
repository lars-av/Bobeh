@extends('layouts.app')

@section('content')
<div class="wrap-only-content"data-barba="container" data-barba-namespace="houses">
  @include('partials/houses.hero-text')
  @include('partials/houses.cards')

</div>


@endsection
