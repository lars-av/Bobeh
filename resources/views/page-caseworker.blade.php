@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">Div1</div>
    @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/caseworker.targetgroup')
      @include('partials/caseworker.actionplan')
      @include('partials/caseworker.pedaprac')
      @include('partials/caseworker.reachout')
    </div>
  </div>
@endsection

<script>


</script>
