@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
           <a href="#about"><li class="anchor" >About</li></a>
           <a href="#day-to-day"><li class="anchor" >Day to Day Life</li></a>
           <a href="#process-of-applying"><li class="anchor" >Process of applying</li></a>
           <a href="#self-determination"><li class="anchor" >Self Determiation</li></a>
           <a href="#duty-of-care"><li class="anchor" >Duty of care</li></a>
           <a href="#involvement-in-development"><li class="anchor" >Involvement In Development</li></a>
        </ul>
      </div>
    </div>
    @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
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
