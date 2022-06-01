@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
           <a href="#our-target-group"><li class="anchor" >Our target group</li></a>
           <a href="#action-plan"><li class="anchor" >Action plan</li></a>
           <a href="#pedagogical-practice"><li class="anchor" >Pedagogical Practice</li></a>
           <a href="#reach-out"><li class="anchor" >Reach out</li></a>
        </ul>
      </div>
    </div>
    @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/caseworker.hero-text')
      @include('partials/caseworker.targetgroup')
      @include('partials/caseworker.actionplan')
      @include('partials/caseworker.pedaprac')
      @include('partials/caseworker.reachout')
      @include('partials/caseworker.contact-form')
    </div>
  </div>
@endsection

<script>


</script>
