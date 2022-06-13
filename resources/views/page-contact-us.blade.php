@extends('layouts.app')
@section('content')

{{-- Side navigation --}}
  <div class="wrapper-large"data-barba="container" data-barba-namespace="contact-us">

     {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/caseworker.contact-form')

    </div>
  </div>
@endsection
