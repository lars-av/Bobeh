@extends('layouts.app')
@section('content')

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
           <a href="#contact-us"><li class="anchor" >Contact us</li></a>
           <a href="#find-us"><li class="anchor" >Find us</li></a>
        </ul>
      </div>
    </div>
    @endif

     {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/caseworker.contact-form')

    </div>
  </div>
@endsection
