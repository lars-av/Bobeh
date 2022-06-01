@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

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
      @include('partials/about-us.core-values')
      @include('partials/about-us.core-goals')
      @include('partials/about-us.staff')
      @include('partials/about-us.foundation')
      @include('partials/about-us.jobs')
    </div>
  </div>
@endsection
